<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
</head>
<body style="margin-top: 200px">
	<form action="sign_up_backend.php" method="post">
			<table  align="center" >
					<tr>
						<td><b>User Name:</b></td>
						<td><input type="text" placeholder="enter user name" name="user_name"></td>
					</tr>

					<tr>
						<td><b>Password:</b></td>
						<td><input type="text" placeholder="enter Password" name="password"></td>
					</tr>

					<tr>
						<td><b>Confirm Password:</b></td>
						<td><input type="text" placeholder="enter Confirm Password" name="confirm_password"></td>
					</tr>

				</table>

				<div align="center" style="margin-top: 10px;">
					<input type="submit" value="Register" />
				</div>

</body>
</html>