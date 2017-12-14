<?php include('cp1.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="cp.php">
		<a href="info.php">Home</a>
		<h5>Change Password</h5>
	<label style="font-family: Helvetica;">Old Password:</label>
	<input class="name " type="password" name="oldpass" placeholder="******">
	<br>
	<label style="font-family: Helvetica;">New Password:</label>
	<input class="name " type="password" name="newpass" placeholder="******">
	<br>
	<label style="font-family: Helvetica;">Confirm New Password:</label>
	<input class="name " type="password" name="newpass1" placeholder="******">
	<br>
	<button name="changepass">Change Password</button>
	</form>

</body>
</html>