<?php
	$conn = mysqli_connect("localhost","root","","login_data");
	if(!$conn){
		die("connection failed: ".mysqli_connect_error());
	}