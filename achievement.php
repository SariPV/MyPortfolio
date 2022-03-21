<?php
session_start();
require("config.php");
$uid=$_SESSION["id"];
// session_start();


//$id = get_current_user_id()
 //$id= $_SESSION['id'];
//  $id = $_GET['id'];

if(isset($_POST["save"]))
  {
    $item = count($_POST["award"]);
    if($item > 0)  
   {  
    for($i=0; $i<$item; $i++)  
    {  
         if(trim($_POST["award"] != ''))  
         {  
          $award=$_POST['award'][$i];
          $year=$_POST['years'][$i];
          $education="INSERT INTO `achievement`(`description`,`year`,`userid`)VALUES('$award','$year',$uid) ";
          $result=mysqli_query($link,$education)or die("Could Not Perform the Query");
  
        }  
    }  
    header ("Location: profile3.php");
  }  
  else  
  {  
    echo "Please Enter Skill";  
  }  

      

  

  // $query="INSERT INTO `achievement`(`year`,`description`,`userid`)VALUES
  //                                     ('$year','$award','".$_SESSION['userLogin']."')";
  // $result=mysqli_query($link,$query)or die("Could Not Perform the Query");
  // if ($link->query($query) === true){
  //   echo 'added sucessfully';
  // }else{
  //   echo "error: $query".mysql_error($link);
  // }
  }
if(isset($_POST["update"]))
{
#change the id name in profile3.php
  $id=$_POST['acid'];
$award=$_POST['award'];
$year=$_POST['years'];


$ach="UPDATE `achievement` SET `year` = '$year',`description` = '$award' WHERE `id`='$id'";
$result=mysqli_query($link,$ach)or die("Could Not Perform the Query");
// $sql = "UPDATE achievement SET year=:years, description=:award WHERE id=:id";
// $stmt = $link -> prepare($sql);
// $stmt = $bindParam(':year', $_POST['years'],PDO::PARAM_INT);
// $stmt = $bindParam (':description', $_POST['award'], PDO::PARAM_STR);
// $stmt = $bindParam(':id', $_POST['id'], PDO::PARAM_INT);

// $stmt->execute();
// if ($link->query($query) === true){
//   echo 'added sucessfully';
// }else{
//   echo "error: $query".mysql_error($link);
// }
}
  

?>