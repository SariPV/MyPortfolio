<?php

session_start();
require("config.php");
$uid=$_SESSION["id"];

// session_start();


// //$id = get_current_user_id();
// $_SESSION["login_user"] = $id;

if(isset($_POST["save"]))
  {
      
    $item = count($_POST["company"]);
    if($item > 0)  
   {  
    for($i=0; $i<$item; $i++)  
    {  
         if(trim($_POST["company"] != ''))  
         {  
          $company=$_POST['company'][$i];
          $description=$_POST['description'][$i];
          $start=$_POST['startyear'][$i];
          $end=$_POST['endyear'][$i];
          if ($start < $end) {
            $query="INSERT INTO experience(yearStart,yearEnd,company,description,userid)VALUES
            ('$start','$end','$company','$description',$uid) ";
             $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
             header ("Location: profile3.php");
          }else{
            echo "<script type='text/javascript'>alert('Please Enter Start year less than end year');</script>"; 
            
          }
          
          // $query="INSERT INTO experience(yearStart,yearEnd,company,description,userid)VALUES
          //                                     ('$start','$end','$company','$description',$uid) ";
          // $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
  
        }  
    }  
   
  }  
  else  
  {  
    echo "Please Enter Experience";  
  }  
  // $company=$_POST['company'];
  // $description=$_POST['description'];
  // $start=$_POST['startyear'];
  // $end=$_POST['endyear'];

  // $query="INSERT INTO experience(yearStart,yearEnd,company,description,userid)VALUES
  //                                     ('$start','$end','$company','$description','".$_SESSION['userLogin']."') ";
  // $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
  // if ($link->query($query) === true){
  //   echo 'added sucessfully';
  // }else{
  //   echo "error: $query".mysql_error($link);
  // }

  }

  if(isset($_POST["update"]))
  {
  
    $company=$_POST['company'];
    $description=$_POST['description'];
    $position=$_POST['position'];
    $start=$_POST['startyear'];
    $end=$_POST['endyear'];
    $id=$_POST['exid'];
    $query="UPDATE experience SET yearStart ='$start' ,yearEnd = '$end' , company = '$company', description = '$description' , position='$position' WHERE id='$id' ";
    $result=mysqli_query($link,$query)or die("Could Not Perform the Query".mysql_error($link));
    header ("Location: profile3.php");
}  


?>