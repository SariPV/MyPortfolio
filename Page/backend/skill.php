<?php

session_start();
require("config.php");
$uid=$_SESSION["id"];
// session_start();
                             

// //$id = get_current_user_id();
// $_SESSION["login_user"] = $id;

if(isset( $_POST["saveskill"]))
  {
    
    
    $item = count($_POST["skillname"]);
    if($item > 0)  
   {  
    for($i=0; $i<$item; $i++)  
    {  
         if(trim($_POST["skillname"] != ''))  
         {  
          $skillname=$_POST['skillname'][$i];
          $level=$_POST['level'][$i];
          $education="INSERT INTO `skill`(`skillname`,`level`,`userid`)VALUES('$skillname','$level',$uid) ";
          $result=mysqli_query($link,$education)or die("Could Not Perform the Query");
  
        }  
    }  
    header ("Location: profile3.php");
  }  
  else  
  {  
    echo "Please Enter Skill";  
  }  

}
  if(isset($_POST["update"]))
  {
  
   $skillname=$_POST['skill'];
    $level=$_POST['level'];
    $id=$_POST['skillid'];
    $query="UPDATE skill SET skillname ='$skillname' ,level = '$level' WHERE id='$id' ";
    $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));

    header ("Location: profile3.php");
}  
  // $skillname=$_POST['skill'];
  // $level=$_POST['level'];
  

  // $query="INSERT INTO `skill`(`skillname`,`level`,`userid`)VALUES
  //                                     ('$skillname','$level',1) ";
  // $result=mysqli_query($link,$query)or die("Could Not Perform the Query");
  // if ($link->query($query) === true){
  //   echo 'added sucessfully';
  // }else{
  //   echo "error: $query".mysql_error($link);
  // }


?>