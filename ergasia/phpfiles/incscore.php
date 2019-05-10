<?php
	session_start();
	//edw ginetai h allagh sth vash sto post_count. o kwdikas einai gnwstos pro pollou
	include "conndb.php";
	
	$username=$_SESSION['username'];
	
	$postcs="select * from users where username='$username'";
	$res=mysqli_query($conn,$postcs);
	$pedia=mysqli_fetch_array($res);
	$postcount=$pedia['post_count'];
	$postcount=$postcount-1;
	
	$sql="Update users SET post_count='$postcount' where username='$username' ";
	$result = mysqli_query($conn,$sql); 
	 
	 
	$points="update points_user set points=points+10 where user='$_SESSION[name]'";
	$res=mysqli_query($conn,$points);
	  
	
?>