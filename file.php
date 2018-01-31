<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
	.box{
		display:flex;
        flex-direction:column;
        justify-content:flex-start;
        height: 100%;
        margin-top:2vh;
        text-align: center;
        box-shadow:  0px 8px 16px 0px rgba(0,0,0,0.2);
        background-color: #f9f9f9;
        border-radius: 2px;
	}
	.info{
		display:flex;
        flex-direction:row; 
        justify-content:space-between;
        padding:1vh 2vh;
	}
	.time{
		display: flex;
		flex-direction: row;
		font-size: 15px;
		font-color:blue;
		padding: 10px 10px;
	}
	.flex{
		display: flex;
	}
	.flex img{
		height:60px;
        width:60px; 
        border-radius:50%;
	}
	.flex h3{
		font-size:20px;
        font-family:Ubuntu;
        padding:15px 10px;
	}
	.view{
		display:flex;
        flex-direction:row;
        justify-content:flex-start;
        padding:2px 5px;
        padding-bottom: 5px;
	}
	.bt-like{
  background: #4d636f;
   color: white;
   padding: 10px 15px;
   font-weight: 400;
   border: 2px solid #4d636f;
   cursor: pointer;
	}
	.bt-like:hover{
 background: white;
    color: #4d636f;
    transition: 0.2s ease-in-out;
	}
	.bt-comment{
		  background: #4d636f;
   color: white;
   padding: 10px 15px;
   font-weight: 400;
   border: 2px solid #4d636f;
   cursor: pointer;
	}
.bt-comment:hover{
	 background: white;
    color: #4d636f;
    transition: 0.2s ease-in-out;
}
</style>
</head>
<body>
<div class="posts_">

	<?php
	session_start();
			   $conn = new mysqli('localhost','root','Tushar19','Signup');
     $x = $_SESSION['id'];

			   $_post ="SELECT * FROM post ORDER BY time_ DESC";
			   $_result = $conn->query($_post);
			   while ($_row = $_result->fetch_assoc())
	    {
			  $sql = "SELECT * FROM myfriends ";
              $result = $conn->query($sql);
              while($row = $result->fetch_assoc())
              { 
              	if ($row['myid'] == $x || $row['friend_id'] == $x)
              	 {
              
			     	if($_row['signup_id'] == $x || $_row['signup_id'] == $row['myid'] || $_row['signup_id'] == $row['friend_id'])
			     	{
			     		
			     		$sql2 = "SELECT * FROM abc WHERE id = '".$_row['signup_id']."' ";
			     		$result2 = $conn->query($sql2);
			     		while ($row2= $result2->fetch_assoc())
			     	    {

                          if ($_row['signup_id'] == $_SESSION['id']) {
                          	
                          	if($_row['image'] != NULL)
                          	{
                          		$var2="";
                          		  $date_1= date("Y-m-d h:i:sa");
											$date_2 = $_row['time_'];
											$differenceFormat = '%a days' ;
    										$datetime1 = date_create($date_1);
    										$datetime2 = date_create($date_2);
   
    								$interval = date_diff($datetime1, $datetime2);
   
    								$var1= $interval->format($differenceFormat);
    								if ($var1 == 0) {
    									$var2=$interval->format('%i min');
    									$var1= $var2;
    								}
                          	echo '

                          <div class="box"> 
                          	<div class="info">
                                        <div class="flex">
                                     <img src="'.$row2['profilepic'].' ">
                          	<h3 >'.$row2['name'].'</h3>
                          	           </div>
                          	      <div class="time">
                                           '
                                          .$var1.
                                           '
                          	           </div>
                          	</div>
                          	<div style=" display:flex;
                                        justify-content:flex-start;"> 
                                     
                          	       <img style="height:auto;width:100%;padding:5vh;" src=" ' .$_row['image']. ' " >
                          	</div> 
                          	<div class="view">
                          	   <div style="padding:0px 5px;">
                          	   <button class="bt-like" name="like" ><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Like</button>
                          	   </div>
                          	   <div>
                          	   <button class="bt-comment" name="comment" >Comment</button>
                          	   </div>
                          	</div>
                          </div>
                          	       ';
                          	     
                          }
                          if ($_row['post'] != NULL) 

                          {
                          	$var2="";
                          	 $date_1= date("Y-m-d h:i:sa");
											$date_2 = $_row['time_'];
											$differenceFormat = '%a days' ;
    										$datetime1 = date_create($date_1);
    										$datetime2 = date_create($date_2);
   
    								$interval = date_diff($datetime1, $datetime2);
   
    								$var1= $interval->format($differenceFormat);
    								if ($var1 == 0) {
    									$var2=$interval->format('%i min');
    									$var1= $var2;
    								}
                          		
                          	echo ' 
                            <div class="box"> 
                          	<div class="info">
                                        <div class="flex">
                                         <img src="'.$row2['profilepic'].' ">
                          	<h3>'.$row2['name'].'</h3>

                          	</div>
                          	<div class="time">
                                           '
                                          .$var1.
                                           '
                          	           </div>
                          	           </div>
                          	<div style=" display:flex;
                                        justify-content:flex-start;
                                        padding:1vh 2vh;"> 
                                     '.$_row['post'].'
                          	</div> 
                          	<div class="view">
                          	    <div style="padding:0px 5px;">
                          	   <button class="bt-like" name="like" ><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Like</button>
                          	   </div>
                          	   <div>
                          	   <button class="bt-comment" name="comment" >Comment</button>
                          	   </div>
                          	</div>
                          </div> 
                          	       ';
                          }

                          	
                          	break;
                          }


                          else{
			     	       
			     			if($_row['image'] != NULL)
                          	{
                          		$var2="";
                          		 $date_1= date("Y-m-d h:i:sa");
											$date_2 = $_row['time_'];
											$differenceFormat = '%a days' ;
    										$datetime1 = date_create($date_1);
    										$datetime2 = date_create($date_2);
   
    								$interval = date_diff($datetime1, $datetime2);
   
    								$var1= $interval->format($differenceFormat);
    								if ($var1 == 0) {
    									$var2=$interval->format('%i min');
    									$var1= $var2;
    								}
                          	echo ' 
                           <div class="box"> 
                          	<div class="info">
                                    <div class="flex" >   
                                         <img src="'.$row2['profilepic'].' ">
                          	<h3>'.$row2['name'].'</h3>
                          	           </div>
                          	           <div class="time">
                                           '
                                          .$var1.
                                           '
                          	           </div>
                          	</div>
                          	<div style=" display:flex;
                                        justify-content:flex-start;
                                        padding:1vh 2vh;"> 
                                     
                          	       <img style="height:auto;width:100%;padding:5vh;" src=" ' .$_row['image']. ' " >
                          	</div>
                          	<div class="view">
                          	    <div style="padding:0px 5px;">
                          	   <button class="bt-like" name="like" ><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Like</button>
                          	   </div>
                          	   <div>
                          	   <button class="bt-comment" name="comment" >Comment</button>
                          	   </div>
                          	</div> 
                          </div>
                          	     
                          	  ';
                          	  
                          }
                          if ($_row['post'] != NULL) {
                          	$var2="";
                          	$date_1= date("Y-m-d h:i:sa");
											$date_2 = $_row['time_'];
											$differenceFormat = '%a days' ;
    										$datetime1 = date_create($date_1);
    										$datetime2 = date_create($date_2);
   
    								$interval = date_diff($datetime1, $datetime2);
   
    								$var1= $interval->format($differenceFormat);
    								if ($var1 == 0) {
    									$var2=$interval->format('%i min');
    									$var1= $var2;
    								}
                          	echo ' 
                          	 <div class="box"> 
                          	<div class="info">
                                        <div class="flex">
                                         <img src="'.$row2['profilepic'].' ">
                          	<h3>'.$row2['name'].'</h3>
                          	           </div>
                          	            <div class="time">
                                           '
                                          .$var1.
                                           '
                          	           </div>
                          	</div>
                          	<div style=" display:flex;
                                        justify-content:flex-start;
                                        padding:1vh 2vh;"> 
                                     '.$_row['post'].'
                          	</div> 
                          	<div class="view">
                          	    <div style="padding:0px 5px;">
                          	   <button class="bt-like" name="like" ><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>Like</button>
                          	   </div>
                          	   <div>
                          	   <button class="bt-comment" name="comment" >Comment</button>
                          	   </div>
                          	</div>
                          </div> 
                          	      ';
                          }
			     		
			     		    break;
			     		}
			     		}
			     		break;	
			     	}
			     }
			 }
			  
		}
			?>
		</div>
		</body>
		</html>