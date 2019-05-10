<!DOCTYPE HTML>
<?php session_start()
?>

<html>
  <head>
  <link rel = "stylesheet" type="text/css" href ="css/general.css"/>
  </head>
  <body>
    <div id="allnav">    <div id="header">      <p><a>MICHAEL JACKSON</a></p>    </div>    <div class="right"></div>    <div class="left"></div>    <div class ="center"></div>    <div id="footer"></div>    <nav class="navbar">	<?php 	include 'navbar.php';	  ?>    </nav>   </div>  
     
      </div>
    </div>
    </div>
	</form>
	<?php
?>

<link rel = "stylesheet" type="text/css" href ="css/chat.css"/>
<script src="https://code.jquery.com/jquery-1.9.0.js"></script>
<script src="js files/subchat.js"></script>
<script> $(document).ready(function(){    $('#text').keypress(function(e){      if(e.keyCode==13)      $('#click').click();    });});</script>
</head>
<body>
<div class="row">
  <div class="left-menu">    <?php include "sidebar.php"; ?>	<?php	if (isset($_SESSION['username']))	{	echo "<h2><a href='game.php' class='button'>Play and Win</a></h2>";	}	echo "</div><div class='column side'>";	?>    <p></p>  </div>
  <div class="column middle">
<form name = "form1" align="center">
<h2>
Your Message: <br /> <textarea rows='1' id='text' name="msg" style = "width:400px; height: 50px; resize:none"> </textarea> <br />
<a href= "#" id='click' onclick= "submitChat()" class= "button"> Send </a> <br /> <br />
<div id="chatlogs" align="center"> 
<?php include "conndb.php";$result1 = mysqli_query($conn,"SELECT * FROM logs ORDER by id DESC");echo "<div class='chatboox' >";while($extract = mysqli_fetch_array($result1)){ echo "<div class='msg' align='left'>". $extract['name'].": ". $extract['message']. "</div><br>";}echo "</div>";?>﻿
</div>
</div>
</div>
</h2>

  

</body>﻿
  </body>
</html>

