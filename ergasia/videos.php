<!DOCTYPE HTML>
<?php session_start()
?>

<html>
  <head>
	


	<link rel = "stylesheet" type="text/css" href ="css/general.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/albums.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/videos.css"/>
	<style>

</style>
	<script src="https://code.jquery.com/jquery-1.9.0.js"></script>
	<script src="js files/showsongs.js"></script>
	<script src="js files/delete_videos.js"></script>
	<script>
$(document).ready(function(){
	setInterval(function(){
		$("#load_v").load('phpfiles/showed_videos.php')
    }, 1000);
});

// window.location.reload(true);
 function refresh_page()
 {
	 setTimeout(function () { location.reload(1); }, 100);
 }
 </script>
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
	include 'conndb.php';
	  ?>
    </nav>
   </div> 

   
    
	<div class="row">
	
  <div class="left-menu">
    <?php include "sidebar.php"; ?>
	<?php
	if (isset($_SESSION['username']))
	{
	echo "<h2><a href='game.php' class='button'>Play and Win</a></h2>";
	}echo "</div><div class='column side'>";
	?>
    <p></p>
  </div>
  
  
  <div class=" column middle ">
	<div data-role="main" class="ui-content">
	<?php
	if (isset($_SESSION['username']))
	{
	echo "<h2>Upload your own video of Michael jackson:</h2>
	<h3><div class='infor'>Max size of file: 20MB<br>Types of video allowed: MP4</div></h3>
	
	<div class='uploadf'>
	<h2>
	
	<form action='uploadv.php' method='post' enctype='multipart/form-data'>
	Write your Description:<textarea id='details' name='details' value='No description' style='width:80%;' onfocus='if (this.value=='No description') this.value='''; maxlength='80'> </textarea><br></br>
	<label for='file'><span>Select video to upload:</span></label>
	<input type='file' name='file' id='file' style='font-size:17px; text-shadow: 1px 2px #000000; color: 	#778899;  font-weight:bold;'/> 
	<br />
	</div>
	<h2><input type='submit' name='submit' value='Upload' class='button' style='font-size:17px; text-shadow: 1px 2px #000000;' /></h2>
	</form>
	
	</h2>
	
	";
	}
	
	?>
	
	
	
	<br></br>
	<h2>Videos of Michael Jackson</h2>
	
	<div id='video'>
	
    <?php 	
	
	$result = mysqli_query($conn,"SELECT * FROM videos where if_approved='1'"); 
	 while($row = mysqli_fetch_array($result))
	{  
		echo "<div style='text-align:center'> ";
		if (isset($_SESSION['username']))
		if($_SESSION['ifadmin']==1)
			{?>
			 <input type="button"  value="delete" id='but' class='buttv' onclick="delete_video('<?php echo $row['name'];?>'),refresh_page()"/>
				<div id='dele'> </div> <?php
			}
			echo  '<a  href="videos/'.$row['name'].'" download >';
           ?><input type="button"  value="download"  class='buttv' /></a>	<?php
													
			echo '<button class="buttv" onclick="playPause('.$row["video_id"].')">Play/Pause</button> 
			<button class="buttv" onclick="makeBig('.$row["video_id"].')">Big</button>
			<button class="buttv" onclick="makeSmall('.$row["video_id"].')">Small</button>
			<button class="buttv" onclick="makeNormal('.$row["video_id"].')">Normal</button>
			<br><br>
			<video id="'.$row["video_id"].'" width="420">
			<source src="videos/'.$row["name"].'" type="video/mp4">
			</video>
			</div> ';
			
				echo '<h2>Details of Video:</h2><div class="details"><h3>'.$row["details"].'<br></br></h3></div><br>';
	    
	}
		
	?>
	
	
	</div>
	<script> 

function playPause(a) { 
var myVideo = document.getElementById(a); 
    if (myVideo.paused) 
        myVideo.play(); 
    else 
        myVideo.pause(); 
} 

function makeBig(a) { 
var myVideo = document.getElementById(a); 
    myVideo.width = 560; 
} 

function makeSmall(a) { 
var myVideo = document.getElementById(a); 
    myVideo.width = 320; 
} 

function makeNormal(a) { 
var myVideo = document.getElementById(a); 
    myVideo.width = 420; 
} 
	</script> 

	

	
	
	
	
	</div>
  </div>
</div>

  </body>
</html>

