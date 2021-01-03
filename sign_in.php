<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
</head>
<body style="margin-top: 200px">
	<form action="sign_in_backend.php" method="post">
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
						<td><b>Remember Me:</b></td>
						<td><input type="checkbox"  name="remember" value="remember"></td>
					</tr>

				</table>

				<div align="center" style="margin-top: 10px;">
					<input type="submit" value="Sign In" />
				</div>

</body>
</html>