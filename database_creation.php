<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());
}

$sql= "create database mydb";
if(mysqli_query($conn, $sql)){
	echo "Database Created";
}

else
{
	echo "Error Creation database: " . mysqli_error($conn);
	
}


?>