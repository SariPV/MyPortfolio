<?php

//include('profile.html');
//extract($_POST);
session_start();
require("config.php");
$id=$_SESSION["id"];

//$_SESSION['userLogin'] = $id;
//  $uid = "SELECT id from user_account where userid =$id";
//  $getid=mysqli_query($link,$uid)or die("Could Not Perform the Query");

if(isset($_POST["save"]))
  {
  

    //$id = $_GET['id'];
    if(trim($_FILES["profileImage"]["tmp_name"]) != "")
    {
   // $ext = strtolower(substr($_FILES["profileImage"]["name"],-4)); //get file extension
    $pname = "images/"  .$_FILES["profileImage"]["name"];
    copy($_FILES["profileImage"]["tmp_name"], $pname);
    }
  
    // $pname = rand(1000,10000)."-".$_FILES["profileImage"]["name"];
    // $tname = $_FILES["files"]["tmp_name"];
    // $uploads_dir = '/images';
    // move_uploaded_file($tname,$uploads_dir.'/'.$pname);
    // $pname = "images/"  . $_FILES["profileImage"]["name"];
    // copy($_FILES["profileImage"]["tmp_name"], $pname);
  // $id ="SELECT id from user_account where email ='".$_SESSION['userLogin']."'";
  
  $fullname=mysqli_real_escape_string($link,$_POST['fullname']);
  $occupation=mysqli_real_escape_string($link,$_POST['occupation']);
  $address=mysqli_real_escape_string($link,$_POST['address']);
  $phone=mysqli_real_escape_string($link,$_POST['phone']);
  $website=mysqli_real_escape_string($link,$_POST['website']);  
  
  $query="INSERT INTO `user_profile`(`id`,`profileImage`,`full-name`,`position`,`address`,`phone`,`website`,`userid`)VALUES
                                      ($id,'$pname','$fullname','$occupation','$address','$phone','$website','$id') ON DUPLICATE KEY UPDATE `profileImage` = '$pname',`full-name` = '$fullname',`position` = '$occupation',`address` = '$address',`phone` = '$phone',`website` = '$website', `userid` = '$id'";
  $result=mysqli_query($link,$query)or die("Could Not Perform the Query");
  header ("Location: profile3.php");
 }

?>