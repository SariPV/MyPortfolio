<?php
require('config.php');

$id = $_GET['EDID']; 

$query="DELETE FROM education WHERE id='".$id."' ";
$result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
header ("Location: profile3.php");

?>
<?php
require('config.php');

$id = $_GET['EXPID']; 

$query="DELETE FROM experience WHERE id='".$id."' ";
$result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
header ("Location: profile3.php");

?>
<?php
require('config.php');

$id = $_GET['ACHID']; 

$query="DELETE FROM achievement WHERE id='".$id."' ";
$result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
header ("Location: profile3.php");

?>
<?php
require('config.php');

$id = $_GET['SKILLID']; 

$query="DELETE FROM skill WHERE id='".$id."' ";
$result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
header ("Location: profile3.php");

?>
<?php
require('config.php');

$id = $_GET['REFID']; 

$query="DELETE FROM reference WHERE id='".$id."' ";
$result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
header ("Location: profile3.php");

?>
