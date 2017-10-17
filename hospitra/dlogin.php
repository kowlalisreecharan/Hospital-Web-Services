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
	margin-left: 525px;
	margin-top: 40px;
	color: white;	
}

</style>

<body background = "hop.jpg">
	<h1> Doctor Login</h1>
	<form action = "idoctor.php" method = "POST">
	<input name = "duname" type = "text" placeholder=" user id">
	<input name = "dupass" type = "password" placeholder=" password"><br> 
	<button type = "submit">Login</button>
	</form>



</body>

</html>