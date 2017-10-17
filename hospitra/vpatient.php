<html>
<head>
<style>
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
</style>
<head>
</html>
<?php include('adminpage.php');?>
<table>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Contact</th>
<th>Gender</th>
<th>Doctor</th>
</tr>

<?php
include('deh.php');
$sql = "SELECT firstname,lastname,emailid,gender,dname FROM users,doctors where users.doctor = doctors.id ";
$result = $conn->query($sql);
	while($employee = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$employee['firstname']."</td>";
		echo "<td>".$employee['lastname']."</td>";
		echo "<td>".$employee['emailid']."</td>";
		echo "<td>".$employee['gender']."</td>";
		echo "<td>".$employee['dname']."</td>";
		echo "</tr>";
	}
?>
</table>