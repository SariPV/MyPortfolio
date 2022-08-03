<?php
extract($_POST);
require("config.php");
$sql=mysqli_query($link,"SELECT * FROM user_account where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
if (isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $password = md5($password); //Password Encrypted
    $query = "INSERT INTO user_account(email,password,role) values('$email', '$password', 'US')";
    $result=mysqli_query($link,$query)or die("Could Not Perform the Query");
    header ("Location: login.html");
}
    
else {
	echo "Error.Please try again";
	
}

?>