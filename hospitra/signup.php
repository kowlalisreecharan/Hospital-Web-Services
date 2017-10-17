<body background = "image.png"> </body>

<?php
	include 'deh.php';
	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$upassword = $_POST['upassword'];
	$upasswordc = $_POST['upasswordc'];
	$gender = $_POST['gender'];
	$emailid = $_POST['emailid'];
	$id = $_POST['id'];
	
	$sql = "SELECT * FROM users WHERE uid = '$uid'";
	$result = $conn->query($sql);
	
	
	if(empty($first) ||empty($last) ||empty($uid) ||empty($upassword) || empty($emailid)|| empty($gender) || empty($id)){ 
		echo "FILL EMPTY FIELDS!";
	}
	else if($result->fetch_assoc())
		echo "USER NAME ALREADY EXISTS!";
	else if($upassword != $upasswordc)
		echo "ENTER CORRECT CONFIRMATION PASSWORD!";
	else{	
		echo $first.$last.$uid.$upassword.$upasswordc;
		$sql = "INSERT INTO users (firstname,lastname,emailid,gender,uid,upassword,doctor)
		VALUES('$first','$last','$emailid','$gender','$uid','$upassword','$id')";
		$sql1 = "SELECT firstname,lastname,emailid,gender,uid,upassword,doctor FROM
		users INTO OUTFILE'./file.txt'";
		$result = $conn->query($sql);
		$result = $conn->query($sql1);
		header("Location: adminpage.php");
	}