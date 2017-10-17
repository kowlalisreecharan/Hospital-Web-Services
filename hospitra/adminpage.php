<?php
	session_start();
	if (isset($_SESSION['aid'])) {
	}
	else{
	 header("Location: home.php");
	 exit();
	}
?>
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
	ul{
		margin: 0px;
		padding: 0px;
	}
	ul li a{
		text-decoration: none;
		color:white;
		display:block;
	}
	ul li{
		float: left;
		width: 150px;
		height: 40px;
		background-color: black;
		font-size: 20px;
		line-height: 40px;
		text-align: center;
		opacity: 0.75;
		border: 5px solid #285189;
		
	}
	ul li a:hover{
		background-color: orange;
	}
	ul li ul li{
		display: none;
	}
	ul li:hover ul li{
		display: block;
	}
</style>
</head>
<body background = "bground.jpg">
<div>
	<ul>
	<li><a href = "adminpage.php">Home</a></li>
	<li><a href = "#">Doctors</a>
		<ul>
			<li><a href = "searchdoc.php">Search doctor</a></li>
			<li><a href = "adddoc.php">Add doctor</a></li>
			<li><a href = "ddel.php">remove doctor</a></li>
			<li><a href = "sdoctors.php">view doctors</a></li>
		</ul>
	</li>
	<li><a href = "#">Patients</a>
		<ul>
			<li><a href = "signuppage.php">add patients</a></li>
			<li><a href = "vpatient.php">view patients</a></li>
		</ul>
	</li>
	<li><a href = "about.php">About</a></li>
	<li><a href = "logout.php">Logout</a></li>
	</ul>
</div>
</body>
</html>