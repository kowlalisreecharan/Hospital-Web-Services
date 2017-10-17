
<?php
include('adminpage.php');
include('deh.php');
$sql = "SELECT * FROM doctors";
$result = $conn->query($sql);
?>

<table>
<tr>
<th>Name</th>
<th>Branch</th>
<th>Contact</th>
<th>userid</th>
<th>Password</th>
</tr>
<?php
	while($employee = $result->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$employee['dname']."</td>";
		echo "<td>".$employee['dbranch']."</td>";
		echo "<td>".$employee['dcontact']."</td>";
		echo "<td>".$employee['duname']."</td>";
		echo "<td>".$employee['dupassword']."</td>";
		echo "</tr>";
	}
?>
</table>
</body>
</html>