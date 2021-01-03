<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

else
{
	$sql="CREATE TABLE user_info (
	user_name VARCHAR(30),
	user_pass VARCHAR(30)
	)";
	if(mysqli_query($conn, $sql)){
		echo "table Created";
	}

	else
	{
		echo "Error Creation table: " . mysqli_error($conn);
		mysqli_close($conn);
	}


}


?>