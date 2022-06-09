<?php
require('config.php');


$query ="SELECT * FROM user_profile WHERE id=1 ";

$result = mysqli_query($links,$query);
if (!$result)
{
    die ('failed to connect mysql database'. mysqli_connect_error());
}
$row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv = "X-UA-Compatible" content="ie=edge">
    <title>professional resume</title>
    <link rel = "stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


    <div class="container">
        <div class="left_Side">
        

            <div class="profileText">
                <div class="img">
                    <img src="<?php echo $row['profileImage'];?>" alt="">
                
                </div>
                <h2><?php echo $row['full-name']?><br><span><?php echo $row['position']?></span></h2>
            </div>
            <div class="contactinfo">
                <h3 class="title">Contact</h3>
                <ul>
                    <li>
                        <span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $row['phone']?></span>
                    </li>
                    <?php
                    
                    $querys ="SELECT * FROM user_account,achievement, experience WHERE experience.userid=1 AND user_account.id=1 AND achievement.userid=1";

                    $lists = mysqli_query($links,$querys);
                    if (!$lists)
                    {
                    die ('failed to connect mysql database'. mysqli_connect_error());
                    }
                    $user=mysqli_fetch_array($lists);
                    ?>
                    <li>
                        <span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $user['email']?></span>
                    </li>
                    <li>
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="text"><?php echo $row['address']?></span>
                    </li>
               
                </ul>
            </div>
            <?php
                    $temp_userid = 1;
                    $ed_query ="SELECT * FROM education WHERE education.userid=$temp_userid";
                    
                    $list = mysqli_query($links,$ed_query);
                    if (!$list)
                    {
                    die ('failed to connect mysql database'. mysqli_connect_error());
                    }
                    //$skill=mysqli_fetch_array($list);
                    ?>

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
                <!--<ul>
                    <li>
                        <h5>2012-2016</h5>
                        <h4>Bachelor Degree in Communication Arts</h4>
                        <h4>Harvard University</h4>
                    </li>
                    <li>
                        <h5>2009-2012</h5>
                        <h4>High school</h4>
                        <h4>Dripping Springs High School</h4>
                    </li>
                    <li>
                        <h5>2006-2012</h5>
                        <h4>Middle school</h4>
                        <h4>Sycamore Springs Middle School</h4>
                    </li>
                    
               
                </ul>-->
            </div>
        </div>
       
        
        <div class="right_Side">
            <div class="about">
                <h2 class="title2">Experiences</h2>
                <div class="box">
                    <div class="year_company">
                        <h5><?php echo $user['work_yearStart']?>-<?php echo $user['work_yearEnd']?></h5>
                        <h5><?php echo $user['company']?></h5>
                    </div>
                    <div class="text">
                        <h4>Event Photographer</h4>
                        <li><?php echo $user['work_description']?></li>
                    </div>
                </div>
              <!--  <div class="box">
                    <div class="year_company">
                        <h5>2016-2018</h5>
                        <h5>Company Name</h5>
                    </div>
                    <div class="text">
                        <h4>Event Photographer</h4>
                        <li>Fabricated camera mounts and cases to capture images and protect equipment.</li>
                        <li>Shot photographs in controlled lab, field and remote environments.</li>
                    </div>
                </div>-->
            </div>
            <div class="Achievements">
                <h2 class="title2">Achievements</h2>
                
                    <?php
                while($achievement = mysqli_fetch_array($lists)){
                    echo '<div class="box">';
                    echo '<div class="year_achieve">';
                        echo "<h5>". $achievement["year"];"</h5>";
                    echo'</div>';
                    echo '<div class="text">';
                    echo  "<p>" .$achievement['description'];"</p>";
                    echo'</div>';
                    echo '</div>';}?>
               
               <!-- <div class="box">
                    <div class="year_achieve">
                        <h5>2015</h5>
                    </div>
                    <div class="text">
                        <p>Lens Culture portrait awards</p>
                    </div>
                </div>-->
            </div>
            <?php
                    
                    $Skill_query ="SELECT * FROM skill WHERE skill.userid=1";

                    $list = mysqli_query($link,$Skill_query);
                    if (!$list)
                    {
                    die ('failed to connect mysql database'. mysqli_connect_error());
                    }
                    //$skill=mysqli_fetch_array($list);
                    ?>
            <div class="Skills">
                <h2 class="title2">Skills</h2>
                <div class="box"> 
                    <?php 
                    echo "<ul>";
                    while($skill = mysqli_fetch_array($list)){
                        echo" <li>" .$skill['skillname'];"</li>";
                        
                    }
                    echo "</ul>"; ?>
                    
                    <!--<ul>
                        <li> Adobe Photoshop</li>
                        <li> Adobe Lightroom</li>
                        <li>Creativity</li>
                        <li>Adobe illustrator</li>
                    </ul>-->
                </div>
            </div>
            <?php
                    
                    $ref_query ="SELECT * FROM reference WHERE reference.userid=1";

                    $list = mysqli_query($link,$ref_query);
                    if (!$list)
                    {
                    die ('failed to connect mysql database'. mysqli_connect_error());
                    }
                    //$skill=mysqli_fetch_array($list);
                    ?>
            <div class="references">
                <h2 class="title2">references</h2>
                <?php 
                    echo "<ul>";
                    while($reference = mysqli_fetch_array($list)){
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
                    
                   <!-- <ul>
                        <li>
                            <span class="text-dark">Michael Mikula</span>
                            <li><span class="text">Photographer Teacher</span></li>
                        </li>
                        <li>
                            <span class="text-dark">Phone:</span>
                            <span class="text">407-4979-243</span>
                        </li>
                        <li>
                            <span class="text-dark">Email:</span>
                            <span class="text">mmikulajrl@gmail.com</span>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span class="text-dark">Jenna Mannix</span>
                        <li><span class="text">Director</span></li>
                        </li>
                        <li>
                            <span class="text-dark">Phone:</span>
                            <span class="text">855-5555-555</span>
                        </li>
                        <li>
                            <span class="text-dark">Email:</span>
                            <span class="text">jenna.email@email.com</span>
                        </li>
                    </ul>
                -->
            </div>
            
        </div>
        

        

    </div>
    
</body>
</html>