<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="info.php">Home</a>
	<h5>Edit basic information : </h5>
	<form  method="POST" action="edit1.php" >
	<label style="font-family: Helvetica; margin-top: 4vh;position: relative; " >Name:</label>
	<input class="name " type="text" name="fname" placeholder="Name"><br>
	<label style="font-family: Helvetica;">Date of birth</label>
	<input type="date" class="name " name="date">
	<br>
	<label style="font-family: Helvetica;">Age</label>
	<input type="integer" name="age" class="name " placeholder="Age">
	<br>
	<label style="font-family: Helvetica;">Gender</label>
	<input type="radio" name="gender" value="male" >Male<br>
	<input type="radio" name="gender" value="female">Female<br>
	<input type="radio" name="gender" value="other">Other<br>
	<button name="applychanges" class="submit">Apply Changes</button>
</form>
</body>
</html>
