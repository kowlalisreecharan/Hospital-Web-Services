<?php
	session_start();
	if (!isset($_SESSION['uid'])) {
		 header("Location: home.php");
		exit();
	}
?>
<html>
<head>
	<style>
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
	th{
	border-bottom: 5px solid black;
	}
	td{
	border-bottom: 2px solid black;
	}
	}
	</style>
<title> Patients</title>
</head>
<body background="cool-background.jpg">
<p1> Patient Details</p1>
 <table>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Guardian Name</th>
<th>Doctor Name</th>
<th>Medicine</th>

</tr>
<?php
	include('deh.php');
	$userid = $_SESSION['uid'];
	$sql = "SELECT firstname,lastname,gname,dname,mname 
	FROM users,doctors,guardian,medicines
	WHERE sno IN (SELECT patmed.sno FROM patmed WHERE patmed.pid=users.id) AND doctors.id = users.doctor AND guardian.pid = users.id AND users.uid = '$userid' ";
	$result = $conn->query($sql);
	if($pati = $result->fetch_assoc()){
	echo "<tr>";
	echo "<td>".$pati['firstname']."</td>";
	echo "<td>".$pati['lastname']."</td>";
	echo "<td>".$pati['gname']."</td>";
	echo "<td>".$pati['dname']."</td>";
	echo "<td>".$pati['mname']."</td>";
	echo "</tr>";
	}
?>
</table>
	<form action = "logout.php">
	<button type = "submit">Logout</button>
	</form>


</body>
</html>
