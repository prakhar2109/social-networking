<?php
session_start();
$var=$_SESSION["id"];
$var1=$_SESSION["tp"];
$servername = "localhost";
$username = "root";
$password = "Tushar19";
$dbname = "Signup";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if(isset($_POST['changepass']))
{
     $oldpass=$_POST['oldpass'];
     $newpass=$_POST['newpass'];
     $newpass1=$_POST['newpass1'];
	if ($oldpass != $var1) 
	{
		echo "Old password does not match";
	}
	else{
		if ($newpass != $newpass1) {
			echo "incorrect";
		}
		else
		{
			$sql="UPDATE abc SET password = '$newpass' where id = '$var'";
			if ($conn->query($sql) === TRUE) {
    echo "Password changed successfully";
} else {
    echo "Error changing password " . $conn->error;
}
		}
	}
}


?>