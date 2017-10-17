
<html>
<style>
form p1 input{
	font: 2em Georgia;
	margin-left: 500px;
	margin-top: 50px;
}

form input{
	font: 2em Georgia;
	margin-left: 500px;
	margin-top: 30px;
	border: 2px solid black;
    border-radius: 10px;
}


form button{
        background-color: black;
        color: #FFFFFF;
        padding: 10px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
         margin-left:600px;
		margin-top:30px;
		font: 2em Georgia;
		cursor: pointer;
}

body h1{
	font: 50px Georgia;
	margin-left: 450px;
	margin-top: 40px;
	color: white;
}

</style>

<body background = "mmm.jpg">
	<h1> Administrator Login</h1>
	<form action = "al.php" method="POST">
	<p1><input name = "aid" type = "text" placeholder=" user id" required = "required"></p1>
	<input name = "apassword" type = "password" placeholder=" password"required = "required"><br> 
	<button type = "Login">Login</button>
	</form>



</body>

</html>