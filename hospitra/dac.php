
<body background = "image.png"> </body>

<?php
	include 'deh.php';
	$dname = $_POST['dname'];
	$dbranch = $_POST['dbranch'];
	$dcontact = $_POST['dcontact'];
	$duname = $_POST['duname'];
	$dupassword = $_POST['dupassword'];
	
	$sql = "SELECT * FROM doctors WHERE duname = '$duname'";
	$result = $conn->query($sql);
	
	
	if(empty($dname) ||empty($dbranch) ||empty($dcontact) ||empty($duname) || empty($dupassword)){ 
		echo "FILL EMPTY FIELDS!";
	}
	else if($result->fetch_assoc())
		echo "USER NAME ALREADY EXISTS!";
	else{	
		$sql = "INSERT INTO doctors (dname,dbranch,dcontact,duname,dupassword)
		VALUES('$dname','$dbranch','$dcontact','$duname','$dupassword')";
		$result = $conn->query($sql);
		header("Location: adminpage.php");
	}