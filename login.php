
	<?php
session_start();
$email="";
$password1="";
$email=$_POST['email'];
	$password1=$_POST['password1'];
$conn=new mysqli('localhost' , 'root' , 'Tushar19' , 'Signup');
if($conn->connect_error){
	echo "Connection error";
}
else{
}
if (isset($_POST['login'])) {

	if (empty($email) || empty($password1)) {
		if (empty($email)) {
		echo "Email is empty <br>";
	}
	if (empty($password1)) {
		echo "Enter a password <br>";
	}
	}
	else
	{

	$sql = "SELECT email, password , id FROM abc";
$result = $conn->query($sql);
$a=0;

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc())
{
	$pass1=$row["password"] ;
	$e=$row["email"];
	$_SESSION["id"]=$row["id"];
   if ( $email == $e)
   {
   if( $password1 == $row["password"] )
    {
   	$a = 1; 
   	break;
   } 

}
}

if($a==1)

{
	include 'info.php';

}
else
{
	echo "Username or Password incorrect";
}

}
else
{
	echo "Error in retrieving data";
}
}
}
?>


