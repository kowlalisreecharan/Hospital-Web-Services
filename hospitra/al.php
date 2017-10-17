<?php
	include 'deh.php';
	
	$aid = $_POST['aid'];
	$apassword = $_POST['apassword'];
	
	$sql = "SELECT * FROM admin WHERE aid = '$aid' AND apassword = '$apassword'";
	$result = $conn->query($sql);
	if(!$row = $result->fetch_assoc()){
		echo "your user name or password is incorrect";
	}else{
		session_start();
		$_SESSION['aid'] = $row['aid'];
		header("Location: adminpage.php");
	}