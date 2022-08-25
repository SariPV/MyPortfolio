<?php
require('../backend/config.php');
require_once __DIR__ . '/vendor/autoload.php' ;


session_start();
if(!isset($_SESSION['userLogin']))
	{
		// echo "Please Login!";
        header("location:../login.html"); 
		exit();
	}else{
    //  $query = "SELECT 'role' from user_account where id ='".$_SESSION['userLogin']."'";
    //  $result = mysqli_query($link, $query);  
    if ($_SESSION['status'] == 'US'){
        $temp_userid = $_SESSION['id'];
     // "SELECT id from user_account where email ='".$_SESSION['id']."'";
     // header("location:index.php");
    }else{        header("location:../backend/admin.php");
    }
    
  }
//echo 'hello';
//$temp_userid = 1;

$query ="SELECT * FROM user_profile,user_account WHERE user_account.id=$temp_userid AND user_profile.userid=$temp_userid";
//$education = "SELECT * FROM portfolio WHERE portfolio.userid=$temp_userid";
//    $data =  mysqli_query($link,$education);
$result = mysqli_query($link,$query);
$education ="SELECT * FROM education WHERE userid=$temp_userid";

if (!$result)
{
    die ('failed to connect mysql database'. mysqli_connect_error());
}
$temp_user = mysqli_fetch_array($result);

$temp_username = $temp_user['full-name'];
$MyImage = $temp_user['profileImage'];
$position = $temp_user['position'];
$phone = $temp_user['phone'];
$email = $temp_user['email'];
$address = $temp_user['address'];
//$profileImage = $temp_user['profileImage'];


//read html template
ob_start();
include("sim_white.html");
$original_text = ob_get_contents();
//ob_end_clean();
//$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

// Define a default page size/format by array - page will be 190mm wide x 236mm height
//$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [190, 236]]);

// Define a default page using all default values except "L" for Landscape orientation
// $mpdf = new \Mpdf\Mpdf();
// $stylesheet = file_get_contents('style.css'); // Get css content*/
// //$html = file_get_contents('template1.html');

// $mpdf->WriteHTML($stylesheet,1);
// $mpdf->WriteHTML($original_text);



//ob_get_clean();
// $mpdf->Output();


$new_text = $original_text;
///$new_text = str_replace("{UserName}",$temp_username,$new_text);

//$new_text = $original_text;
$str = "{<ul>
<li>
    <h5>yearStart-yearEnd</h5>
    <h4>Bachelor Degree in Communication Arts</h4>
    <h4>Harvard University</h4>
</li>
<li>
    <h5>2009-2012</h5>
    <h4>High school</h4>
    <h4>Dripping Springs High School</h4>
</li>
<li>
    <h5>2006-2012</h5>
    <h4>Middle school</h4>
    <h4>Sycamore Springs Middle School</h4>
</li>


</ul>}";

$original_text = str_replace("{UserName}",$temp_username,$original_text);
$original_text = str_replace("{MyImage}",$MyImage,$original_text);
$original_text = str_replace("{position}",$position,$original_text);
$original_text = str_replace("{phone}",$phone,$original_text);
$original_text = str_replace("{email}",$email,$original_text);
$original_text = str_replace("{address}",$address,$original_text);
$original_text = str_replace("{MyImage}",$MyImage,$original_text);
$i = 0;
$results = mysqli_query($link,$education);
$substr = "";
while(($education_list = mysqli_fetch_array($results))>$i){
  
  
  $yearStart = $education_list['yearStart'];
  $yearEnd = $education_list['yearEnd'];
  $degree = $education_list['degree'];
  $institution = $education_list['institution'];
  $substr = $substr . ' <ul>
  <li class= "year">'.$yearStart.'-'.$yearEnd.'</li>
  <li class= "type">'.$degree.'</li> 
  <li class= "location">'.$institution.'</li>       
  
</ul>
  ';

  $i+=1;

}

$exp ="SELECT * FROM experience WHERE userid=$temp_userid";
$exp_results = mysqli_query($link,$exp);
$expe = 0;
$exstr = '';
while(($experience = mysqli_fetch_array($exp_results))>$expe){

    $yearStart = $experience['yearStart'];
    $yearEnd = $experience['yearEnd'];
    $position = $experience['position'];
    $description = $experience['description'];
    $company = $experience['company'];
$exstr = $exstr . ' <div class="box">
<div class="left-box">
    <div class="position">'.$position.'</div>
    <div class="year">
        '.$yearStart.' - '.$yearEnd.'
    </div>
</div>
<div class="right-box">
    <div class="company">
        '.$company.'
    </div>

    <div class="text">
        <li>'.$description.'</li>
    </div>
</div>    
</div>';

$expe += 1; 
}

$ach ="SELECT * FROM achievement WHERE userid=$temp_userid";
$ach_results = mysqli_query($link,$ach);
$achi = 0;
$achstr = '';
while(($achievement = mysqli_fetch_array($ach_results))>=$achi){

    $award = $achievement['description'];
    $year = $achievement['year'];
   
$achstr = $achstr . '<div class="box">
<div class="text">
    <p>'.$award.'</p>
</div>
<div class="year_achieve">
    '.$year.'
</div>

</div>
';

$achi += 1; 
}

$skill_query ="SELECT * FROM skill WHERE userid=$temp_userid";
$skill_results = mysqli_query($link,$skill_query);
$count = 0;
$skillstr = '';
while(($skill = mysqli_fetch_array($skill_results))>=$count){
    $level = $skill['level'];
    $skill = $skill['skillname'];

$skillstr = $skillstr . '<div class="progressBar">
<div class="label"><h3>'.$skill.'</h3></div>
<div class="progressBarContainer">
  <div class="progressBarValue value-'.$level.'"></div>
</div>
</div>';

$count += 1; 
}

$ref_query ="SELECT * FROM reference WHERE userid=$temp_userid";
$ref_results = mysqli_query($link,$ref_query);
$countref = 0;
$refstr = '';
while(($ref = mysqli_fetch_array($ref_results))>=$countref){

    
$name = $ref['full-name'];
$refposition = $ref['position'];
$refphone = $ref['phone'];
$refemail = $ref['email'];


$refstr = $refstr . '<ul>
<li>
    <span class="text-dark">'.$name.' </span><br>
    <span class="text">'.$refposition.' </span>
</li>
<li>
    <span class="text-dark">Phone:</span>
    <span class="text">'.$refphone.' </span>
</li>
<li>
    <span class="text-dark">Email:</span>
    <span class="text">'.$refemail.' </span>
</li>
</ul>
';

$countref += 1; 
}


//echo "</ul>";
$original_text = str_replace("%education%",$substr,$original_text);
$original_text = str_replace("%experience%",$exstr,$original_text);
$original_text = str_replace("%achievement%",$achstr,$original_text);
$original_text = str_replace("%skill%",$skillstr,$original_text);
$original_text = str_replace("%reference%",$refstr,$original_text);

//$original_text = str_replace($str,$substr,$original_text);
//$original_text = str_replace("{yearStart}",$yearStart,$original_text);
echo $original_text;
$mpdf = new \Mpdf\Mpdf();
//$stylesheet = file_get_contents('style.css'); // Get css content*/
//$html = file_get_contents('temp1.html');

//$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML($original_text);



ob_get_clean();
$mpdf->Output("template.pdf","I");

// $temp = $mpdf->Output();
// $category=mysqli_real_escape_string($link,$_POST['category']);
//   $query="INSERT INTO `download`(`date`,`file`)VALUES
//                                       (now(),'$temp')";
//   $result=mysqli_query($link,$query)or die("Could Not Perform the Query");

?>
