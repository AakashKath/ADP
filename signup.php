<?php
	$db = mysqli_connect('localhost', 'root', 'Aakash0258', 'ADP');
	session_start();
	if(!isset($_POST['signup'])){
		$name = $_POST['signup_name'];
		$username = $_POST['signup_username'];
		$password = $_POST['signup_password'];
		$confirm_password = $_POST['signup_confirm_password'];
		$email = $_POST['signup_email'];
		$dateo = $_POST['signup_dob'];
		$dob = date("dd-mm-yyyy", $dateo);
		$mobile = $_POST['signup_mobile'];
		$gen = $_POST['gender'];
		if($gen)
		if($db -> query("insert into users(username, password, name, email, phone, gender, dob) values('".$username."', '".$password."', '".$name."', $'".$email."', '".$phone."', '".$gender."', '".$dob."')")){
			echo "record added";
		}
		else{
			echo "record not added";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TextArena</title>
	<link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
	<div id="headerbox" align="center">
		<label id="logo">TextArena</label>
	</div>
	<div align="center" id="loginbox">
		<div style="width: 350px; color: green;" align="left">
		<div style="margin: 30px;">
		<form id="signin" action="" method="POST">
			<label id="text_name">Name :<br /></label><input type="text" name="signup_name" id="name" placeholder="Name" required/><br /><br />
			<label id="text_username">Username :<br /></label><input type="text" name="signup_username" id="username" placeholder="Username" required/><br /><br />
			<label id="text_password">Password :<br /></label><input type="password" name="signup_password" id="password" placeholder="Password" required/><br /><br />
			<label id="text_confirm_password">Confirm Password :<br /></label><input type="password" name="signup_confirm_password" id="confirm_password" placeholder="Password" required/><br /><br />
			<label id="text_email">Email :<br /></label><input type="text" name="signup_email" id="email" placeholder="Email Address" required/><br /><br />
			<label id="text_dob">Date of Birth :<br /></label><input type="date" name="signup_dob" id="dob" required/><br /><br />
			<label id="text_mobile">Mobile :<br /></label><input type="text" name="signup_mobile" id="mobile" placeholder="Mobile Number" required/><br /><br />
			<label id="text_gender">Gender :<br /><input type="radio" name="gender" value="Male" id="male" checked>Male<br />
			<input type="radio" name="gender" value="Female" id="female">Female<br />
			<input type="radio" name="gender" value="Others" id="others">Others<br /><br />
			<input type="submit" name="Signup" id="signup" value="Signup" style="background-color: black; color:white;" /><br /><br />
		</form>
		</div>
	</div>
</body>
</html>