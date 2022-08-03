<?php

require("config.php");
$db = mysqli_select_db('user_account', $link);
session_start();
$user_check = $_SESSION['email'];

$query = mysqli_query("SELECT email FROM user_account WHERE email = '$user_check'", $link);  
$row = mysqli_fetch_assoc($query);
$login_session = $row['email'];

if (!isset($login_session)){
    
    header('location: index.html');

}
?>