
<?php 
include "conndb.php";
 session_start(); 
   $conf=$_REQUEST['conf'];    
   $if_del=$_REQUEST['if_del'];     
     
			if($if_del=='1')    //egkri8ike an einai 1
			{
				$sql2="update videos set if_approved='1' where name='$conf'";
				$result = mysqli_query($conn,$sql2); //επιλογή όλων 
				
				
			 
			 
			      $sql4="insert into notifications values('0','1','$conf','1')";					//pernao to onoma ths eikonas ston pinaka xoris na xo dilosei ton user
				 $result5 = mysqli_query($conn,$sql4); //επιλογή όλων 

				
				 
				 
			 
				 
				 $result4 = mysqli_query($conn,"SELECT user FROM videos  where name=(select name from notifications where videos.name=notifications.name); ");    //prepei na balo to user to0 trexon xrhsth
				  while($row2=mysqli_fetch_array($result4))
				  {   $userr=$row2['user'];
					  $sql3="update notifications set userid='$userr' where name=(select name from videos where videos.name=notifications.name)";
				      $result1 = mysqli_query($conn,$sql3); //επιλογή όλων 
				 
				 }
				 
			}else 
			{
				$sql2="delete FROM videos where name='$conf'";
				$result = mysqli_query($conn,$sql2); //επιλογή όλων 

				if(!$result)

				 {die('i eggrafh apetixe'.mysql_error());} /**/
			  
				$file = "../videos/".$conf;
				unlink($file);
				  
						
		   
			}

?>