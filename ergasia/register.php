<!DOCTYPE html>
<html>
  <head>
	<link rel = "stylesheet" type="text/css" href ="css/reg.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/general.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/style.css"/>
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
	
	 
		
			
	<form name="form1" method="post" align='center' action="register_sql.php" style='padding-top:13%;' > <p>
		<div class='register'>
		Name:		<input type="text" name="name" required /> <p>
		Username: 	<input type="text" name="username" required /><p>
		Password: 	<input type="password" name="password" required /><p>
		Mail		<input type="text" name="email" required /> <p>
					<input type="Submit" name="Submit" value="Register">
		<span id="back"> <a href="login.php">login</text></a></span>

	</div>
	
	 </div>
    </div>
	</form>
  </body>
</html>