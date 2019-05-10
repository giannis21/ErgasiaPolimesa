<!DOCTYPE HTML>
<?php session_start()
?>

<html>
  <head>
	<link rel = "stylesheet" type="text/css" href ="css/general.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/albums.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/style.css"/>
	<script src="https://code.jquery.com/jquery-1.9.0.js"></script>
	<script src="js files/showsongs.js"></script>
	<style>
	div.form {
	background:radial-gradient(black, gray , black);
	text-shadow: 2px 2px #000000;
	font-size: 30px;
	color: #ffbf00;
	border-radius: 40px;
	border: 1px solid;
    padding: 10px;
	border-style: dashed;
	
    box-shadow: 5px 10px 18px  #000000;
   
	width:60%;
	margin-left:20%;
	
}
  </style>
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
      </div>
    </div>
    </div>
	</form>
	<div class="row">
   <div class='left-menu'>
    <?php include "sidebar.php"; ?>
	<?php
	if (isset($_SESSION['username']))
	{
	echo "<h2><a href='game.php' class='button'>Play and Win</a></h2>";
	}
	echo "</div><div class='column side'>";
	?>
    <p></p>
  </div>
  <div class=" column middle ">
    <h2>

<div data-role="main" class="ui-content">
<?php
if (isset($_SESSION['username']))
{
			echo "<div class='form'>";
			echo "<font color='white'>Check our recordings or upload your own mp3 file of Michael Jackson!</font>";
			echo  "<h2><a href='mymusic.php' class='button'>MJ recordings</a></h2>";
			echo "</div>";
}else{
	        echo "<div class='form'>";
			echo "<font color='white'>Login so you can upload music!</font>";
			echo "</div>";
}?>
			<h3>Albums of Michael Jackson</h3>

			
			<h4>Off the wall</h4> 
			<a href="#" onclick="showSongs('Off the wall')" class="butt1">Show/hide songs</a> <br></br>
			
			<div id="Off the wall" align="center"></div>
			

			<h4>Thriller</h4>
			<a href="#" onclick="showSongs('Thriller')" class="butt1">Show/hide songs</a> <br></br>
			
			<div id="Thriller" align="center"></div>

			<h4>Dangerous</h4>
			<a href="#" onclick="showSongs('Dangerous')" class="butt1">Show/hide songs</a> <br></br>
			
			<div id="Dangerous" align="center"></div>
		</div>

	</h2>
  </div>
  
</div>

  </body>
</html>

