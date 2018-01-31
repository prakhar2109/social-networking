
<?php

session_start();
echo "Recommended friends<br>";
$conn = new mysqli('localhost','root','Tushar19','Signup');

$sql = "SELECT * FROM abc";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	
	   $_sql = "SELECT * FROM friends";
	$_result = $conn->query($_sql);
	   
	
		   while($_row = $_result->fetch_assoc())
	{
		if ($row['id'] != $_SESSION['id']) {
			
		
		if ( $_row['sender_id'] == $row['id'] || $_row['receiver_id'] == $row['id'])
		{
            continue;
		} 
	else
		{
			echo $row['name']."<br>";
			echo ' <a href="sending_request.php?accept=' .$row['id'].'">Add Friend</a> ';
			echo "<br>";
			break;
		}
		}
	  
	}
	}		
      

	       
?>	





