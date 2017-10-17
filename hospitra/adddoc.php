<html>
<head>
<style>
body form input{
	margin-left: 50px;
	margin-top: 40px;
	font-size:18pt;
     height:40px;
     width:400px;
	 border: 2px solid black;
    border-radius: 10px;
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
</head>

<body background = "bground.jpg">
<form action = "dac.php" method="POST">
	<div>
	<input name = "dname" type = "text" placeholder=" Doctor Name"><br>
	<input name = "dbranch" type = "text" placeholder=" Branch Name"><br> 
	<input name = "dcontact" = "text" placeholder=" Contact"><br> 
	<input name = "duname" = "text" placeholder=" UserId"><br> 
	<input name = "dupassword" type = "text" placeholder=" Password"><br> 
	<button type = "submit">Add</button>
	</div>
</form>
</body>
</html>