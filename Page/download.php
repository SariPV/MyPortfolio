<?php
require("config.php");


if (isset($_POST["submit_img"]) == "Submit"){
    $file = basename($_POST['templates']);  

    if($file == "pro_brown.html"){
        echo $file;
        header("Location:/SP/SP1Porfolio/page/resume/pro_brown.php");
      
    }
    if($file == "pro_blue.html"){
        echo $file;
        header("Location:/SP/SP1Porfolio/page/resume/pro_blue.php");
      
    }
    if($file == "pro_white.html"){
        echo $file;
        header("Location:/SP/SP1Porfolio/page/resume/pro_white.php");
      
    }
    if($file == "sim_pink.html"){
        echo $file;
        header("Location:/SP/SP1Porfolio/page/resume/sim_pink.php");
      
    }
    if($file == "sim_white.html"){
        echo $file;
        header("Location:/SP/SP1Porfolio/page/resume/sim_white.php");
      
    }
    if($file == "sim_green.html"){
        echo $file;
        header("Location:/SP/SP1Porfolio/page/resume/sim_green.php");
      
    }
    if($file == "creative_purple.html"){
        echo $file;
        header("Location:/SP/SP1Porfolio/page/resume/creative_purple.php");
      
    }
    if($file == "creative_yellow.html"){
        echo $file;
        header("Location:/SP/SP1Porfolio/page/resume/creative_yellow.php");
      
    }
}



?>