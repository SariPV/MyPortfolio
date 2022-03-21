<?php

session_start();
require("config.php");
$uid=$_SESSION["id"];
//include('profile.html');

//session_start();


//$id = get_current_user_id();
// $_SESSION["login_user"] = $id;
//$id = $_GET['id'];

if($_POST["save"])
  {
  $itemCount = count($_POST["institution"]);
  if($itemCount > 0)  
 {  
  for($i=0; $i<$itemCount; $i++)  
  {  
       if(trim($_POST["institution"][$i] != ''))  
       {  
         $start = $_POST["startyear"][$i] ;
         $end = $_POST["endyear"][$i] ;
         $institution = $_POST["institution"][$i] ;
         $degree = $_POST["degree"][$i];
         if ($start < $end){
          $query="INSERT INTO education(yearStart,yearEnd,institution,degree,userid)VALUES
          ('$start','$end','$institution','$degree','$uid') ";
          $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
          header ("Location: profile3.php");
         }else{
          echo "<script type='text/javascript'>alert('Please Enter Start year less than end year');</script>"; 
         }
        // $query="INSERT INTO education(yearStart,yearEnd,institution,degree,userid)VALUES
        // (,'$uid') ";
        // $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));

      }  
  }  
  
}  
else  
{  
  echo "Please Enter Education";  
}  

  // $institution=$_POST['institution'];
  // $degree=$_POST['degree'];
  // $start=$_POST['startyear'];
  // $end=$_POST['endyear'];

  // $query="INSERT INTO education(yearStart,yearEnd,institution,degree,userid)VALUES
  //                                     ('$start','$end','$institution','$degree','".$_SESSION['userLogin']."') ";
  // $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
  // if ($link->query($query) === true){
  //   echo 'added sucessfully';
  // }else{
  //   echo "error: $query".mysql_error($link);
  // }
  }
  if(isset($_POST["update"]))
  {
  
    $institution=$_POST['institution'];
    $degree=$_POST['degree'];
    $start=$_POST['startyear'];
    $end=$_POST['endyear'];
    $id=$_POST['id'];
    $query="UPDATE education SET yearStart ='$start' ,yearEnd = '$end' , institution = '$institution',degree = '$degree',userid = $uid WHERE id='$id' ";
    $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
    header ("Location: profile3.php");
 

} 
?>