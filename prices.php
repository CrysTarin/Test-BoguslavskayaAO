<?php
$dbHost = "localhost";
$dbUname = "root";
$dbPass = "";
$dbName = "english_test";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connect=mysqli_connect($dbHost, $dbUname, $dbPass, $dbName);
if ($conn->connect_error) {
	die ('connect error');
}
else {
	$myquery="SELECT * FROM `promo_prices`";
	$res=mysqli_query($connect, $myquery);
	$arr=array();
	$i=0;
	while ($row=mysqli_fetch_assoc($res)) {
		$arr[$i]=$row;
		$i++;
	}
	echo json_encode($arr);
}
?>