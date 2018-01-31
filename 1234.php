<?php
session_start();
$conn = new mysqli('localhost', 'root', 'Tushar19', 'Signup');
$t = $_SESSION['id'];
$sql = "SELECT * FROM friends WHERE receiver_id = '$t' ";
$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
	$_sql ="SELECT * FROM abc WHERE id = '".$row['sender_id']."' ";

$_result = $conn->query($_sql);
	
		
	
        while($_row = $_result->fetch_assoc())
        { 
        	if($row['sender'] == '1' && $row['receiver'] == '0')
        	{
        	    echo '         <div>	 
			                     <div style="position:relative; margin:2px 0px 0px 13px;"><span style="font-size:20px; color:red;">'.$_row['name'].' </span>want to be friends with you</div>
			                      <br>
								 <div ><a href="add_friend.php?accept=' .$row['sender_id'].' ">Accept</a></div><br>
			                     <div ><a href="delete_request.php?accept=' .$row['sender_id'].'">Reject</a></div>
                                 
								 <hr>
								  </div>   ';
        	}

        	
        }
	

}




 
?>