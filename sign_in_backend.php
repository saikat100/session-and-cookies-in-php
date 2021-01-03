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

	$name=$_POST["user_name"];
	$password=$_POST["password"];

	
	
	$sql="select * from user_info where user_name='$name' and user_pass='$password'";
	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)>0)
	{
		if(isset($_POST['remember']))
		{
			$row = mysqli_fetch_assoc($result);
			$user=$row['user_name'];
			$cookie_name = 'username';
			$cookie_value = $user;

			setcookie($cookie_name,$cookie_value, time() + 3*60);
			header('location:home.php');
		}

		else
		{
			$row = mysqli_fetch_assoc($result);
			$user=$row['user_name'];
			echo $user;
			session_start();
			$_SESSION["user"]=$user;
			header('location:home.php');
		}

	}


	else
	{
		echo "Invalid User name or password ";
	}

}


?>