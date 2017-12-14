<?php include('login.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="login_html.php">

	<label>Email:</label>
	<input type='email' name='email'><br>
	<label>Password:</label>
	<input type="password" name="password1">
	<br>
	<button name='login'>Login</button>
	<p>If not registered?</p>
	<a href="relative.php">Sign Up</a>
</form>

</body>
</html>