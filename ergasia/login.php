<!DOCTYPE html>
<html>
  <head>
     <link rel = "stylesheet" type="text/css" href ="css/general.css"/>
  </head>
  <body>
    <div id="allnav">
    <div id="header">
      <p><a>MICHAEL JACKSON</a></p>
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
   </div>  
	
	  
		
	<br><br>		
	<form name="form1" method="post" align='center' action="login_sql.php" style='padding-top:10%;'> <p>
		<div class='login'>
		Username: 	<input type="text" name="username" required /><p>
    
		Password: 	<input type="password" name="password" required /><p> 
					<input type="Submit" name="Submit" value="Login">
		<span id="back"><a href="register.php"> <font color="black">register</font> </a></span> <BR>

	</div>
	
	 </div>
    </div>
	</form>
	<?php	 if(isset($_GET['message']))
		 echo "<h1>$_GET[message]!</h1>"; 

	 ?>
  </body>
</html>