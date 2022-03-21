<?php
require('config.php');

$id = $_GET['TMPID']; 

$query="DELETE FROM templates WHERE id='".$id."' ";
$result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
header ("Location: admin.php");

?>