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
    if ($_SESSION['status'] == 'AM'){
      $id = $_SESSION['id'];
     // "SELECT id from user_account where email ='".$_SESSION['id']."'";
      // header("location:index.php");
    }else{
      header("location:index.php");  
    }
    
  }
	
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
        <script src="https://kit.fontawesome.com/070d25e7f6.js" crossorigin="anonymous"></script>
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="">
        
        <!--==================== CSS ====================-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="index.css">
        
        <title>Responsive Portfolio Website</title>
    </head>
    <body>  
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav-app" id="nav">
          <a href="#" class="nav-logo">MyPortfolio</a>
              <ul class="nav-menu">
                  <li class="nav-item">
                      <a href="index.php" class="nav-link">Home</a>
                  </li>
                  
                  <li class="nav-item">
                      <a href="admin.php" class="nav-link">Template</a>
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
        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                    <div class="home_container grid">

                        <div class="home_data">
                            <h1 class="home_title">Online Portfolio Builder</h1>
                            <h2 class="home_subtitle">Our resumes get people hired at top companies.</h2>
                            <a href="#" class="button">Start now</a>
                        </div>
        
                        <img src="images/character.svg" alt="img" class="home_img">
               
                </div>
            </section>
            <!--==================== Profile ====================-->
            <!-- <section class="profile section" id="profile">
                <div class="profile_container grid">
                   
                     
                </div>                       -->
                <!--<div class="tabs1">
                    <div class="tab-header">
                      <div class="active">
                        <i class="fa fa-code"></i> Code
                      </div>
                      <div>
                        <i class="fa fa-pencil-square"></i> About
                      </div>
                      <div>
                        <i class="fa fa-bar-chart"></i> Services
                      </div>
                      <div>
                        <i class="fa fa-envelope"></i> Contact
                      </div>
                    </div>
                    <div class="tab-indicator"></div>
                    <div class="tab-content1">
                      
                      <div class="active">
                        <i class="fa fa-code"></i>
                        <h2>This is code section</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
                      </div>
                      
                      <div>
                        <i class="fa fa-pencil-square"></i>
                        <h2>This is about section</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
                      </div>
                      
                      <div>
                        <i class="fa fa-bar-chart"></i>
                        <h2>This is services section</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
                      </div>
                      
                      <div>
                        <i class="fa fa-envelope"></i>
                        <h2>This is contact section</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis eum similique quisquam officiis neque, cumque dignissimos architecto nisi totam sapiente eos et illum laborum atque vero ea perferendis consectetur veritatis.</p>
                      </div>
                      
                    </div>
                    </div>-->
            <!-- </section> -->
            <!--==================== Templates ====================-->
            <section class="templates section" id="templates">
                <div class="tabs-container grid">
                  <h3 style="text-align: center; padding-left: 20%;">E-Portfolio Builder To Fit people in All ages</h3>
                  <a href="admin.php"><button style="background-color: #2CE080; border-radius: 4px; border: none;padding: 12px 2px;
                  text-align: center;
                  width: 20%;
                  font-weight: 500;
                  margin-left: 50%; margin-top:10px;
                  text-align: center;"> Edit template now</button></a>
                  <div class="img" style="  position: relative;width: 60%; margin-left: 30%;"><img src="./images/tm4.png" style="position: relative;" alt=""><img src="./images/tm1.png" style=" position: relative" alt=""></div>
                  <!-- <div class="img" style="float: right;  position: relative;top: 0;left: 0;"><img src="./images/tm1.png" style=" position: relative;top: 0;left: 0;" alt=""><img src="./images/tm3.png" style="position: absolute;top: 0px;right: 120px;" alt=""></div> -->

                  </div>


            </section>
            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <div class="about_container  grid">
                    <div class="about_data">
                        <span class="section_subtitle">About us</span>
                        <h2 class="section_title">Why choose MyPortfolio? </h2>
                        <p class="about_description">Choose font types, sizes, and spacing. You can bold,</br>
                            italicize, and underline your text. You don’t need to use MS</br>
                            Word resume templates: we take care of the formatting,</br>
                            and give you access to the best resume designs you’ll ever see.</p>
                    </div>

                    <img src="images/about.png" class="about_img">
                </div>
        
            </section>

           
        </main>

        <!--==================== FOOTER ====================-->
       
        
        <!--==================== SCROLL TOP ====================-->
        

        <!--==================== SWIPER JS ====================-->
        <script src=""></script>

        <!--==================== MAIN JS ====================-->
        <script src="index.js"></script>
        
        </body>
</html>