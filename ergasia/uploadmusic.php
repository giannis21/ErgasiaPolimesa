<!DOCTYPE HTML>
<?php session_start();  ?>
<html>
  <head>
    <link rel = "stylesheet" type="text/css" href ="css/general.css"/>
		<link rel = "stylesheet" type="text/css" href ="css/albums.css"/>
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
	
	
<div class="row">
	
	
  <div class="left-menu">
    <?php include "sidebar.php"; ?><?php
	if (isset($_SESSION['username']))
	{
	echo "<h2><a href='game.php' class='button'>Play and Win</a></h2>";
	}echo "</div><div class='column side'>";
	?>
    <p></p>
  </div>
  
  
  <div class="column middle">
	
	<h3>
	<?php
include 'conndb.php';
$allowedExts = array("mp3"); // dhlwnoume pio extension theloume na epitrepetai
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // pairnoume to extension tou arxeiou pou epelekse o xrhsths gia upload	
$name = basename($_FILES["file"]["name"]); // pairnoume to onoma tou arxeiou mazi me to extension
$details= $_POST['details']; 


	
if ((($_FILES["file"]["type"] == "audio/mp3")) && in_array($extension, $allowedExts))
  {
		  if ($_FILES["file"]["error"] > 0)
			{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			}
		  else
			{
		    /* echo "Upload: " . $_FILES["file"]["name"] . "<br />";
			echo "Type: " . $_FILES["file"]["type"] . "<br />";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";  */

					if (file_exists("mjrecordings/" . $_FILES["file"]["name"]))
					  {
					  echo "<font color='yellow'>".$_FILES["file"]["name"] . "</font> already exists. ";
					  }
					else
					  {
							  move_uploaded_file($_FILES["file"]["tmp_name"],"mjrecordings/" . $_FILES["file"]["name"]);
							  
							   if($_SESSION['ifadmin']==1)
							  {
									 echo "Stored in: " . "<font color='yellow'>videos/" . $_FILES["file"]["name"]."</font>"; // gia na vlepeis pou apithekeuthke
							         $sql="insert into mjrec(name,details,if_approved,uploadedby) values('$name','$details','1','1')"; 
						        	mysqli_query($conn,$sql);
							  }	  
							  else
							  {       
									 echo "File named: " . "<font color='yellow'>" . $_FILES["file"]["name"]."</font> is under processing!"; // gia na vlepeis pou apithekeuthke
							         $sql="insert into mjrec(name,details,if_approved,uploadedby) values('$name','$details','0','0')"; 
							         mysqli_query($conn,$sql);
							  } 
							
					  }
			}
  }
else
  {
			echo "Upload: " . $_FILES["file"]["name"] . "<br />";
			echo "Type: " . $_FILES["file"]["type"] . "<br />";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />"; 
  echo "Invalid file";
  }
  echo "<br></br><a href='mymusic.php' class='button'>Back to My music</a>";
?>
	</h3>
	<p>
	
	</p>
	</h2>
  </div>
  
</div>
  </body>
</html>


