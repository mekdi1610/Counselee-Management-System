<!DOCTYPE html>
<html>
<head>
	
	<title>Login Form</title>
</head>
<body>
	<?php
  error_reporting(0);
$con=mysqli_connect("sql206.epizy.com","epiz_25600350","uEnvNJf3Iv1M0AM");
mysqli_select_db($con,"epiz_25600350_erk");
$roles1="Counselor";
$roles2="Staff";
$uid=$_POST["Username"];
$passwords=$_POST["Password"];include("Diagnosis.php");
//echo $passwords;

// $sql="SELECT Password,Role from signup where UserName='$uid'";
// $re=mysqli_query($con,$sql);
// while($row = mysqli_fetch_array($re)){
// 	$pass=$row['Password'];
// 	$role=$row['Role'];
// 	if(password_verify($passwords,$pass)){
		//echo "You have logged in";

// if($roles1==$role){
// include("Diagnosis.php");
// }
// else if($roles2==$role){
// 
// }

// }else{
//     echo '<script>
//     alert("Wrong Username or Password") 
//     document.location = "index.php"
//     </script>';
//   }
// }

	/*
if($passwords==$pass && $roles3==$role){
	include("Home.html");
}
if($passwords==$pass && $roles1==$role){
include("Home.html");
include("Home.php");
}
if($passwords==$pass && $roles2==$role){
include("HomeI.html");
}
else{
 

}
}
*/
  
?>
<?php
$usernameVal=$_REQUEST["Username"];

 if (isset($_REQUEST['remember']))
   $escapedRemember = mysqli_real_escape_string($conn,$_REQUEST['remember']);

 $cookie_time = 60 * 60 * 24 * 30; // 30 days
  $cookie_time_Onset=$cookie_time+ time();
  if (isset($escapedRemember)) {
    /*
     * Set Cookie from here for one hour
     * */
    setcookie("Username", $usernameVal, $cookie_time_Onset);
    setcookie("Password", $escapedPW, $cookie_time_Onset);  

  } else {

      $cookie_time_fromOffset=time() -$cookie_time;
setcookie("Username", '',$cookie_time_fromOffset );
    setcookie("Password", '', $cookie_time_fromOffset);  

  }
  //save this user and pass as cookie if remember checked end
     


?>

</body>
</html>