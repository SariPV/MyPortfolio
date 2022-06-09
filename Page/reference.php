<?php

session_start();
require("config.php");
$uid=$_SESSION["id"];

//session_start();
//extract($_POST);
// $id = get_current_user();

//$id=get_current_user();

// if(isset($_GET["id"]))

//     {
//         $sql = "SELECT email FROM user_account WHERE id = '$id'";
//     $result = mysqli_query($link,$sql) or die( mysqli_error($link));
//     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
//         $email = $row["email"];

//         echo $email;
//     }
    


    
if(isset($_POST["save"]))
  {
      
  // $fullname=$_POST['fullnam'];
  // $occupation=$_POST['occupatioN'];
  //$phone=mysqli_real_escape_string($link,$_POST['phonE']);
  // $email=$_POST['emaiL'];
  
  // $query="INSERT INTO `reference`(`full-name`,`position`,`phone`,`email`,`userid`) VALUES ('$fullname','$occupation','$phone','$email',1)";
  // $result=mysqli_query($link,$query)or die("Could Not Perform the Query");
  $itemCount = count($_POST["fullnam"]);
  if($itemCount > 0)  
 {  
  for($i=0; $i<$itemCount; $i++)  
  {  
    
       if(trim($_POST["fullnam"] != ''))  
       {  
        $fullname=$_POST['fullnam'][$i];
        $occupation=$_POST['occupatioN'][$i];
         $phone=mysqli_real_escape_string($link,$_POST['phonE'][$i]);
          $email=$_POST['emaiL'][$i];
        $query="INSERT INTO `reference`(`full-name`,`position`,`phone`,`email`,`userid`) VALUES 
        ('$fullname','$occupation','$phone','$email',$uid) ";
        $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));

      }  
  }  
  header ("Location: profile3.php");
}  
else  
{  
  echo "Please Enter Name";  
}  
//   if($update)
//   {
//       $msg="Successfully Updated!!";
//       echo "<script type='text/javascript'>alert('$msg');</script>";
//       header('Location:index.php');
//   }
//   else
//   {
//      $errormsg="Something went wrong, Try again";
//       echo "<script type='text/javascript'>alert('$errormsg');</script>";
//   }
  }
  if(isset($_POST["update"]))
  {
  
    $fullname=$_POST['fullnam'];
    $occupation=$_POST['occupatioN'];
    $phone=mysqli_real_escape_string($link,$_POST['phonE']);
    $email=$_POST['emaiL'];
    $id=$_POST['refid'];
    
    $query="UPDATE `reference` set `full-name`='$fullname',`position`='$occupation',`phone`='$phone',`email`='$email' WHERE id='$id' ";
    $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));

    header ("Location: profile3.php");
}  
?>