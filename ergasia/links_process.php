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
	font-size:1.8vh;
	color:white;
}

div.photoes {
	margin-left:8%;
}

img {
    border-radius: 50%;
}
</style>
<script>
function validate()
{
	
	var x=document.forma;
	var url=x.link.value;
	    var request = false;
        if (window.XMLHttpRequest) {
                request = new XMLHttpRequest;
        } else if (window.ActiveXObject) {
                request = new ActiveXObject("Microsoft.XMLHttp");
        }

        if (request) {
                request.open("GET", url);
                if (request.status == 200) { return true; }
        }

        return false;

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
                 $counter_url=0;
				 $url=$_POST["link"];
				 $file = $url;
				 $file_headers = @get_headers($file);
				 if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
					echo "<div align='center' style='font-size:40px;color:white;'>the link is not valid..please try again!</div>";
				 }else	
					{
							 $result1 = mysqli_query($conn,"SELECT * FROM links where url='$url'");
							 while($extract = mysqli_fetch_array($result1)){
								  $counter_url++;
							   }
							  if($counter_url==0)
							  {
										if($_SESSION['ifadmin']=='0')
										{
											echo "<div align='center' style='font-size:40px;color:white;'>wait this to be approved!</div>";
											
											$sql="INSERT INTO `links` VALUES ('$_SESSION[name]','$url', '0')";
											mysqli_query($conn,$sql);
											
										}else{
											echo "<div align='center' style='font-size:40px;color:white;'>the link was registered!</div>";
											$sql="INSERT INTO `links` VALUES ('$_SESSION[name]','$url', '1')";
											mysqli_query($conn,$sql);
										}
							  } else
						                echo "<div align='center' style='font-size:40px;color:white;'>the link has already been added!</div>";
					} 
					echo "<div align='center'><br></br><a href='links.php'  class='button'>Back to links</a></div>";
					
	}

	
	?>
	
	
	
	
	</div>
  </div>
</div>

  </body>
</html>

