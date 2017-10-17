<?php
	session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<title>Login page</title>
<link rel='stylesheet' href="style.css">
</head>
<body background = "image.png">

<header> 
	<nav>
	<ul>
		<li><a href = "home.php">HOME</a></li>
		
		<?php
		
		if(isset($_SESSION['id'])){
			echo "<form action = 'logout.php'>
			<button>logout</button>
			</form>";
		}else{
			echo "<form action = 'login.php' method='POST'>
			<input name = 'uid' type = 'text' placeholder='UserID'>
			<input name = 'upassword' type = 'password' placeholder='password'>
			<button type = 'submit'>login</button>
			</form>";
		}
		
		?>
		
		
	</ul>
	</nav>
</header>