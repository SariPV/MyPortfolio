<?php
	session_start();
	require_once("config.php");

	if(!isset($_SESSION['userLogin']))
	{
		echo "Please Login!";
		exit();
	}else{
    //  $query = "SELECT 'role' from user_account where id ='".$_SESSION['userLogin']."'";
    //  $result = mysqli_query($link, $query);  
    if ($_SESSION['status'] == 'US'){
      $id = $_SESSION['id'];
     // "SELECT id from user_account where email ='".$_SESSION['id']."'";
     // header("location:index.php");
    }else{
      header("location:admin.php");  
    }
    
  }
// 	session_start();
// 	require_once("config.php");

// 	if(!isset($_SESSION['userLogin']))
// 	{
// 		echo "Please Login!";
// 		exit();
// 	}else{
//     //  $query = "SELECT 'role' from user_account where id ='".$_SESSION['userLogin']."'";
//     //  $result = mysqli_query($link, $query);  
//     // if ($query = 'US'){
//     // //   $id = $_SESSION['userLogin'];
//     //  // "SELECT id from user_account where email ='".$_SESSION['id']."'";
//     // //  header("location:index.php");
//     // }else{
//     //   header("location:admin.php");  
//     // }
    
//   }
	
	//*** Update Last Stay in Login System
	// $sql = "UPDATE member SET LastUpdate = NOW() WHERE UserID = '".$_SESSION["UserID"]."' ";
	// $query = mysqli_query($con,$sql);

	// //*** Get User Login
	// $strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	// $objQuery = mysqli_query($con,$strSQL);
	// $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/070d25e7f6.js" crossorigin="anonymous"></script>
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="">
        
        <!--==================== CSS ====================-->
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        

<!-- Moment Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>

        
        
        
        <title>Responsive Portfolio Website</title>
    </head>
    <body>
          <!--!--==================== HEADER ====================-->
          <header class="header" id="header">
            <nav class="nav-app" id="nav">
                <a href="#" class="nav-logo">MyPortfolio</a>
                    <ul class="nav-menu">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="template.php" class="nav-link">Template</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php#about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php"  name= "signOut" class="button">Log out</a>
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
            <?php
        
           require_once("config.php");
           // $id = null;

            // if(isset($_GET["id"]))

            // {
            // $id = $_GET["id"];

            // }

        //    $id =$_SESSION['userLogin'];
              $id =$_SESSION['id'];
        //    $sql ="SELECT * FROM user_account where id = '".$_SESSION['userLogin']."' ";		
             $sql ="SELECT * FROM user_account where id = $id ";								
            $result = mysqli_query($link,$sql) or die ("Error in query: $sql " . mysqli_error());
            $data = mysqli_fetch_array ($result);


            ?>
            <?php
            require_once("config.php");
            // if(isset($_GET["id"]))

            // {
            // $id = $_GET["id"];

            // }
           // $id =$_SESSION['userLogin'];
           $id =$_SESSION['id'];
            $sql ="SELECT * FROM user_profile where user_profile.userid = $id  ";									
            $result = mysqli_query($link,$sql) or die ("Error in query: $sql " . mysqli_error());
            $data2 = mysqli_fetch_array ($result);
            // if (empty($data2)){
               
            // }
            ?>

          
            <div class="profile">
                <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="bi bi-person-square"></i><br>Personal Info</button>
                      <button class="nav-link" id="v-pills-education-tab" data-bs-toggle="pill" data-bs-target="#v-pills-education" type="button" role="tab" aria-controls="v-pills-education" aria-selected="false"><i class="bi bi-mortarboard"></i><br>Education</button>
                      <button class="nav-link" id="v-pills-experience-tab" data-bs-toggle="pill" data-bs-target="#v-pills-experience" type="button" role="tab" aria-controls="v-pills-experience" aria-selected="false"><i class="bi bi-briefcase"></i><br>Experience</button>
                      <button class="nav-link" id="v-pills-achievement-tab" data-bs-toggle="pill" data-bs-target="#v-pills-achievement" type="button" role="tab" aria-controls="v-pills-achievement" aria-selected="false"><i class="bi bi-trophy"></i><br>Achievement</button>
                      <button class="nav-link" id="v-pills-skill-tab" data-bs-toggle="pill" data-bs-target="#v-pills-skill" type="button" role="tab" aria-controls="v-pills-skill" aria-selected="false"><i class="bi bi-lightbulb"></i><br>Skill</button>
                      <button class="nav-link" id="v-pills-reference-tab" data-bs-toggle="pill" data-bs-target="#v-pills-reference" type="button" role="tab" aria-controls="v-pills-reference" aria-selected="false"><i class="bi bi-people-fill"></i><br>References</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">PERSONAL INFORMATION</h4>
                        <img style="border-radius: 50px"  src="<?php echo $data2['profileImage']?>" width="100" height="100" alt="Profibild" />
                        <a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" class="edit"  data-modal="modalOne" id="edit"  style="font-size: 14px; color: #484d4ac0; float:right;"><i class="bi bi-pencil" style="color: #484d4ac0; font-size: 1.5em; "></i></a>
                        <div class="name" style="padding-top:20px;font-weight:bold"><?php echo  empty($data2['full-name']) ?   " " : $data2['full-name'] ?></div>
                        <div class="email"><i style="font-size: 16px;color:#3cca7e; font-weight:900; padding-right: 10px" class="bi bi-envelope-fill"></i><?php echo $data['email'] ?></div>
                        <div class="phone"><i  style="font-size: 16px;color:#3cca7e; font-weight:900; padding-right: 10px" class="bi bi-telephone-fill"></i><?php echo empty($data2['phone']) ? "": $data2['phone'] ?></div>
                        <div class="position"><i style="font-size: 16px;color:#3cca7e; font-weight:900; padding-right: 10px" class="bi bi-person-fill"></i><?php echo empty($data2['position']) ? "": $data2['position'] ?></div>
                        <div class="website"><i style="font-size: 16px;color:#3cca7e; font-weight:900; padding-right: 10px" class="bi bi-link-45deg"></i><?php echo empty($data2['website']) ? "" : $data2['website'] ?></div>
                        <div class="address"><i style="font-size: 16px;color:#3cca7e; font-weight:900; padding-right: 10px" class="bi bi-house-fill"></i><?php echo empty($data2['address']) ? "": $data2['address'] ?></div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                           
                          
                        <form style="padding:25px; margin:25px;box-shadow:0 2px 5px #f5f5f5;" action="add.php" method="post" enctype="multipart/form-data" >
                        <h5 class="modal-title" style="color:#3cca7e; font-weight: 900; text-align: center;" id="exampleModalLabel">Edit Profile</h5>
                            <div class="profilepic" onclick="triggerClicl()">
                                <img onclick="triggerClick()" id="profileDisplay"  class="profilepic__image" src="<?php echo $data2['profileImage']?>" width="250" height="250" alt="Profibild" />
                                <div class="profilepic__content">
                                  <span class="profilepic__icon"><i class="fas fa-camera"></i></span>
                                  <input type="file" id="profileImage" name="profileImage" onchange="displayImage(this)" class="profilepic__input"><span class="profilepic__text">Edit Profile</span>
                                </div>
                              </div>
                            <div class="row">
                                
                                   
                                
                                <div class="col-12">
                                    <input type="text" name="fullname" id="fullname" value="<?php echo empty($data2['full-name']) ?   " " : $data2['full-name'] ?>"required>
                                    <label>Full Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" value="<?php echo empty($data['email']) ? "": $data['email'] ?>">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="phone" value="<?php echo empty($data2['phone']) ? "": $data2['phone'] ?>"required>
                                    <label>Phone no</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="occupation" value="<?php echo empty($data2['position']) ? "": $data2['position'] ?>"required>
                                    <label>Occupation</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="website" value="<?php echo empty($data2['website']) ? "" : $data2['website'] ?>"required>
                                    <label>website</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="address" value="<?php echo empty($data2['address']) ? "": $data2['address'] ?>"required>
                                    <label>Address</label>
                                </div>
                            </div>
                            <input type="submit" name ="save" id="save" value="save">
                        </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                    </div>
                    </div>
                                        </div>
                                        <?php
            require_once("config.php");
          
           // $id =$_SESSION['userLogin'];
           $id =$_SESSION['id'];
            $sql ="SELECT * FROM education where  education.userid = $id   ";									
            $result = mysqli_query($link,$sql) or die ("Error in query: $sql " . mysqli_error());
           // $edu= mysqli_fetch_array ($result);
            // if (empty($data2)){
            //     header("location:profile1.php");  
            // }
            ?>
                    <!--Education Tabs-->
                     <div class="tab-pane fade show" id="v-pills-education" role="tabpanel" aria-labelledby="v-pills-education-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">EDUCATION</h4>
                        <?php 
                            while ( $edu = mysqli_fetch_array ($result)) {
                                ?>
                           <a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?EDID=<?php echo $edu["id"];?>';}" name="delete" style="float:right"><i  style="color:#DC143C; font-size: 1.5em; padding-left:20px " class="bi bi-x-circle"></i></a>
                        <a   data-toggle="modal" data-target="#educationModal" data-whatever="@education" class="edu-edit" id="edu-edit"
                             data-eduid="<?php echo $edu['id']?>" 
                             data-institution="<?php echo $edu['institution']?>" 
                             data-degree="<?php echo $edu['degree']?>" 
                             data-yearStart="<?php echo $edu['yearStart']?>" 
                             data-yearEnd="<?php echo $edu['yearEnd']?>" style="font-size: 14px; color: #484d4ac0; float:right;"><i class="bi bi-pencil" style="color: #484d4ac0; font-size: 1.5em; "></i></a>
                       
                        <div class="institution" style="padding-top:20px;font-weight:bold">Institution: <?php echo $edu['institution']  ?></div>
                        <div class="degree">Degree: <?php echo $edu['degree'] ?></div>
                        <div class="From"><?php echo $edu['yearStart'] ?>-<?php echo $edu['yearEnd'] ?></div>
                        <?php
                            }
                            ?>
                          
                          <!-- tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" -->
                        <div class="modal fade" id="educationModal" >
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header"  style="display:block;">
                           
                           
                        <form id="edit-form"  action="education.php" method="post" >
                        <h5 class="modal-title" style="color:#3cca7e; font-weight: 900; text-align: center;" id="exampleModalLabel">Edit Education</h5> 
                        <input type="hidden" id="edu-id" name="id" value="" >
    
                        <div class="row" >
                            <div class="col-12">
                                <input type="text" id="institution" name="institution" class="wrapper" required>
                                <label>Institution</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="degree" id="degree" required>
                                <label>Degree</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <input type="date" name="start" id="startdate" name="startdate"> -->
                                <label >Start:</label>
                                <select class="form-select" name="startyear" id="yearStart">
                                
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <!-- <input type="date" class="date" name="end" id="graddate" name="graddate"> 
                                <input type="text" class="date-picker form-control" name="datepicker"  id="datepicker" /> -->
                                <label >End:</label>
                                <select class="form-select" name="endyear" id="endyear">
                               
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                </select>

                         
                            
                            
                            
                        </div>
                        
                    </div>
                    <!-- <div class="controls" id='controls'>
                        <a href="#" class="add-more"  id="add_more_fields"  style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-plus-circle-fill" style="color: #484d4ac0; font-size: 1.5em; "></i>Add More</a>
                        <a href="#"  id="remove_fields" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-trash-fill" style="color: #484d4ac0; font-size: 1.5em;"></i>Remove Field</a>
                      </div>
                    -->
                        <input type="submit" id="save" name="update" value="save">

                    </form>
                    </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" class="close" data-dismiss="modal">Close
  
                        </button>

                        </div>
                    </div>
                    </div>
                
                    </div>
                    <a class="btn" role="button" data-toggle="collapse" data-target="#target2" style="margin-top:30px;font-size: 14px;background-color:rgb(109, 106, 124); color:#FFFF"><i class="bi bi-plus" style="font-size: 14px;"></i>ADD MORE</a>
                        <div  class="collapse myTarget" id="target2">
                        <form id="edit-form"  action="education.php" method="post" >
                        <h5 class="title" style="color:#3cca7e; font-weight: 900; text-align: center;" id="exampleModalLabel">Add Education</h5> 
                            

                        <div class="education-inputs" id="education-inputs">
                            <div class="ed-input" id="ed-input" style="padding-top:20px;">
                        <div class="row" >
                            <div class="col-12">
                                <input type="text" id="newinstitution" name="institution[]" class="wrapper"required>
                                <label>Institution</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="degree[]" id="newdegree"  required>
                                <label>Degree</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <input type="date" name="start" id="startdate" name="startdate"> -->
                                <label >Start:</label>
                                <select class="form-select" name="startyear[]" id="Syear">
                                    <option value="" ></option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <!-- <input type="date" class="date" name="end" id="graddate" name="graddate"> 
                                <input type="text" class="date-picker form-control" name="datepicker"  id="datepicker" /> -->
                                <label >End:</label>
                                <select class="form-select" name="endyear[]" id="Eyear">
                                    <option value="" ></option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                </select>

                            </div> 
                            </div>  
                            
                            
                            
                        </div>
                        
                    </div>
                    <div class="controls" id='controls'>
                        <a href="#" class="add-more"  id="add_more_fields"  style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-plus-circle-fill" style="color: #484d4ac0; font-size: 1.5em; "></i>Add More</a>
                        <a href="#"  id="remove_ed" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-trash-fill" style="color: #484d4ac0; font-size: 1.5em;"></i>Remove Field</a>
                      </div>
                        <input type="submit" id="save" name="save" value="save">

                    </form>
                        </div>
                    <!-- <div class="controls" id='controls'>
                        <a href="#" class="add-more" onClick="GFG_Fun()"  id="add_more_fields"  style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-plus-circle-fill" style="color: #484d4ac0; font-size: 1.5em; "></i>Add More</a>
                        <a href="#"  id="remove_fields" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-trash-fill" style="color: #484d4ac0; font-size: 1.5em;"></i>Remove Field</a>
                    </div> -->
                        </div>


                  


                    
                <?php
            require_once("config.php");
            $id =$_SESSION['id'];
            $sql ="SELECT * FROM experience where userid = $id   ";									
            $result = mysqli_query($link,$sql) or die ("Error in query: $sql " . mysqli_error());
           // $experience = mysqli_fetch_array ($result);
            ?>

                      <div class="tab-pane fade" id="v-pills-experience" role="tabpanel" aria-labelledby="v-pills-experience-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">EXPERIENCE</h4>
                        <?php 
                            while ( $experience = mysqli_fetch_array ($result)) {
                                ?>
                            <a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?EXPID=<?php echo $experience["id"];?>';}" name="delete" style="float:right"><i  style="color:#DC143C; font-size: 1.5em; padding-left:20px " class="bi bi-x-circle"></i></a>

                        <a  data-exid="<?php echo  $experience['id']?>"
                            data-company="<?php echo $experience['company'] ?>"
                            data-position=" <?php echo $experience['position'] ?>"
                            data-description="<?php echo $experience['description'] ?>"
                            data-yearS="<?php echo $experience['yearStart'] ?>"
                            data-yearE="<?php echo $experience['yearEnd'] ?>" data-toggle="modal" data-target="#experienceModal" data-whatever="@education" class="edit-exp"  id="edit-exp"  style="font-size: 14px; color: #484d4ac0; float:right;"><i class="bi bi-pencil" style="color: #484d4ac0; font-size: 1.5em; "></i></a>
                        <div class="Company" style="padding-top:20px;font-weight:bold">Company: <?php echo $experience['company']  ?></div>
                        <div class="position">Position: <?php echo $experience['position'] ?></div>
                        <div class="description">Description: <?php echo $experience['description'] ?></div>
                        <div class="From"><?php echo $experience['yearStart'] ?>-<?php echo $experience['yearEnd'] ?></div>
                        <?php
                            }
                           ?>

                        <div class="modal fade" id="experienceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="display:block;">
                        <form action="experience.php" id="edit-form" method="post"  class="form-group">
                        <h5 class="modal-title" style="color:#3cca7e; font-weight: 900; text-align: center;" id="exampleModalLabel">Edit Experience</h5> 

                        
                            <input type="hidden" id="exid" name="exid" value="">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="company" id="company" required>
                                <label>Company</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-12">
                                <input type="text" id="position" name="position" required>
                                <label>position</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-12">
                                <input type="text" id="description" name="description" required>
                                <label>description</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <input type="date" id="startdate" name="startdate">  -->
                                <label >Start:</label>
                                <select class="form-select" name="startyear" id="yearSt">
                                <option>year</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                </select>


                            </div>
                            <div class="col-md-6">
                                <label >End:</label>
                                <select class="form-select" name="endyear" id="yearEn">
                                <option>year</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                </select>

                            </div>   
                            
                        </div>
                            
                        
                        <!-- <div class="controls">
                            <a href="#" class="add-more" id="add_more_fields" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-plus-circle-fill" style="color: #484d4ac0; font-size: 1.5em; "></i>Add More</a>
                            <a href="#"  id="remove_fields" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-trash-fill" style="color: #484d4ac0; font-size: 1.5em;"></i>Remove Field</a>
                          </div> -->
                       
                        <input type="submit" name="update" value="save">
                    </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                    </div>
                    </div>
                    <a class="btn" role="button" data-toggle="collapse" data-target="#target2" style="margin-top:30px;font-size: 14px;background-color:rgb(109, 106, 124); color:#FFFF"><i class="bi bi-plus" style="font-size: 14px;"></i>ADD MORE</a>
                        <div  class="collapse myTarget" id="target2">
                        <form action="experience.php" id="form2" method="post"  class="form-group2">
                        <h5 class="title" style="color:#3cca7e; font-weight: 900; text-align: center;" id="exampleModalLabel">Add Experience</h5> 

                        <div class="experience-input" id="experience-input">
                            <div class="ed-input">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="company[]" class="wrapper" required>
                                <label>Company</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-12">
                                <input type="text" id="newposition" name="position[]" required>
                                <label>position</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-12">
                                <input type="text" id="newdescription" name="description[]" required>
                                <label>description</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <input type="date" id="startdate" name="startdate">  -->
                                <label >Start:</label>
                                <select class="form-select" name="startyear[]" id="exyear">
                                <option></option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                </select>


                            </div>
                            <div class="col-md-6">
                                <label >End:</label>
                                <select class="form-select" name="endyear[]" id="exyear">
                                <option></option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                </select>

                            </div>   
                            
                        </div>
                            
                        </div>   
                        
                    </div>
                        <div class="controls">
                            <a href="#" class="add-more" id="add_exp" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-plus-circle-fill" style="color: #484d4ac0; font-size: 1.5em; "></i>Add More</a>
                            <a href="#"  id="remove_exp" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-trash-fill" style="color: #484d4ac0; font-size: 1.5em;"></i>Remove Field</a>
                          </div>
                       
                        <input type="submit" name="save" value="save">
                    </form>
                      </div>
                                        </div>
                      <?php
                        require_once("config.php");
                        $id =$_SESSION['id'];
                        $sql ="SELECT * FROM achievement where  userid = $id  ";									
                        $result = mysqli_query($link,$sql) or die ("Error in query: $sql " . mysqli_error());
               //         $achievement= mysqli_fetch_array ($result);
                        ?>

                      <div class="tab-pane fade" id="v-pills-achievement" role="tabpanel" aria-labelledby="v-pills-achievement-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">ACHIEVEMENT</h4>
                        <?php 
                            while ( $achievement = mysqli_fetch_array ($result)) {
                                ?>
                                <a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?ACHID=<?php echo $achievement["id"];?>';}" name="delete" style="float:right"><i  style="color:#DC143C; font-size: 1.5em; padding-left:20px " class="bi bi-x-circle"></i></a>
                        <a   data-acid="<?php echo  $achievement['id']?>"
                        data-award="<?php echo  $achievement['description']?>"
                        data-year="<?php echo  $achievement['year']?>" data-toggle="modal" data-target="#achievementModal" data-whatever="@achievement" class="edit-ach"  id="edit-ach"  style="font-size: 14px; color: #484d4ac0; float:right;"><i class="bi bi-pencil" style="color: #484d4ac0; font-size: 1.5em; "></i></a>
                        <div class="award" style="padding-top:20px;font-weight:bold">Award: <?php echo $achievement['description']  ?></div>
                        <div class="year">Year: <?php echo $achievement['year'] ?></div>
                        <?php
                            }
                            ?>
                           
                        <div class="modal" id="achievementModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="display:block;"> 
                        
                            <form action="achievement.php" id="edit-form" method="post" >
                            <h5 class="modal-title" style="color:#3cca7e; font-weight: 900; text-align: center;" id="exampleModalLabel">Edit Achievement</h5> 
                            
                            <div class="ac-input">
                            <input type="hidden" id="acid" name="acid" value="">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" id="award" name="award" value="" required>
                                <label>award</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-6">
                              
                                <select class="form-select" name="years" id="years" >
                                <option>year</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                </select>
                            </div>
                            
                            
                            
                            
                        </div>   
                        
                    </div>
                    <div class="controls">
                        <!-- <a href="#"  id="add_more_fields" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-plus-circle-fill" style="color: #484d4ac0; font-size: 1.5em; "></i>Add More</a> -->
                        <a href="#"  id="remove_fields" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-trash-fill" style="color: #484d4ac0; font-size: 1.5em;"></i>Remove Field</a>
                      </div>
                   
                        <input type="submit" name="update" id="save" value="save">
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                    </div>
                    </div>
                    <a class="btn" role="button" data-toggle="collapse" data-target="#target2" style="margin-top:30px;font-size: 14px;background-color:rgb(109, 106, 124); color:#FFFF"><i class="bi bi-plus" style="font-size: 14px;"></i>ADD MORE</a>
                        <div  class="collapse myTarget" id="target2">
                        <form id="form"  action="achievement.php" method="post" >
                        <h5 class="title" style="color:#3cca7e; font-weight: 900; text-align: center;" id="exampleModalLabel">Add Achievement</h5> 
                            

                       
                        <div class="achievement-input" id="achievement-input">
                            <div class="ac-input">
                       <div class="row">
                           <div class="col-12">
                               <input type="text" id="award" name="award[]"  required>
                               <label>award</label>
                           </div>
                       </div>   
                       <div class="row">
                           <div class="col-md-6">
                               <!-- <input type="date"class="form-control" name="start"  id="yearpicker"> -->
                               <!-- <label >Year</label> -->
                               <!-- <select class="form-select ach_year" name="years[]" id="years">
                                   <option value=""></option>
                               </select> -->
                            <select class="form-select" id="styears" name="years[]">
                                <option>year</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                           </div>
                              </div>   
                       
                   </div>
                   </div>
                  
                    <div class="controls" id='controls'>
                        <a class="add-more"  id="add_ach"  style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-plus-circle-fill" style="color: #484d4ac0; font-size: 1.5em; "></i>Add More</a>
                        <a href="#"  id="remove_achi" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-trash-fill" style="color: #484d4ac0; font-size: 1.5em;"></i>Remove Field</a>
                      </div>
                        <input type="submit" id="save" name="save" value="save">

                    </form>
                        </div>
                        </div>
                        <?php
                            require_once("config.php");
                            $id =$_SESSION['id'];
                            $sql ="SELECT * FROM skill where userid = $id   ";									
                            $result = mysqli_query($link,$sql) or die ("Error in query: $sql " . mysqli_error());
                    // $experience = mysqli_fetch_array ($result);
                        ?>
                      <div class="tab-pane fade" id="v-pills-skill" role="tabpanel" aria-labelledby="v-pills-skill-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">SKILL</h4>
                        <?php 
                            while ( $skill = mysqli_fetch_array ($result)) {
                                ?>
                        <a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?SKILLID=<?php echo $skill["id"];?>';}" name="delete" style="float:right"><i  style="color:#DC143C; font-size: 1.5em; padding-left:20px " class="bi bi-x-circle"></i></a>
                        <a   data-skillid="<?php echo  $skill['id']?>"
                        data-skill="<?php echo  $skill['skillname']?>"
                        data-level="<?php echo  $skill['level']?>" data-toggle="modal" data-target="#skillModal" data-whatever="@skill" class="editSkill"  style="font-size: 14px; color: #484d4ac0; float:right;"><i class="bi bi-pencil" style="color: #484d4ac0; font-size: 1.5em; "></i></a>
                        <div class="skill" style="padding-top:20px;font-weight:bold"> <?php echo $skill['skillname']  ?></div>
                        <div class="progress" style="height: 20px;">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $skill['level']  ?>%; background-color:#3cca7e;" aria-valuenow="<?php echo $skill['level']  ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        
                        <?php
                            }
                            ?>
                           
                            <div class="modal" id="skillModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="display:block;"> 
                        <form action="skill.php" id="form" method="post"  class="form-group">
                        <h5 class="modal-title" style="color:#3cca7e; font-weight: 900; text-align: center;" id="exampleModalLabel">Edit Skill</h5> 

                        <div class="skill-input" id="skill-input">
                        <input type="hidden" id="skillid" name="skillid" value="">
                        <div class="row">
                            <div class="col-12">
                                <input type="text"  name="skill" name="skill" id="skill"  required>
                                <label>Skill Name</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-6">
                                <select class="form-select" id="level" name="level"  >
                                    <option selected >Skill Level</option>
                                    <option value="20">Beginner</option>
                                    <option value="40">Average</option>
                                    <option value="60">Skilled</option>
                                    <option value="80">Specialist</option>
                                    <option value="100">Expert</option>
                                  </select>
                            </div>
                            
                            
                            
                            
                        </div>   
                        
                    </div>
                    
                
                        <input type="submit" name="update" value="save">
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                    </div>
                    </div>
                    <a class="btn" role="button" data-toggle="collapse" data-target="#target2" style="margin-top:30px;font-size: 14px;background-color:rgb(109, 106, 124); color:#FFFF"><i class="bi bi-plus" style="font-size: 14px;"></i>ADD MORE</a>
                        <div  class="collapse myTarget" id="target2">
                        <form action="skill.php" id="form" method="post"  class="form-group2">
                        <h5 class="modal-title" style="color:#3cca7e; font-weight: 900; text-align: center;" id="exampleModalLabel">ADD Skill</h5> 

                        <div class="skill-inputs" id="skill-inputs">
                        <div class="skill" id="skill">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" id="skill" name="skillname[]"  required>
                                <label>Skill Name</label>
                            </div>
                        </div>   
                        <div class="row">
                            <div class="col-md-6">
                                <select class="form-select" id="level" name="level[]" >
                                    <option selected>Skill Level</option>
                                    <option value="20">Beginner</option>
                                    <option value="40">Average</option>
                                    <option value="60">Skilled</option>
                                    <option value="80">Specialist</option>
                                    <option value="100">Expert</option>
                                  </select>
                            </div>
                            
                            </div>
                            
                            
                        </div>   
                        
                    </div>
                    
                    <div class="controls">
                        <a href="#"  id="add_skill" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-plus-circle-fill" style="color: #484d4ac0; font-size: 1.5em; "></i>Add More</a>
                        <a href="#"  id="remove_skill" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-trash-fill" style="color: #484d4ac0; font-size: 1.5em;"></i>Remove Field</a>
                      </div>
                   
                        <input type="submit" name="saveskill" value="save">
                        </form>
                      </div>
                    </div>
                    <?php
                        require_once("config.php");
                        $id =$_SESSION['id'];
                        $sql ="SELECT * FROM reference where userid = $id";									
                        $result = mysqli_query($link,$sql) or die ("Error in query: $sql " . mysqli_error());
                 //       $ref = mysqli_fetch_array ($result);
                        ?>
                      <div class="tab-pane fade" id="v-pills-reference" role="tabpanel" aria-labelledby="v-pills-reference-tab">
                        <h4  style="color:#3cca7e; font-weight: 900; text-align: center;">REFERENCES</h4>
                        <?php 
                            while ( $ref= mysqli_fetch_array ($result)) {
                                ?>
                        <a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?REFID=<?php echo $ref["id"];?>';}" name="delete" style="float:right"><i  style="color:#DC143C; font-size: 1.5em; padding-left:20px " class="bi bi-x-circle"></i></a>
                        <a   data-refid="<?php echo  $ref['id']?>" 
                        data-name="<?php echo  $ref['full-name']?>"
                        data-email="<?php echo  $ref['email']?>"
                        data-phone="<?php echo  $ref['phone']?>"
                        data-occupation="<?php echo  $ref['position']?>"data-toggle="modal" data-target="#refModal" data-whatever="@ref" class="edit-ref"  id="edit-ref"  style="font-size: 14px; color: #484d4ac0; float:right;"><i class="bi bi-pencil" style="color: #484d4ac0; font-size: 1.5em; "></i></a>
                        <div class="name" style="padding-top:20px;font-weight:bold"><?php echo $ref['full-name']  ?></div>
                        <div class="email"><i style="font-size: 16px;color:#3cca7e; font-weight:900; padding-right: 10px" class="bi bi-envelope-fill"></i><?php echo $ref['email'] ?></div>
                        <div class="phone"><i  style="font-size: 16px;color:#3cca7e; font-weight:900; padding-right: 10px" class="bi bi-telephone-fill"></i><?php echo $ref['phone'] ?></div>
                        <div class="occupation"><i style="font-size: 16px;color:#3cca7e; font-weight:900; padding-right: 10px" class="bi bi-person-fill"></i><?php echo $ref['position'] ?></div>

                        <?php
                            }
                            ?>
                        <div class="modal" id="refModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header" style="display:block;"> 
                        <form action="reference.php" method="post">
                        <h5 class="modal-title" style="color:#3cca7e; font-weight: 900; text-align: center;" id="exampleModalLabel">Edit References</h5> 

                            <div class="referrence-input" id="referrence-input">
                            <input type="hidden" id="refid" name="refid" value="">
                            <div class="row">
                                
                                   
                                
                                <div class="col-12">
                                    <input type="text" name="fullnam" id="fullnam" required>
                                    <label>Full Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" name="emaiL" id="emaiL"  required>
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="phonE" id="phonE" required>
                                    <label>Phone no</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="occupatioN" id="occupatioN" required>
                                    <label>Occupation</label>
                                </div>
                                </div>
                               
                                    <input type="submit" name ="update" value="save">
                        </form>
                      </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        </div>
                    </div>
                    </div>
                    </div>
                    <a class="btn" role="button" data-toggle="collapse" data-target="#target2" style="margin-top:30px;font-size: 14px;background-color:rgb(109, 106, 124); color:#FFFF"><i class="bi bi-plus" style="font-size: 14px;"></i>ADD MORE</a>
                        <div  class="collapse myTarget" id="target2">
                        <form action="reference.php" method="post">
                        <h5 class="modal-title" style="color:#3cca7e; font-weight: 900; text-align: center;" id="exampleModalLabel">Edit References</h5> 

                            <div class="referrence-input" id="reference-input">
                                <div class="ref" id="ref">
                            <div class="row">
                                
                                   
                                
                                <div class="col-12">
                                    <input type="text" name="fullnam[]" required>
                                    <label>Full Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="email" name="emaiL[]"   required>
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" name="phonE[]" required>
                                    <label>Phone no</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="occupatioN[]"  required>
                                    <label>Occupation</label>
                                </div>
                        </div>
                                </div>
                                </div>
                                <div class="controls" id='controls'>
                                    <a href="#" class="add_ref" id="add_ref" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-plus-circle-fill" style="color: #484d4ac0; font-size: 1.5em; "></i>Add More</a>
                                    <a href="#"  id="remove_ref" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-trash-fill" style="color: #484d4ac0; font-size: 1.5em;"></i>Remove Field</a>
                                  </div>
                                    <input type="submit" name ="save" value="save">
                              
                        </form>
                      </div>
                    </div>
                      </div>


                    </div>
                  </div>

            </div>
        
        
        </div>
        </body>
        

        <!--==================== MAIN JS ====================-->
        <script src="index.js"></script>
        <script>
            
    //             for(y = 1980; y <= 2022; y++) {
    //     var optn = document.createElement("option");
    //     var optn2 = document.createElement("option");
    //     var optn3 = document.createElement("option");
    //     var optn4 = document.createElement("option");
    //     var optn5 = document.createElement("option");

    //     optn.text = y;
    //     optn.value = y;
    //     optn2.text = y;
    //     optn2.value = y;
    //     optn3.text = y;
    //     optn3.value = y;
    //     optn4.text = y;
    //     optn4.value = y;
    //     optn5.text = y;
    //     optn5.value = y;
    //     optn6.innerHTML = y;
    //     optn6.value = y;
    //     optn7.innerHTML= y;
    //     optn7.value = y;

                
    //     // if year is 2015 selected
    //     // if (y == 2022) {
    //     //     optn.selected = true;
    //     //     optn3.selected = true;
            
    //     // }
    //     // if (y==1980){
    //     //     optn2.selected = true
    //     //     optn4.selected = true;
    //     // }

        
    //    document.getElementById('endyear').options.add(optn);
    //    document.getElementById('year').options.add(optn2);
    //    document.getElementById('Syear').options.add(optn4);
    //    document.getElementById('Eyear').options.add(optn3);
    //    document.getElementById('years').options.add(optn5);
 
    //     // document.querySelector('.ach_year')appendChild(optn5);
        
    //     }
        
//         $('#exampleModal').on('show.bs.modal', function (event) {
//   var button = $(event.relatedTarget) // Button that triggered the modal
//   var recipient = button.data('whatever') // Extract info from data-* attributes
//   // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
//   // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
//   var modal = $(this)
  
//   modal.find('.modal-body input').val(recipient)
// })




// $("#btn3").click(function(){
// 	$("#hide4").toggle('slow');
// });


    //     let modalBtns = [...document.querySelectorAll(".edit")];
    //   modalBtns.forEach(function (btn) {
    //     btn.onclick = function () {
    //       let modal = btn.getAttribute("data-modal");
    //       document.getElementById(modal).style.display = "block";
    //     };
    //   });
    //   let closeBtns = [...document.querySelectorAll(".close")];
    //   closeBtns.forEach(function (btn) {
    //     btn.onclick = function () {
    //       let modal = btn.closest(".modal");
    //       modal.style.display = "none";
    //     };
    //   });
    //   window.onclick = function (event) {
    //     if (event.target.className === "modal") {
    //       event.target.style.display = "none";
    //     }
    //   };

    $(document).ready(function(){

$('.edu-edit').click(function(){

var id= $(this).data('eduid')
var institution= $(this).data('institution')
var degree= $(this).data('degree')
var yearStart= $(this).attr('data-yearStart')
var yearEnd= $(this).attr('data-yearEnd')



$('#edu-id').val(id)
$('#institution').val(institution)
$('#degree').val(degree)
$('#yearStart').val(yearStart)
$('#endyear').val(yearEnd)




// $('#educationModal').modal('toggle')


})


$('.edit-exp').click(function(){

var exid= $(this).attr('data-exid')

var company= $(this).attr('data-company')
var position= $(this).attr('data-position')
var des= $(this).attr('data-description')
var yearS= $(this).attr('data-yearS')
var yearE= $(this).attr('data-yearE')




$('#exid').val(exid)
$('#company').val(company)
$('#description').val(des)
$('#position').val(position)
$('#yearSt').val(yearS)
$('#yearEn').val(yearE)
// $('#experienceModal').modal('show')


})

$('.edit-ach').click(function(){

var id= $(this).attr('data-acid')
var award= $(this).attr('data-award')
var years= $(this).attr('data-year')

$('#acid').val(id)

$('#years').val(years)
$('#award').val(award)

//   $('#achievementModal').modal('show')

})

$('.editSkill').click(function(){

var id= $(this).attr('data-skillid')

var skill= $(this).attr('data-skill')
var level= $(this).attr('data-level')

$('#skillid').val(id)
$('#skill').val(skill)
$('#level').val(level)

// $('#skillModal').modal('show')

})


$('.edit-ref').click(function(){

var id= $(this).attr('data-refid')
var name= $(this).attr('data-name')
var email= $(this).attr('data-email')
var phone= $(this).attr('data-phone')
var occupation= $(this).attr('data-occupation')

$('#refid').val(id)

$('#fullnam').val(name)
$('#emaiL').val(email)
$('#phonE').val(phone)
$('#occupatioN').val(occupation)

//   $('#refModal').modal('show')

})
})

  
//         $(document).ready(function(){

// var data_fo = $('.reference-input').html();
// // var data_fo = '<div class="education-input"><div class="ed-input"><div class="row"><div class="col-12"><input type="text" name="institution[]" class="wrapper" required><label>Institution</label></div></div> <div class="row"> <div class="col-12"><input type="text" name="degree[]" id="degree" required><label>Degree</label></div></div><div class="row"><div class="col-md-6"><!-- <input type="date" name="start" id="startdate" name="startdate"> --><label >Start:</label><select class="form-select" name="startyear[]" id="year"><option value="">Select Year</option></select></div><div class="col-md-6"><!-- <input type="date" class="date" name="end" id="graddate" name="graddate[]"> <input type="text" class="date-picker form-control" name="datepicker"  id="datepicker" /> --><label >End:</label><select class="form-select" name="endyear[]" id="endyear"><option value="">Select Year</option></select></div></div></div></div></div>';
// var sd = '<a href="#"  class="remove-add-more" id="remove_fields" style="font-size: 14px; color: #484d4ac0;"><i class="bi bi-trash-fill" style="color: #bb0a1e; font-size: 1.5em;"></i>Delete</a>';
// var data_combine = data_fo.concat(sd);
// var max_fields = 5; //maximum input boxes allowed
// var wrapper = $(".ref"); //Fields wrapper
// var add_button = $(".add_ref"); //Add button ID

// var x = 1; //initlal text box count
// $(add_button).click(function(e){ //on add input button click
//   e.preventDefault();
//   if(x < max_fields){ //max input box allowed
//     x++; //text box increment
//     $(wrapper).append(data_combine); 
//     // document.getElementById('institution').value = ''
//     //add input box
//     //$(wrapper).append('<div class="remove-add-more">Remove</div>')
//   }
//   // console.log(data_fo);
// });

// $(wrapper).on("click",".remove-add-more", function(e){ //user click on remove text
//     e.preventDefault();
//     $(this).prev(wrapper).remove();
//     //$(".add-more").prev('.user').remove(); It's remove all the buttons and inputs
//     $(this).remove();
//     x--;
// });
// });
// // function myFunction() {
//     document.getElementById("institution").value = "";
//   }
        </script>
       <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> 
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        </html>



    
        