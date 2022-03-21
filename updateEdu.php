<?php
require('config.php');

//$read = "SELECT id From '".$_POST['institution']."'";
if(isset($_POST["saveEdu"]))
  {
  
    $institution=$_POST['institution'];
    $degree=$_POST['degree'];
    $start=$_POST['startyear'];
    $end=$_POST['endyear'];
    $id=$_POST['id'];
    $query="UPDATE education SET yearStart ='$start' ,yearEnd = '$end' , institution = '$institution',degree = '$degree',userid = 1 WHERE id='$id' ";
    $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
    header ("Location: profile3.php");
 

} 


?>