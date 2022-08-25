<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

/* Attempt to connect to MySQL database */

// $link = mysqli_connect("sql302.epizy.com","epiz_32304887","0Fu1vBCDymX","epiz_32304887_myportfolios");

$link = mysqli_connect("localhost","root","","portfolio2");

 
// Check connection
if(mysqli_connect_errno()){
  echo "ERROR: Could not connect." . mysqli_connect_error();
}

?>

