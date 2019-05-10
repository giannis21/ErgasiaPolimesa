
<?php 
include "conndb.php";
 session_start(); 
   $del=$_REQUEST['im_name'];      
     
			
				$sql2="delete FROM mjphotos where name='$del'";
				$result = mysqli_query($conn,$sql2); //επιλογή όλων 

				if(!$result)

				 {die('i eggrafh apetixe'.mysql_error());} /**/
			  
				$file = "mjphotos/".$del;
				unlink($file);
				  
				  
         
?>