

<!DOCTYPE html>
<html>
  <head>
	<link rel = "stylesheet" type="text/css" href ="css/general.css"/>
	<style>
	h1 {

	 background-color:grey;

	 opacity: 0.8;

	 color:white;

	 text-align:center;

	 border:2px solid Tomato;

	 padding:0px 0px 0px 30px;

	 outline: 1px solid red;

    /* Move the outline 15px away from the border */

    outline-offset: 10px;
	margin-left:20em;
	margin-right:20em;

 }


.loader {
  border: 16px solid #30353C;
  border-radius: 50%;
  border-top: 16px solid #F7BE3C;
  width: 110px;
  height: 110px;
    position: absolute;
    left: 50%;
    top: 35%;
  -webkit-animation: spin 1s linear infinite;
  animation: spin 1s linear infinite;
  text-align:center;
}
myDiv {
  
  text-align: center;
}
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

	</style>
  </head>
  <body>
    <div id="header">
      <p><a >MICHAEL JACKSON</a></p>
    </div>
    <div class="right"></div>
    <div class="left"></div>
    <div class ="center"></div>
    <div id="footer"></div>
    <nav class="navbar">
      <?php 
	include 'navbar.php';
	  ?>
    </nav>
	
	 
		<div class ="center">
	<?php
		header('Cache-Control: no cache');
		
		$password=$_POST["password"];
		$name=$_POST["name"];
		$username=$_POST["username"];
		$email=$_POST["email"];
		

		include "conndb.php";
		$result = mysqli_query($conn,"SELECT password,username,name FROM users  where username='$username' and password='$password'"); 
		while($row = mysqli_fetch_array($result)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
					{
						if($username==$row['username']) //elenxo an to username uparxei hdh
						{
					   	    echo "<h1>Username already exists.<br> Please choose another one! <br> </h1>";
		   
							header( "Refresh:3: url=register.php", true, 303);
							die(); 
							
						}        
						
					} 
		$sql="insert into users(name,username,password,email,ifadmin) values('$name','$username','$password','$email',0);" ;
		$result = mysqli_query($conn,$sql); //επιλογή όλων 
/* 		if(!$result)
		{die('i eggrafh apetixe'.mysql_error());} */
		mysqli_close($conn); //των εγγραφών από τον πίνακα persons
		echo "<myDiv><div class='loader' ></div> </myDiv>"; 
		   
		   header("Refresh:3; url=login.php", true, 303);
		   die(); 
		   ?>
		   </div>
  </body>
</html>
