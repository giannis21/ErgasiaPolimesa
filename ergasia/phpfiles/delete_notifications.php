
<?php 
include "conndb.php";
 session_start(); 
        
     
			
				$sql2="delete FROM notifications where if_approved='1'";
				$result = mysqli_query($conn,$sql2); //επιλογή όλων 

				if(!$result)

				 {die('i eggrafh apetixe'.mysql_error());} /**/
			  
					
        
?>