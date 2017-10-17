<?php
	include 'header.php';
?>

<?php
	if(isset($_SESSION['id'])){
		echo "Logged in";
	}else{
		echo "Login to view your record";
	}
?>

</body>
</html>