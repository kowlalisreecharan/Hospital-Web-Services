<?php
	session_start();
	//include 'header.php';
?>

<?php
	include 'deh.php';
	
	$uid = $_POST['uid'];
	$upassword = $_POST['upassword'];
	
	$sql = "SELECT * FROM users WHERE uid = '$uid' AND upassword = '$upassword'";
	$result = $conn->query($sql);
	if(!$row = $result->fetch_assoc()){
		echo "your user name or password is incorrect";
	}else{
		$_SESSION['uid'] = $uid;
		header("Location: dbms.php");
	}