<?php
session_start();
$conn = new mysqli('localhost','root','Tushar19','Signup');
$z = $_SESSION ['id'];
$y = $_GET['accept'];
$sql = "SELECT * FROM friends WHERE receiver_id = '$y' ";
$result = $conn->query($sql);
while($row = $result->fetch_assoc())
{
	if ($row['sender_id'] == $z) 
	{
		if ($row['receiver'] == '0') {
			echo "Friend request sent already";
			exit;
		}
		if ($row['receiver'] == '1') {
			echo "Friend already";
			exit;
		}
		
		
	}
}

	$_sql = "SELECT * FROM friends WHERE sender_id = '".$y."' ";
$_result = $conn->query($_sql);
while($_row = $_result->fetch_assoc())
{

	if ($_row['receiver_id'] == $z) {
	
		if ($_row['receiver'] == '0') {
			echo "Check request box";
			exit;
		}
		if ($_row['receiver'] == '1') {
			echo "Friend already";
			exit;
		}
		
	}
}
	

	$__sql="INSERT INTO friends (sender,receiver,sender_id,receiver_id) VALUES ('1','0','".$z."','".$y."')";
		        	if($conn->query($__sql) == true)
		        	{
		        		echo "Friend request sent.";
		        		
		        	}
		        
		        else
		        {
		        	echo $__sql;
		        	echo $conn->error;
		        }
		        ?>