
<?php 
include "conndb.php";
 session_start(); 
   $conf=$_REQUEST['conf'];    
   $if_del=$_REQUEST['num'];     
     
			if($if_del=='1')    //egkri8ike an einai 1
			{
				$sql2="update mjrec set if_approved='1' where name='$conf'";
				$result = mysqli_query($conn,$sql2); //επιλογή όλων 
 
			}else 
			{
				$sql2="delete FROM mjrec where name='$conf'";
				$result = mysqli_query($conn,$sql2); //επιλογή όλων    
				$file = "../mjrecordings/".$conf;
				unlink($file);
			}

?>