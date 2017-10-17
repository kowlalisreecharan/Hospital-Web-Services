<?php
	session_start();
	$duname = $_POST['duname'];
	$dupassword = $_POST['dupass'];
	include ('deh.php');
	$sql1 = "SELECT  * FROM doctors WHERE duname = '$duname' AND dupassword = '$dupassword'";
	$res = $conn->query($sql1);
	if($row = $res->fetch_assoc()){
	$_SESSION['duname'] = $duname;
	header("Location: doctor.php");
	}
	else{
		echo "username or password is incorrect";
		exit();
	}
?>