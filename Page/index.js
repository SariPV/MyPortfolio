/*==================== MENU SHOW Y HIDDEN ====================*/
/*const navMenu = document.getElementById('nav-menu'),
navToggle = document.getElementById('nav-toggle'),
navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
/* Validate if constant exists */
/*if(navToggle){
    navToggle.addEventListener('click',() => {
        navMenu.classList.toggle('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
/* Validate if constant exists */
/*if(navClose){
    navClose.addEventListener('click',() => {
        navMenu.classList.remove('show-menu')
    })
}
*/
/*==================== REMOVE MENU MOBILE ====================*/
/*const navLink = document.querySelectorAll('.nav_link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))*/
const hamburger = document.querySelector(".toggle");
const navMenu = document.querySelector(".nav-menu");
const navLink = document.querySelectorAll(".nav-link");

hamburger.addEventListener("click", mobileMenu);
navLink.forEach(n => n.addEventListener("click", closeMenu));

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}

window.onscroll = function() {myFunction()};

var navbar = document.getElementById("nav");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky-nav")
  } else {
    navbar.classList.remove("sticky-nav");
  }
}

/*==================== Tabs ====================*/
const tabLinks = document.querySelectorAll(".tabs a");
const tabPanels = document.querySelectorAll(".tabs-panel");

for (let eli of tabLinks) {
  eli.addEventListener("click", e => {
    e.preventDefault();

    document.querySelector(".tabs li.active").classList.remove("active");
    document.querySelector(".tabs-panel.active").classList.remove("active");

    const parentListItem = eli.parentElement;
    parentListItem.classList.add("active");
    const indexs = [...parentListItem.parentElement.children].indexOf(parentListItem);

    const panel = [...tabPanels].filter(eli => eli.getAttribute("data-index") == indexs);
    panel[0].classList.add("active");
    });
  }


/*==================== ADD/DELETE MORE INPUT ====================*/

var add_more_fields = document.getElementById('add_more_fields');
var add_exp = document.getElementById('add_exp');
var add_ach = document.getElementById('add_ach');
var add_skill = document.getElementById('add_skill');
var add_ref = document.getElementById('add_ref');
var remove_fields = document.getElementById('remove_fields');
let edWrapper = document.getElementById("education-inputs");
let exWrapper = document.getElementById("experience-input");
let acWrapper = document.getElementById("achievement-input");
let refWrapper = document.getElementById("reference-input");
let skillWrapper = document.getElementById("skill-inputs");
// let controls = document.getElementById("controls");
//schedule.innerHTML = '<div class="ed-input"><div class="row"><div class="col-12"><input type="text" name="institution[]" class="wrapper" required><label>Institution</label></div></div> <div class="row"> <div class="col-12"><input type="text" name="degree[]" id="degree" required><label>Degree</label></div></div><div class="row"><div class="col-md-6"><!-- <input type="date" name="start" id="startdate" name="startdate"> --><label >Start:</label><select class="form-select" name="startyear[]" id="year"><option value="">Select Year</option></select></div><div class="col-md-6"><!-- <input type="date" class="date" name="end" id="graddate" name="graddate[]"> <input type="text" class="date-picker form-control" name="datepicker"  id="datepicker" /> --><label >End:</label><select class="form-select" name="endyear[]" id="endyear"><option value="">Select Year</option></select></div></div></div></div>' ;
let html = edWrapper.innerHTML
let exp = exWrapper.innerHTML
let ach = acWrapper.innerHTML
let skill = skillWrapper.innerHTML
let ref = refWrapper.innerHTML

var x = 0;


add_exp.onclick = function(){
  var div = document.createElement("div");
  div.innerHTML = exp 
  
  exWrapper.appendChild(div.firstElementChild)
  var deleted = document.getElementById("remove_fields").innerHTML;

}

var deletedExp = document.getElementById("remove_exp");
deletedExp.addEventListener('click',function(){  // if this function is defined outside it won't work because divElement will be out of its scope
  exWrapper.removeChild(exWrapper.lastElementChild);
});



add_ach.onclick = function(){
  var div = document.createElement("div");
  div.innerHTML = ach
  
  acWrapper.appendChild(div.firstElementChild);
  // var deleted = document.getElementById("remove_fields").innerHTML;

}
var deletedAch = document.getElementById("remove_achi");
deletedAch.addEventListener('click',function(){  // if this function is defined outside it won't work because divElement will be out of its scope
  acWrapper.removeChild(acWrapper.lastElementChild);
});




add_skill.onclick = function(){
  var div = document.createElement("div");
  div.innerHTML = skill
  
  skillWrapper.appendChild(div.firstElementChild);
  var deleted = document.getElementById("remove_fields").innerHTML;

}
var deletedSkill = document.getElementById("remove_skill");
deletedSkill.addEventListener('click',function(){  // if this function is defined outside it won't work because divElement will be out of its scope
  skillWrapper.removeChild(skillWrapper.lastElementChild);
});




add_ref.onclick = function(){
  var div = document.createElement("div");
  div.innerHTML = ref
  
  refWrapper.appendChild(div.firstElementChild);
 

}
var deletedRef = document.getElementById("remove_ref");
deletedRef.addEventListener('click',function(){  // if this function is defined outside it won't work because divElement will be out of its scope
  refWrapper.removeChild(refWrapper.lastElementChild);
});


add_more_fields.onclick = function(){
  x+=1

  var div = document.createElement("div");
 
  div.innerHTML = html 

  edWrapper.appendChild(div.firstElementChild);

};
var deleted = document.getElementById("remove_ed");
deleted.addEventListener('click',function(){  // if this function is defined outside it won't work because divElement will be out of its scope
  edWrapper.removeChild(edWrapper.lastElementChild);
});

// /*==================== PORTFOLIO SWIPER  ====================*/
function triggerClick(e) {
  document.querySelector('#profileImage').click();
}
function displayImage(e) {
  if (e.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e){
      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
    }
    reader.readAsDataURL(e.files[0]);
  }
}

/*==================== TESTIMONIAL ====================*/


/*==================== ADMIN ====================*/
var slider = document.getElementById('slider'),
    sliderItems = document.getElementById('items'),
    prev = document.getElementById('prev'),
    next = document.getElementById('next');
slide(slider, sliderItems, prev, next);
function slide(wrapper, items, prev, next) {
  var posX1 = 0,
      posX2 = 0,
      posInitial,
      posFinal,
      threshold = 100,
      slides = items.getElementsByClassName('slide'),
      slidesLength = slides.length,
      slideSize = items.getElementsByClassName('slide')[0].offsetWidth,
      firstSlide = slides[0],
      lastSlide = slides[slidesLength - 1],
      cloneFirst = firstSlide.cloneNode(true),
      cloneLast = lastSlide.cloneNode(true),
      index = 0,
      allowShift = true;
  
  // Clone first and last slide
  items.appendChild(cloneFirst);
  items.insertBefore(cloneLast, firstSlide);
  wrapper.classList.add('loaded');
  
  // Mouse and Touch events
  items.onmousedown = dragStart;
  
  // Touch events
  items.addEventListener('touchstart', dragStart);
  items.addEventListener('touchend', dragEnd);
  items.addEventListener('touchmove', dragAction);
  
  // Click events
  prev.addEventListener('click', function () { shiftSlide(-1) });
  next.addEventListener('click', function () { shiftSlide(1) });
  
  // Transition events
  items.addEventListener('transitionend', checkIndex);
  
  function dragStart (e) {
    e = e || window.event;
    e.preventDefault();
    posInitial = items.offsetLeft;
    
    if (e.type == 'touchstart') {
      posX1 = e.touches[0].clientX;
    } else {
      posX1 = e.clientX;
      document.onmouseup = dragEnd;
      document.onmousemove = dragAction;
    }
  }
  function dragAction (e) {
    e = e || window.event;
    
    if (e.type == 'touchmove') {
      posX2 = posX1 - e.touches[0].clientX;
      posX1 = e.touches[0].clientX;
    } else {
      posX2 = posX1 - e.clientX;
      posX1 = e.clientX;
    }
    items.style.left = (items.offsetLeft - posX2) + "px";
  }
  
  function dragEnd (e) {
    posFinal = items.offsetLeft;
    if (posFinal - posInitial < -threshold) {
      shiftSlide(1, 'drag');
    } else if (posFinal - posInitial > threshold) {
      shiftSlide(-1, 'drag');
    } else {
      items.style.left = (posInitial) + "px";
    }
    document.onmouseup = null;
    document.onmousemove = null;
  }
  
  function shiftSlide(dir, action) {
    items.classList.add('shifting');
    
    if (allowShift) {
      if (!action) { posInitial = items.offsetLeft; }
      if (dir == 1) {
        items.style.left = (posInitial - slideSize) + "px";
        index++;      
      } else if (dir == -1) {
        items.style.left = (posInitial + slideSize) + "px";
        index--;      
      }
    };
    
    allowShift = false;
  }
    
  function checkIndex (){
    items.classList.remove('shifting');
    if (index == -1) {
      items.style.left = -(slidesLength * slideSize) + "px";
      index = slidesLength - 1;
    }
    if (index == slidesLength) {
      items.style.left = -(1 * slideSize) + "px";
      index = 0;
    }
    
    allowShift = true;
  }
}
/*==================== CHANGE BACKGROUND HEADER ====================*/ 



/*==================== SHOW SCROLL UP ====================*/ 

/*==================== MODAL POP UP ====================*/ 



/*==================== DARK LIGHT THEME ====================*/ 
