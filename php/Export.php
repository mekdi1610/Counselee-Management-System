<?php 
$host="localhost";
$username="root";
$password="";
$dbname="erk mead";
$con = new mysqli($host, $username, $password,$dbname);
$sql_data="SELECT * from patientinformation";
//$result_data=mysqli_query($con,$sql_data);


$result_data=$con->query($sql_data);
$results=array();

@header("Content-Disposition: attachment; filename=\"$filename\""); 
@header("Content-Type: application/vnd.ms-excel"); 
$flag = false; 
while ($row = mysqli_fetch_assoc($result_data)) 
	{ if (!$flag) { // display field/column names as first row 
		echo implode("\t", array_keys($row)) . "\r\n"; $flag = true; } 
		echo implode("\t", array_values($row)) . "\r\n"; }

?>


