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
  <div class="column middle">
    <h3>
<?php
include 'conndb.php';

$details= $_POST['details'];
$target_dir = "phpfiles/mjphotos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$name = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - <font color='yellow'>" . $check["mime"] . ".</font>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg") {
    echo "Sorry, only JPG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
	echo "<br></br><a href='images.php' class='button'>Back to images to try again</a>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		
        
		if($_SESSION['ifadmin']==1)
		{
		  echo "The file <font color='yellow'>". basename( $_FILES["fileToUpload"]["name"]). "</font> has been uploaded.";
		  $sql="insert into mjphotos(name,details,if_approved,uploaded_by,user) values('$name','$details','1','1','$_SESSION[userid]')"; 
		  mysqli_query($conn,$sql);
		  
		}
		else
		{
			echo "The file <font color='yellow'>". basename( $_FILES["fileToUpload"]["name"]). "</font> is under processing.";
			echo "wait this to be aprroved by admin";
		    $sql="insert into mjphotos(name,details,if_approved,uploaded_by,user) values('$name','$details','0','0','$_SESSION[userid]')"; 
		    mysqli_query($conn,$sql);
			
	    }
		echo "<br></br><a href='images.php' class='button'>Back to images</a>";
    } else {
        echo "Sorry, there was an error uploading your file.";
		echo "<br></br><a href='images.php' class='button'>Back to images to try again</a>";
    }
}


?>
	</h3>
	<p>
	
	</p>
	
  </div>
  
</div>
  </body>
</html>


