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

if (isset($_POST['applychanges'])) {
	$name=$_POST['fname'];
	$age=$_POST['age'];
	$dob=$_POST['date'];
	$gender=$_POST['gender'];
	echo $name;

$sql = "UPDATE abc SET name = '$name', dob = '$dob' , age = '$age', gender = '$gender' WHERE id = '$var' ";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}

else
{
echo "Press apply changes";
}

echo ' <a href="info.php"> Home </a> ';


?>