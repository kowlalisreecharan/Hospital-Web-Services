<?php
include('deh.php');
include('searchdoc.php');
$dname = $_POST['dname'];
$sql = "SELECT * FROM doctors where dname = '$dname'";
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