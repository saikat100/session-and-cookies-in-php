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
	$flag=0;
	session_start();
	if(count($_SESSION) > 0)
		{
			echo "<h1>"."Hello ".$_SESSION["user"]." this is session</h1>";
			session_unset();
			session_destroy();
			$flag=1;
		}


	else
	{
		$cookie_name = 'username';
		if(isset($_COOKIE[$cookie_name])) 
		{
			echo '<h2> Hello '.$_COOKIE[$cookie_name].' this is cookie<h2>';
			$flag=1;

		}
	}

	if($flag==0)
	{
		echo "<h1>Access Denined</h1>";
		header('location:sign_in.php');
	}
}


?>