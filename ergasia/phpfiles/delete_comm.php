
<?php 
include "conndb.php";
 session_start(); 
   $cid=$_REQUEST['cid'];      
     		
			
				$sql2="delete FROM comments where postid='$_SESSION[postid]' && cid='$cid' && name='$_SESSION[name]' ";
				$result = mysqli_query($conn,$sql2); //επιλογή όλων 

				if(!$result)

				 {die('i eggrafh apetixe'.mysql_error());} /**/
			 
			
?>
