
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>First PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
<div class="tushar" >	
<div class="input" style="width: 100vw; height: 100vh;">	
	<div class="row">
		<div id="grid1" class="col-md-6">
		Welcome<br>
		in Tushar's world
	</div>
	<div class="col-md-6">
	</div>
	</div>
	
</div>
</div>
<div>
	<div class="box2">
		<div class="subbox21">
			<div class="subbox211">
<form  method="POST" action="relative.php" >
	<div class="tush"><label style="font-family: Helvetica;color:white; margin-top: 4vh;position: relative; " >Name:</label>
	<input class="name " type="text" name="fname" placeholder="Name"><br>
	<label style="font-family: Helvetica; color:white; padding-top:5vh; ">Email:</label>
	<input class="name " type='email' name='email' placeholder="Email"><br>
	<label style="font-family: Helvetica;color:white;">Password:</label>
	<input class="name " type="password" name="password1" placeholder="******">
	<br>
	<label style="font-family: Helvetica;color:white;">Confirm Password:</label>
	<input class="name " type="password" name="password2" placeholder="******"><br>
	<label style="font-family: Helvetica;color:white;">Date of birth</label>
	<input type="date" class="name " name="date">
	<br>
	<label style="font-family: Helvetica;color:white;">Age</label>
	<input type="integer" name="age" class="name " placeholder="Age">
	<br>
	<label style="font-family: Helvetica;color:white;">Gender</label>
	<input type="radio" name="gender" value="male" >Male<br>
	<input type="radio" name="gender" value="female">Female<br>
	<input type="radio" name="gender" value="other">Other<br>
	<button name='submit' class="submit">Submit</button>
	<p>If already registered?</p>
	<a href="login_html.php">Login</a>
</div>
</div>
</form>
</div>
<div>
</body>
</html>