<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'a1466580_dung';

$dbconnect = mysqli_connect($host, $user, $password, $database);
mysqli_query($dbconnect, "SET NAMES 'utf8'");
if (mysqli_connect_errno()){
 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}