<?php
session_start();
//include('profile.html');
//extract($_POST);
//$id=7;
require("config.php");
if(isset($_POST["save"]))
  {
    //$id = $_GET['id'];
    if(trim($_FILES["templateImage"]["tmp_name"]) != "")
    {
   // $ext = strtolower(substr($_FILES["profileImage"]["name"],-4)); //get file extension
    $tempImg = "resumeImg/"  . $_FILES["templateImage"]["name"];
    copy($_FILES["templateImage"]["tmp_name"], $tempImg);
    } 
    // $pname = rand(1000,10000)."-".$_FILES["profileImage"]["name"];
    // $tname = $_FILES["files"]["tmp_name"];
    // $uploads_dir = '/images';
    // move_uploaded_file($tname,$uploads_dir.'/'.$pname);
    if(trim($_FILES["tempfile"]["tmp_name"]) != "")
    {
   // $ext = strtolower(substr($_FILES["profileImage"]["name"],-4)); //get file extension
    $tempFile = "tempfile/"  . $_FILES["tempfile"]["name"];
    copy($_FILES["tempfile"]["tmp_name"], $tempFile);
    } 
  
  $category=mysqli_real_escape_string($link,$_POST['category']);
  $query="INSERT INTO `templates`(`templateImage`,`category`,`templates`)VALUES
                                      ('$tempImg','$category','$tempFile')";
  $result=mysqli_query($link,$query)or die("Could Not Perform the Query");
  header ("Location: admin.php");
 }
?>