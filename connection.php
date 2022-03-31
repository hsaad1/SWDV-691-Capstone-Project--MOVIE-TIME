<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="movie_time";
	$conn=mysqli_connect($servername,$username,$password,$dbname)
	or
	die("connection failed".mysqli_connect_error());
?>