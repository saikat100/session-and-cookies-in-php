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
	$user=$_POST["user_name"];
	$password=$_POST["password"];
	$confirm_password=$_POST["confirm_password"];

	$sql="select * from user_info where user_name='$user'";
	$result = mysqli_query($conn, $sql);
		
	if(mysqli_num_rows($result) > 0)
	{
		echo "<h1>"."Duplicate User id detected"."</h1>";
	}

	else
	{
		if($password!=$confirm_password)
		{
			echo "<h1>"."Confirm Passwrd didn't match!";
		}

		else
		{
			$sql_1="insert into user_info values('$user','$password')";
			if (mysqli_query($conn, $sql_1))
			{
				echo "New record created successfully";
			} 
			else 
			{
				echo "Error: " . $sql_1 . "<br>" . mysqli_error($conn);
			}
		}
	}

}



?>