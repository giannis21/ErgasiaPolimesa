<!DOCTYPE HTML>
<?php session_start()
?>

<html>
  <head>
	


	<link rel = "stylesheet" type="text/css" href ="css/general.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/albums.css"/>
	<style>
div.gallery {
	 background: linear-gradient(to bottom right, black, #4169E1);
	border: 1px solid;
    padding: 10px;
    box-shadow: 5px 10px 18px #48D1CC;
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 160px;
	height: 250px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}
 .butt1{
		  float:left;
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
   .butt_download{
	  
	  font-size:15px;
	  border-radius:15px;
	  background: linear-gradient(to left , #4d79ff,gray);
	  text-shadow: 2px 2px #000000;
	  
      border: none;
      color: white;
	  padding: 5px 15px; 
	  cursor:pointer;
	 
	  
  }
div.desc {
    padding: 15px;
    text-align: center;
	font-size:2vh;
	color: white;
	font-weight: bold;
	text-shadow: 2px 2px #000000;
}

div.uploadf {
	 background: linear-gradient(to bottom right, black, #4169E1);
	text-shadow: 2px 2px #000000;
	box-shadow: 5px 10px 18px #48D1CC;
	background-color: #00008B;
	width:60%;
	margin-left:20%;
	border-radius:10px;
	font-size:15px;
	color:white;
}

div.photoes {
	margin-left:8%;
}

img {
    border-radius: 50%;
}
</style>
	<script src="https://code.jquery.com/jquery-1.9.0.js"></script>
	
	<script src="js files/showsongs.js"></script>
    <script src="js files/delete_images.js"></script>
<script>


	


function download_f(name_im)
{
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function(){
		 if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
		  document.getElementById('load_im').innerHTML = xmlhttp.responseText;
		 }
 }


 xmlhttp.open('GET','phpfiles/download_.php?name_im='+name_im, true);

 xmlhttp.send(); 


}

$(document).ready(function(){
	setInterval(function(){
		$("#load_im").load('phpfiles/showed_im.php')
    }, 1000);
});
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
	<div data-role="main" class="ui-content">
	<?php
	if (isset($_SESSION['username']))
	{
	echo "<h2>Upload your own image of Michael jackson:</h2>
	
	<div class='uploadf'>
	<h2>
	<form action='upload.php' method='post' id='form1' enctype='multipart/form-data'>
	Write your Description:
	<textarea id='details' name='details' value='No description' style='width:80%;' onfocus='if (this.value=='No description') this.value='''; maxlength='80' style='resize:none'> </textarea><br></br>
    Select image to upload:
    <input type='file' name='fileToUpload' id='fileToUpload' style='text-shadow: 1px 2px #000000; font-size:17px; color:white; color: 	#778899; font-weight:bold;'>
	</div>
    <h2><input type='submit' value='Upload Image' class='button' name='submit' style='font-size:17px; text-shadow: 2px 2px #000000;'> </h2>
	</h2>
	</form>";
	}

	
	?>
	
	<br></br>
	<h2>Images of Michael Jackson</h2>
	<div id='load_im'>
	    <div class='photoes'>
	    
             <?php 	
				   $result = mysqli_query($conn,"SELECT * FROM mjphotos "); 
						while($row=mysqli_fetch_array($result))
						{    $name_com=$row['name'];
									if($row['if_approved']==1 )
									{	  
 
												
													
												echo '<div class="gallery">';									//auto edo prepei na mn emfanizete
												echo "<div id='del_imm'>";
												if (isset($_SESSION['username']))
													if($_SESSION['ifadmin']==1)
													{?>
													 <input type="button"  value="delete" id='but' class='butt1' onclick="delete_im('<?php echo $name_com;?>')"/>
														<div id='dele'> </div> <?php
													
													
													}
													echo  '<a  href="phpfiles/mjphotos/'.$row['name'].'" download >';
													?>
													<input type="button"  value="download"  class='butt1' /></a>	
													<?php	
													echo '<a target="_blank" href="phpfiles/mjphotos/'.$row['name'].'"></a>';  
																							
													echo ' <img src="phpfiles/mjphotos/'.$row['name'].'" alt="mj1" width="200" height="200" >      
														 
													<div class="desc">'.$row['details'].'</div>
													</div>'; 
									 echo "</div>";
									}
						}
	 
		
	              ?>
	    </div>
	</div>
	
	
	
	</div>
  </div>
</div>

  </body>
</html>

