<?php
require('config.php');


?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv = "X-UA-Compatible" content="ie=edge">
        <!--==================== FONTAWESOMEICONS ====================-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://kit.fontawesome.com/070d25e7f6.js" crossorigin="anonymous"></script>
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="">
        
        <!--==================== CSS ====================-->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        
        
        <title>Responsive Portfolio Website</title>
    </head>
    <body>
          <!--!--==================== HEADER ====================-->
          <header class="header" id="header">
            <nav class="nav-app" id="nav">
                <a href="#" class="nav-logo">MyPortfolio</a>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="index2.php" class="nav-link">Home</a>
                        </li>
                  
                        <li class="nav-item">
                            <a href="#" class="nav-link">Template</a>
                        </li>
                        <li class="nav-item">
                            <a href="index2.php#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="signUp.html"  name= "signOut" class="button">Log out</a>
                        </li>
                        
      
                    </ul>
                    <div class="toggle">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    
            
                 <!--   <div class="nav_toggle" id="nav-toggle">
                        <i class="fas fa-bars"></i>
                    </div>-->
                
            
            </nav>
            
            </header>
            <a href="tempForm.html" class="btn btn-primary" style="color:#2CE080; background-color: #ffffff;border-color: #2CE080; margin-top: 50px; float: right; margin-right: 20px;"><i style="color:#2CE080;" class="bi bi-file-earmark-plus"></i> Create New Template</a>

            <div class="outer-wrapper">

              <section class="templates section" id="templates">
                <div class="tabs-container grid">
                    <ul class="tabs">
                      <li class="active">
                        <a href="">ALL TEMPLATES</a>
                      </li>
                      <li>
                        <a href="">PROFESSIONAL</a>
                      </li>
                      <li>
                        <a href="">SIMPLE</a>
                      </li>
                      <li>
                        <a href="">CREATIVE</a>
                      </li>
                    </ul>
                    <div class="tabs-content">
                      <div class="tabs-panel active" data-index="0">
                      <?php
                      require('config.php');
                    
                    $query ="SELECT * FROM templates ";
                    
                    $list = mysqli_query($link,$query);
                    if (!$list)
                    {
                    die ('failed to connect mysql database'. mysqli_connect_error());
                    }
                    //$skill=mysqli_fetch_array($list);
                    while($row = mysqli_fetch_array($list)){
                      ?>

                        <div class="templateImage">
                         <span class="middle" style="font-size:20px; float:right;"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='deleteTemp.php?TMPID=<?php echo $row["id"];?>';}"    name="delete" id="removeTemp" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-x-circle-fill" style="color: #D0312D; font-size: 1.5em;"></i></a></span>
                      <a href="<?php echo $row['templates'] ?>"><img src="<?php echo $row['templateImage'] ?>"  alt="" class="pro_img img" style="width: 400px;"/></a>
                      <!-- <div class="middle">
                      <div class="text">Preview</div>
                      </div> -->
                    </div>
                    <?php 
                    }
                    ?>

                    
                        <!-- <img src="images/Pro2.jpg" alt="" class="pro_img img">
                        <img src="images/Pro3.jpg" alt="" class="pro_img img">
                        <img src="images/Simple1.jpg" alt="" class="pro_img img">
                        <img src="images/Simple2.jpg" alt="" class="pro_img img">
                        <img src="images/Simple3.jpg" alt="" class="pro_img img">
                        <img src="images/Creative1.jpg" alt="" class="pro_img img">
                        <img src="images/Creative2.jpg" alt="" class="pro_img img">
                        <img src="images/Creative3.jpg" alt="" class="pro_img img"> -->
                      </div>
                      <div class="tabs-panel" data-index="1">
                        <!-- <img src="images/Pro1.jpg" alt="" class="pro_img img">
                        <img src="images/Pro2.jpg" alt="" class="pro_img img">
                        <img src="images/Pro3.jpg" alt="" class="pro_img img"> -->
                        <?php
                      require('config.php');
                    $category = "Professional";
                    $query ="SELECT * FROM templates WHERE category='$category'";
                    
                    $list = mysqli_query($link,$query);
                    if (!$list)
                    {
                    die ('failed to connect mysql database'. mysqli_connect_error());
                    }
                    //$skill=mysqli_fetch_array($list);
                    while($row = mysqli_fetch_array($list)){
                      ?>

                      <div class="templateImage">
                      <span class="middle" style="font-size:20px; float:right;"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='deleteTemp.php?TMPID=<?php echo $row["id"];?>';}"    name="delete" id="removeTemp" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-x-circle-fill" style="color: #D0312D; font-size: 1.5em;"></i></a></span>
                      <a href="<?php echo $row['templates'] ?>"><img src="<?php echo $row['templateImage'] ?>"  alt="" class="pro_img img" style="width: 400px;"/></a>
                      <!-- <div class="middle">
                      <div class="text">Preview</div>
                      </div> -->
                    </div>
                    <?php 
                    }
                    ?>
                      </div>
                      <div class="tabs-panel" data-index="2">
                        <!-- <img src="images/Simple1.jpg" alt="" class="pro_img img">
                        <img src="images/Simple2.jpg" alt="" class="pro_img img">
                        <img src="images/Simple3.jpg" alt="" class="pro_img img"> -->
                        <?php
                      require('config.php');
                    $category = "Simple";
                    $query ="SELECT * FROM templates WHERE category='$category'";
                    
                    $list = mysqli_query($link,$query);
                    if (!$list)
                    {
                    die ('failed to connect mysql database'. mysqli_connect_error());
                    }
                    //$skill=mysqli_fetch_array($list);
                    while($row = mysqli_fetch_array($list)){
                      ?>

                      <div class="templateImage">
                      <span class="middle" style="font-size:20px; float:right;"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='deleteTemp.php?TMPID=<?php echo $row["id"];?>';}"    name="delete" id="removeTemp" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-x-circle-fill" style="color: #D0312D; font-size: 1.5em;"></i></a></span>
                      <a href="<?php echo $row['templates'] ?>"><img src="<?php echo $row['templateImage'] ?>"  alt="" class="pro_img img" style="width: 400px;"/></a>
                      <!-- <div class="middle">
                      <div class="text">Preview</div>
                      </div> -->
                    </div>
                    <?php 
                    }
                    ?>
                      </div>
                      <div class="tabs-panel" data-index="3">
                        <!-- <img src="images/Creative1.jpg" alt="" class="pro_img img">
                        <img src="images/Creative2.jpg" alt="" class="pro_img img">
                        <img src="images/Creative3.jpg" alt="" class="pro_img img"> -->
                        <?php
                      require('config.php');
                    $category = "Creative";
                    $query ="SELECT * FROM templates WHERE category='$category'";
                    
                    $list = mysqli_query($link,$query);
                    if (!$list)
                    {
                    die ('failed to connect mysql database'. mysqli_connect_error());
                    }
                    //$skill=mysqli_fetch_array($list);
                    while($row = mysqli_fetch_array($list)){
                      ?>

                      <div class="templateImage">
                      <span class="middle" style="font-size:20px; float:right;"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='deleteTemp.php?TMPID=<?php echo $row["id"];?>';}"    name="delete" id="removeTemp" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-x-circle-fill" style="color: #D0312D; font-size: 1.5em;"></i></a></span>
                      <a href="<?php echo $row['templates'] ?>"><img src="<?php echo $row['templateImage'] ?>"  alt="" class="pro_img img" style="width: 400px;"/></a>
                      <!-- <div class="middle">
                      <div class="text">Preview</div>
                      </div> -->
                    </div>
                    <?php 
                    }
                    ?>
                      </div>
                    </div>
                  </div>


            </section>
            </body>
            <!--==================== MAIN JS ====================--> 
        <script src="index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </html>