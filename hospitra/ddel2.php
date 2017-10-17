
<body background = "image.png"> </body>

<?php
	include 'deh.php';
	$duname = $_POST['duname'];
	
	$sql = "DELETE FROM doctors WHERE duname = '$duname';";
	$result = $conn->query($sql);

		header("Location: adminpage.php");