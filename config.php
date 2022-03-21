<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

/* Attempt to connect to MySQL database */

$link = mysqli_connect("localhost","root","","portfolio2");


 
// Check connection
if(mysqli_connect_errno()){
  echo "ERROR: Could not connect." . mysqli_connect_error();
}

?>

