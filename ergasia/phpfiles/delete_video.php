
<?php 
include "conndb.php";
 session_start(); 
   $del=$_REQUEST['v_name'];      
     
			
				$sql2="delete FROM videos where name='$del'";
				$result = mysqli_query($conn,$sql2); //επιλογή όλων 

				if(!$result)

				 {die('i eggrafh apetixe'.mysql_error());} /**/
			  
				$file = "../videos/".$del;
				unlink($file);
			//	header("Location: ../videos.php");
				  
         
?>