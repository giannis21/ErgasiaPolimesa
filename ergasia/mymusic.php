<!DOCTYPE HTML>
<?php session_start()
?>

<html>
  <head>
	<link rel = "stylesheet" type="text/css" href ="css/general.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/albums.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/videos.css"/>
	<script src="https://code.jquery.com/jquery-1.9.0.js"></script>
	<script src="js files/delete_music.js"></script>
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
    box-shadow: 5px 10px 18px  #48D1CC;
  
	width:60%;
	margin-left:20%;
	
}
  div.title{
	  background: linear-gradient(to bottom right, gray, black);
	  overflow-wrap: break-word;
	  font-size:25px;
	  box-shadow: 3px 5px 8px #00FFFF;
	  top:0px;
	  margin-left:20%;
	  margin-right:20%;
	  margin-bottom:5px;
	  padding:5px;
	  border:solid;
	  border-color:black;
	  border-style:dashed;
	  text-shadow: 2px 2px #000000;
	  border-radius:40px;
  }
 .butt2{
		 
	  font-size:17px;
	  border-radius:15px;
	  background: linear-gradient(to left , #4d79ff,gray);
	  text-shadow: 2px 2px #000000;
	  padding-right:0px;
      border: none;
      color: white;
	  margin-right:5px;
	  padding: 7px;
	  cursor:pointer;
	  
  }
div.display_music{
	display: inline-flex;
	flex-wrap:wrap;
}
	div.test{
		display:inline-flex;
	}
  </style>
  <script>
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
	  ?>
    </nav>
   </div>  
      </div>
    </div>
    </div>
	</form>
	<div class="row">
   <div class='left-menu'>
    <?php include "sidebar.php";
	
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
<div class='form'>
	<font color='white'>Upload your MJ recording!</font>
	<h3><div class='infor'>Max size of file: 20MB<br>Type of file: MP3</div></h3>
</div>
	<?php
	if (isset($_SESSION['username']))
	{
	echo "<div class='uploadf'>
	<h2>
	
	<form action='uploadmusic.php' method='post' enctype='multipart/form-data'>
	Write the title:<textarea id='details' name='details' value='No description' style='width:80%;' onfocus='if (this.value=='No description') this.value='''; maxlength='80'> </textarea><br></br>
	<label for='file'><span>Select file to upload:</span></label>
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
	<h3>Recordings of Michael Jackson</h3>
	
<div id='video'>
	
    <?php 
	
    $var="";
    $var1='0';	
	$counter=1;
	echo"<div id='display_music'>";
	$result = mysqli_query($conn,"SELECT * FROM mjrec where if_approved='1'"); 
	 while($row = mysqli_fetch_array($result))
	{echo"<div id='display_music'>";
		echo "<div style='text-align:center'> ";
			
			$counter++;
			 $var=$row['name'];
			
			if($_SESSION['ifadmin']==1)
				  {
					?><input type='button'  value='delete' id='but' class='butt2' onclick="delete_music('<?php echo $row['name'];?>'),refresh_page()"><?php
				    echo "<div id='dele1'> </div>"; 
				  }	
				 
		
			echo "<div style='font-size:30px;color:white;'>Title of Song:";
			echo  "</div>";				  
            echo '<div class="details"><h3>'.$row["details"].'</h3></div><br>';				  
			echo "<div class='test'><audio controls><source src='mjrecordings/".$row['name']."' type='audio/mpeg'>
					Your browser does not support the audio element.
					</audio><br><br><br>";
			    if(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE && $counter>1) 
					{	
					echo  '<a  href="mjrecordings/'.$row['name'].'" download >';
                    echo  "<div style='margin-top:0px;background-color:white;'><img src='phpfiles/mjphotos/d1.png'  width='30' height='30'></a></h2></div>";
		            echo '</div><br>';
		        	}
					
		echo "<br><br></div>";		
	} 
		
	?>

   
</div>

	</h2>
  </div>
  
</div>

  </body>
</html>

