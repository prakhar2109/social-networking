<?php
session_start();

$username="";
$email="";
$password1="";
$password2="";
$age="";
$dob="";
$gender="";
$conn = new mysqli('localhost', 'root', 'Tushar19', 'Signup');
if($conn->connect_error){
	echo "Connection error";
}
else{
}
if (isset($_POST['submit'])){
	$username=$_POST['fname'];
	$email=$_POST['email'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	$age=$_POST['age'];
	$dob=$_POST['date'];
	$gender=$_POST['gender'];
if(empty($username) || empty($email) || empty($password1) || empty($password2) || $password1!=$password2)
	{if (empty($username)) {
		echo " Username is empty <br>";
	}
	if (empty($email)) {
		echo "Email is empty <br>";
	}
	if (empty($password1)) {
		echo "Enter a password <br>";
	}
	if(empty($password2))
	{
		echo "Also confirm password <br>";
	}
	if ($password1!=$password2) {
		echo "The two passwords does not match <br>";
	}

}
else{
		$query="INSERT INTO abc(name,email,password,age,dob,gender) VALUES('".$username."','". $email."','".$password1."','".$age."','". $dob."','".$gender."')";
	if($conn->query($query)==True){
	echo "You are succesfully signed up <br>";
	echo ' <a href="login_html.php">Click Here to Login</a>';
	die();

	}
	else{
		echo $query;
		die();
	}
	
}
}
?>
