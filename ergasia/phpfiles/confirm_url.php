
<?php 
include "conndb.php";
 session_start(); 
   $conf=$_REQUEST['conf'];    
   $if_del=$_REQUEST['num'];     
     
			if($if_del=='1')    //egkri8ike an einai 1
			{
				$sql2="update links set if_approved='1' where url='$conf'";
				$result = mysqli_query($conn,$sql2); //επιλογή όλων 
 
			}else 
			{
				$sql2="delete FROM links where url='$conf'";
				$result = mysqli_query($conn,$sql2); //επιλογή όλων    
			}

?>