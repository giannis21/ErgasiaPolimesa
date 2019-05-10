
<?php 
include "conndb.php";
 session_start(); 
   $del=$_REQUEST['m_name'];      
     
			
				$sql2="delete FROM mjrec where name='$del'";
				$result = mysqli_query($conn,$sql2); //επιλογή όλων 

				if(!$result)

				 {die('i eggrafh apetixe'.mysql_error());} /**/
			  
				$file = "../mjrecordings/".$del;
				unlink($file);
			
				  
         
?>