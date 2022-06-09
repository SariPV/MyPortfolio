<!DOCTYPE html>
<html>
<head>
    
    <title>professional resume</title>
   <!-- <link rel = "stylesheet" type="text/css" href="style.css">-->

    
   </head>
   <body>
<style>
 @font-face {
    font-family: poppins;
    src: url(./font/Poppins-Regular.ttf);
    

}       


    @font-face {
    font-family: faregular;
    src: url(./font/fa-regular-400.ttf);
    } 

    @font-face {
    font-family: fasolid;
    src: url(./font/fa-solid-900.ttf);
    } 
/* *
{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    
} */

body{
    background: #FFFFFF;
    font-size: 14px;
    line-height: 20px;
    margin:0;
    padding:0;
    box-sizing: border-box;
    list-style: none;

    font-family: "poppins";
    /* min-height: 100vh; */
    
}

.h3{
    color: white;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 20px;
    padding-left: 40px;
}

.container{
    width: 100%;
    margin: 50px auto;
    background: #FFFFFF;
 
    width: 800px;
    position: relative;
}

.container .left_Side{
    position: relative;
    background: #552D2D;
   
    float: left;
    width: 30%;
    
    
}

.profileText{
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-bottom: 20px;
    border-bottom: 1px solid rgba(255,255,255,0.2);
}

.profileText .img{
    position: relative;
    width: 200px;
    height: 200px;
    border-radius: 50%;
    overflow: hidden;
}

.profileText .img img{
    /* position: absolute; */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* object-fit: cover; */
}

.profileText h2{
    color: white;
    font-size: 16px;
    margin-top: 20px;
    text-transform: uppercase;
    text-align: center;
    font-weight: 600;
    line-height: 13px;
}

.profileText h2 span{
    font-size: 10px;
    font-weight: 300;
}

.contactinfo{
    /* padding-top: 40px ; */
}

.title{
    color: white;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 20px;
    padding-left: 40px;
}

.container ul{
    position: relative;
}

.contactinfo ul li{
    position: relative;
    list-style:none;
    margin: 10px 0;
    cursor: pointer;
}

.contactinfo ul li .icon{
    display: inline-block;
    width: 30px;
    font-size: 18px;
    color:wheat;
}

.contactinfo ul li span{
    color: white;
    font-weight: 300;
    font-size: 13px;
}

.education {
    display: block;
}
.education ul {
    position: relative;
    list-style:none;

    cursor: pointer;
    padding-bottom:10px;

}
.education li{
    margin-bottom: 20px;
    padding-bottom:10px;
}

.education h5{
    color:wheat;
    font-weight: 500;
    margin:0;
    padding-top:15px;
}

.education h4:nth-child(2){
    color:white;
    font-weight: 500;
    font-size: 14px;
    margin:0;

}

.education h4{
    color:white;
    font-weight: 300;
    font-size: 14px;
    margin:0;
 
  
}

.container .right_Side{
    position: relative;
    background: white;
    padding: 40px;
    float: right;
    width:50%;
}

.about:last-child{
    margin-bottom: 0;
}

.title2{
    color: #552D2D;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 10px;
}

.p{
    color: #333;
   
}

.about .box{
    display: flex;
    flex-direction: row;
   
}

.about .box .year_company{
    float: left;
    width: 50%;
}
.about .box .text{
    float: right;
    width: 50%;
}


.about .box .year_company h5{
    text-transform: uppercase;
    color: #848c90;
    font-weight: bold;
}

.about .box .text h4{
    text-transform: uppercase;
    color: rgb(224, 188, 120);
    font-size: 16px;
}

.about .box .text li{
    margin-top: 10px;
    color: #333;
    font-size: 12px;
    /* font-weight: bold; */
    list-style: none;
  
}
.Achievements{
    margin-top: 50px;
}
.Achievements .box{
    display: flex;
    flex-direction: row;

}

.Achievements .box .year_achieve{
    width: 50%;
    float: left;
}
.Achievements .box .text{
    width: 50%;
    float: right;
}
.Achievements .box .year_achieve h5{
    color: #848c90;
    font-weight: bold;
}

.Achievements .box .text p{
    text-transform: uppercase;
    color: rgb(22, 22, 21);
    font-size: 12px;

  
}

.Skills{
    padding-top: 50px;
}

.Skills .box{
    display: flex;
    flex-direction: row;
  
}

.Skills .box ul li{
    position:relative;
    
    cursor: pointer;
    font-weight:inherit;
    font-size: 14px;
    list-style: disc;

}

.references {
    padding-top: 50px;
}

.references .box{
    display: block
   
}
.references ul{
    position: relative;
    padding-bottom: 20px;
    list-style: none;
}

.references li{
    position: relative;
    padding: 0;
    list-style: none;
    margin: 0;
}




/* .references span {
    font-weight: 300;
    font-size: 14px;
} */

.references .text-dark{
    font-weight: bold;
}
.phone-icon {
        font-family: "fasolid"; 
        font-size: 20px;
        color: #EEEEEE;
    }

    .email-icon {
        font-family: "fasolid"; 
        font-size: 20px;
        color: #EEEEEE;
    }
    .address-icon {
        font-family: "fasolid"; 
        font-size: 20px;
        color: #EEEEEE;
    }
</style>

<?php
require('config.php');

$id = 1;
$query ="SELECT * FROM user_account WHERE id=$id ";

$result = mysqli_query($link,$query);
$acc=mysqli_fetch_array($result);
  
$querys ="SELECT * FROM user_profile where userid = $id ";
$lists = mysqli_query($link,$querys);
$row=mysqli_fetch_array($lists);

$ed_query ="SELECT * FROM education WHERE userid=$id";
$list = mysqli_query($link,$ed_query);

$exp_query ="SELECT * FROM experience WHERE userid=$id";
$experience = mysqli_query($link,$exp_query);

$ach_query ="SELECT * FROM achievement WHERE userid=$id";
$data = mysqli_query($link,$ach_query);

$skill_query ="SELECT * FROM skill WHERE userid=$id";
$item = mysqli_query($link,$skill_query);

$ref_query ="SELECT * FROM reference WHERE userid=$id";
$ref = mysqli_query($link,$ref_query);

?>

    <div class="container">
        <div class="left_Side">

            <div class="profileText">
                <div class="img">
                    <img src="<?php echo $row['profileImage'];?>">
                
                </div>
                <h2><?php echo $row['full-name']?><br><span><?php echo $row['position']?></span></h2>
            </div>
          
            <div class="contactinfo">
                <h3 class="title">Contact</h3>
                <ul>
                    <li>
                        <span class="phone-icon">&#xf879</span>
                        <span class="text"><?php echo $row['phone']?></span>
                    </li>
                    <li>
                        <span class="email-icon">&#xf0e0</span>
                        <span class="text"><?php echo $acc['email']?></span>
                    </li>
                    <li>
                        <span class="address-icon">&#xf015</span>
                        <span class="text"><?php echo $row['address']?></span>
                    </li>
               
                </ul>
            </div>

            <div class="education">
                <h3 class="title">Education</h3>
                <?php 
                    echo "<ul>";
                    while($education = mysqli_fetch_array($list)){
                        echo" <li>";
                        echo'<h5>'.$education['yearStart']. '-' .$education['yearEnd'].'</h5>';
                        echo '<h4>'.$education['degree'];'</h4>';
                        echo '<h4>'.$education['institution'];'</h4>';
                        
                        "</li>";
                        
                    }
                    echo "</ul>"; ?>
            </div>
        </div>

        
        <div class="right_Side">
            <div class="about">
                <h2 class="title2">Experiences</h2>
                <?php while($exp = mysqli_fetch_array($experience)){
                    ?>
                <div class="box">
            
                    <div class="year_company">
                        <h5><?php echo $exp['yearStart']?>-<?php echo $exp['yearEnd']?></h5>
                        <h5><?php echo $exp['company']?></h5>
                    </div>
                    <div class="text">
                        <h4><?php echo $exp['position']?>r</h4>
                        <li><?php echo $exp['description']?></li>
                    </div>
                </div>
                <?php }
                ?>
            </div>
            <div class="Achievements">
                <h2 class="title2">Achievements</h2>
                <?php
                while($achievement = mysqli_fetch_array($data)){
                    echo '<div class="box">';
                    echo '<div class="year_achieve">';
                        echo "<h5>". $achievement["year"];"</h5>";
                    echo'</div>';
                    echo '<div class="text">';
                    echo  "<p>" .$achievement['description'];"</p>";
                    echo'</div>';
                    echo '</div>';}?>
               
            </div>
            <div class="Skills">
                <h2 class="title2">Skills</h2>
                <div class="box">    
                <?php 
                    echo "<ul>";
                    while($skill = mysqli_fetch_array($item)){
                        echo" <li>" .$skill['skillname'];"</li>";
                    }
                    echo "</ul>"; ?>
                    
                </div>
            </div>
            <div class="references">
                <h2 class="title2">references</h2>
                <?php 
                    echo "<ul>";
                    while($reference = mysqli_fetch_array($ref)){
                        echo" <li> <span class='text-dark'>" .$reference['full-name'];
                        echo '<li><span class="text">'.$reference['position'];'</span></li>';
                        "</span></li>";
                        echo" <li> <span class='text-dark'>Phone: " ;
                        echo '<span class="text">'.$reference['phone'];'</span>';
                        "</span></li>";
                        echo" <li> <span class='text-dark'>Email: " ;
                        echo '<span class="text">'.$reference['email'];'</span>';
                        "</span></li>";
                        
                    }
                    echo "</ul>"; ?>
            </div>
            
        </div>
        

        

    </div>
    
</body>
</html>