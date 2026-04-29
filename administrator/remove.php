<?php
$hostname="localhost";
$user_name="root";
$password="";
$db="biddingsystemdb";
$conn=mysqli_connect($hostname,$user_name,$password,$db);
	require("../db.php");
	$bidid = $_POST['id'];
	mysqli_query($conn,"UPDATE bidreport SET status = 1 WHERE bidid = '$bidid'") or die (mysqli_error());
?>