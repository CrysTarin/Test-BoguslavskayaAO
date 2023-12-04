<?php
$dbHost = "localhost";
$dbUname = "root";
$dbPass = "";
$dbName = "english_test";

$datet = $_POST['datet'];
$name = $_POST['name'];
$phone = (int) $_POST['phone'];
$mail = $_POST['mail'];
$sql;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn=mysqli_connect($dbHost, $dbUname, $dbPass, $dbName);
if ($conn->connect_error) {
	die ('connect error');
}
else {
	$myquery="INSERT INTO `applications` (`timestamp`, `name`, `phone`, `email`) VALUES ('".$datet."', '".$name."', ".$phone.", '".$mail."')";
	$sql=mysqli_query($conn, $myquery);
}

if ($sql==1){
	echo 'success';
}
else{
	echo 'error';
}
