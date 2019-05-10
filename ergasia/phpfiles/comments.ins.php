<?php
date_default_timezone_set('Europe/Athens');
session_start();
include "conndb.php";

$userid=$_SESSION['userid'];	
$postid=$_SESSION['postid'];	
$message=$_REQUEST['comm'];			  
$name=$_SESSION['name'];  
$date=$_REQUEST['date'];




$sql="insert into comments(name,date,message,postid,userid) values('$name','$date','$message','$postid','$userid')" ; 				
mysqli_query($conn,$sql);



				$sql2="SELECT * FROM comments where postid='$_SESSION[postid]';" ;

		    

			$result = mysqli_query($conn,$sql2); //επιλογή όλων 

	    	if(!$result)

		     {die('i eggrafh apetixe'.mysql_error());}

		 

			while($row = mysqli_fetch_array($result))

     		{     
            echo "<div class='date'>".$row['date']."</div>";
		        echo "<div class='comment-box3'>";
		         
				         $cid=$row['cid'];
                           echo "<div class='comment' >".$row['name'].": ". $row['message']."</div><br><br><br>";
				        /*   ?><input type='button' class='delete' value='delete' onclick="delete_com('<?php echo $cid ?>')" /> <?php*/
				     
				         if($row['userid']==$_SESSION['userid'])
						 {?><input type='button' class='delete' value='delete' onclick="delete_com('<?php echo $cid ?>')" /> <?php
					     }else{
						 ?> <input type='button' class='delete' style='visibility: hidden;'value='delete' disabled /> <?php }
			 		     
                echo "</div>";
					
			}
		
			

		


?>
