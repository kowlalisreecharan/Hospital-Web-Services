<?php include('adminpage.php')?>
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
         margin-left:1000px;
		margin-top:30px;
}
</style>
</head>
<body background = "bground.jpg">
<form action = "ddel2.php" method="POST">
	<div>
	<input name = "duname" type = "text" placeholder=" Enter Dr user name"><br> 
	<button type = "delete">Remove</button>
	</div>
</form>
</body>