<?php

session_start();
require("config.php");   
// if($_SERVER["REQUEST_METHOD"] == "POST") {
//    // username and password sent from form 
   
//    $email = mysqli_real_escape_string($link,$_POST['email']);
//    $password = mysqli_real_escape_string($link,$_POST['password']); 
   
//    $sql = "SELECT id FROM user_account WHERE email = '$email' and password = '$password'";
//    $result = mysqli_query($link,$sql) or die( mysqli_error($link));
//    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//    $active = $row['id'];
   
//    $count = mysqli_num_rows($result);
   
//    // If result matched $myusername and $mypassword, table row must be 1 row
	 
//    if($count == 1) {
// 	  session_register("email");
// 	  $_SESSION['login_user'] = $email;
	  
// 	  header("location: index.html");
//    }else {
// 	  $error = "Your Login Name or Password is invalid";
//    }
// }
// $result = mysqli_query($link,$sql) or die( mysqli_error($link));
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
// if ( mysqli_connect_errno() ) {
// 	// If there is an error with the connection, stop the script and display the error.
// 	exit('Failed to connect to MySQL: ' . mysqli_connect_error());

// }


// if ( !isset($_POST['email'], $_POST['password']) ) {
// 	// Could not get the data that should have been sent.
// 	exit('Please fill both the username and password fields!');
// }
// if ($stmt = $link->prepare('SELECT id, password FROM user_account WHERE email = ?')) {
// 	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
// 	$stmt->bind_param('s', $_POST['email']);
   
// 	$stmt->execute();
// 	// Store the result so we can check if the account exists in the database.
// 	$stmt->store_result();

//    if ($stmt->num_rows > 0) {
//       $stmt->bind_result($id, $password);
//       $stmt->fetch();
//       // Account exists, now we verify the password.
//       // Note: remember to use password_hash in your registration file to store the hashed passwords.
//       if (password_verify(md5($_POST['password']), md5($password))) {
//          // Verification success! User has logged-in!
//          // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
//          session_regenerate_id();
//          $_SESSION['loggedin'] = TRUE;
//          $_SESSION['email'] = $_POST['email'];
//          $_SESSION['id'] = $id;
//          header ("Location: index.html");
//       } else {
//          // Incorrect password
//          echo 'Incorrect username and/or password!';
//       }
//    } else {
//       // Incorrect username
//       echo 'Incorrect username and/or password!';
//    }


// 	$stmt->close();
// }



if($_SERVER["REQUEST_METHOD"] == "POST")  
 {  
      if(empty($_POST["email"]) && empty($_POST["password"]))  
      {  
         exit('Please fill both the username and password fields!');
      }  
      else  
      {  
           $email = mysqli_real_escape_string($link, $_POST["email"]);  
           $password = mysqli_real_escape_string($link, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM user_account WHERE email = '$email' AND password = '$password'";  
           $result = mysqli_query($link, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                
               while($row = mysqli_fetch_array($result)){
                $_SESSION['status'] = $row['role'];
               //  $id = $query['id'];
                $_SESSION['id'] = $row['id'];  
                $_SESSION['userLogin'] =true;  
                //session_write_close();
                header("location:index.php");  
               // if($query["role"] == "AM")
			// {
			// 	header("location:admin.html");
			// }
			// else
			// {
			// 	header("location:index.html");
			// }
               }
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  


 

}
?>
