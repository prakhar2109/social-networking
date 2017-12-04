<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>First PHP</title>
</head>
<body>
	
<form method="POST" action="relative.php">
	<label>Name:</label>
	<input type="text" name="fname"><br>
	<label>Email:</label>
	<input type='email' name='email'><br>
	<label>Password:</label>
	<input type="password" name="password1">
	<br>
	<label>Confirm Password:</label>
	<input type="password" name="password2"><br>
	<label>Date of birth</label>
	<input type="date" name="date">
	<br>
	<label>Age</label>
	<input type="integer" name="age">
	<br>
	<label>Gender</label><br>
	<input type="radio" name="gender" value="male">Male<br>
	<input type="radio" name="gender" value="female">Female<br>
	<input type="radio" name="gender" value="other">Other<br>
	<button name='submit'>Submit</button>
	<p>If already registered?</p>
	<a href="login_html.php">Login</a>
</form>
</body>
</html>