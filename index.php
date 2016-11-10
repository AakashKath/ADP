<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>TextArena</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<div id="headerbox" align="center">
		<label id="logo">TextArena</label>
	</div>
	<div align="center" id="loginbox">
		<div style="width: 350px; " align="left">
		<div style="margin: 30px;">
		<form id="signin">
			<label id="text_username">Username :<br /></label><input type="text" name="username" id="username" placeholder="Username" required/><br /><br />
			<label id="text_password">Password :<br /></label><input type="text" name="password" id="password" placeholder="Password" required/><br /><br />
			<input type="submit" name="Login" id="login" value="Login" /><br /><br />
			<input type="checkbox" name="checkbox">Remember Me
		</form>
		<br />
		<div id="signuplink" align="center">Don't have an account?<br /><a href="php/signup.php" style="color: #ff0000;">Create New Account</a></div>
		</div>
		</div>
	</div>
	<div id="copyrightbox">
		<table>
			<tr>
				<td>Designers: </td>
				<td> <a href="mailto:abhishekjp21@gmail.com" id="abhishek">Abhishek Tiwari</a></td>
			</tr>
			<tr>
				<td></td>
				<td> <a href="mailto:aakash.kath.258@gmail.com" id="akash">Akash Yadav</a></td>
			</tr>
			<tr>
				<td></td>
				<td> <a href="mailto:apuri.19.96@gmail.com" id="anshu">Anshu Puri</a></td>
			</tr>
			<tr>
				<td></td>
				<td> <a href="mailto:rajneeshkumar270497@gmail.com" id="rajnish">Rajnish Upadhyay</a></td>
			</tr>
		</table>
		<div align="center">copyrights reserved</div>
	</div>
</body>
</html>