<?php
	session_start();
	if (!isset($_SESSION['duname'])) {
		 header("Location: home.php");
		exit();
	}
?>
<html>
<head>
	<style>
	p1{
	 	margin-left: 425;
		color:white;
		font-size:50px;
		font-family:georgia;
	}
	table{
	margin-top: 120;
	margin-left: 220;
	border: 2px solid red;
	background-color: rgb(128,128,128);
	width: 700px;
	}

	table{
	border: 2px solid red;
	background-color: #FFC;
	width: 700px;
	}
	th{
	border-bottom: 5px solid #000;
	}
	td{
	border-bottom: 2px solid #666;
	}
	body form button{
		background-color: black;
        color: #FFFFFF;
        padding: 10px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
         margin-left:650px;
		margin-top:30px;
	}
	</style>
<title>Doctor</title>
</head>
<body background="cool-background-0.jpg">
<p1> Patients Operating</p1>
<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Medicine</th>
<th>Guardian Name</th>
<th>Guardian Contact</th>
</tr>
<?php
	include ('deh.php');
	$duname = $_SESSION['duname'];
	
	$sql = "SELECT firstname,lastname,mname,gname,gno
	FROM users,guardian,medicines,doctors
	WHERE doctors.duname = '$duname' AND guardian.pid = users.id AND doctors.id = users.doctor AND medicines.sno IN (SELECT patmed.sno FROM patmed WHERE patmed.pid=users.id)";
	$result = $conn->query($sql);

	while($pati=$result->fetch_assoc()){
	echo "<tr>";
	echo "<td>".$pati['firstname']."</td>";
	echo "<td>".$pati['lastname']."</td>";
	echo "<td>".$pati['mname']."</td>";
	echo "<td>".$pati['gname']."</td>";
	echo "<td>".$pati['gno']."</td>";
	echo "</tr>";
	}
?>
</table>
<form action = "logout.php">
	<button type = "submit">Logout</button>
</form>
</body>
</html>
