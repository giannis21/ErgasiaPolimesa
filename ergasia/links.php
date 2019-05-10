<!DOCTYPE HTML>
<?php session_start()
?>

<html>
  <head>
	

     
	<link rel = "stylesheet" type="text/css" href ="css/general.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/albums.css"/>
	<style>
  .notification-box{
	font-size:20px;
	box-shadow: 0px 10px 18px #00FFFF;
	color:white;
	width:100%;
    opacity:0.9;
	padding-bottom:4px;
	margin-bottom:5px;
	background:linear-gradient(to left , black,gray);
	border-radius:15px;

}
  div.not_content{
	  background: linear-gradient(to bottom right, #4169E1, black);
	  overflow-wrap: break-word;
	  font-size:25px;
	  box-shadow: 3px 5px 8px #00FFFF;
	  top:0px;
	  color:white;
	  margin-right:3px;
	  margin-bottom:20px;
	  margin-top:10px;
	  padding:5px;
	  border:solid;
	  border-style: dotted;
	  border-color:gray;
	  text-shadow: 2px 2px #000000;
	  border-radius:40px;
  }
   .butt{
		 float:left;
	  font-size:15px;
	  border-radius:15px;
	  background: linear-gradient(to bottom right, black, #4169E1);
	  text-shadow: 2px 2px #000000;
	  box-shadow: 5px 10px 18px  #48D1CC;
      border: none;
      color: white;
	  margin-right:3px;
	  padding: 5px 15px; 
	  cursor:pointer;
	 
	  
  }
</style>
<script src="js files/confirm_delete_url.js"></script>
<script>
function validate()
{
	
    	var x=document.forma;
	    var url=x.link.value;
	    if(url=="")
		{    alert("put a link first");
             return false;
		}
        else
	         return true;
		 
}
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
	echo "<div align='center' style='font-size:30px;color:white; text-shadow: 2px 2px 4px #000000;'>enter your own link related to Michael jackson!</div>";
	 ?>
	
	<h2>
<form method='post' name='forma' action='links_process.php' onsubmit='return validate()'>
  
  <input type="text" name="link" style='width:60%;padding-bottom:10px; margin-bottom:10px;font-size:20px;color:black;' placeholder='paste the link here'><br>

  <input type="submit" class='button' value="Submit" style='padding:7px;font-size:20px;'>
  
</form> 
 
	</h2><?php
	 }

		$result1 = mysqli_query($conn,"SELECT * FROM links where if_approved='1'");
		echo "<div class='notification-box'>";
		while($extract = mysqli_fetch_array($result1)){
				if (isset($_SESSION['username']))
				 if($_SESSION['ifadmin']=='1')
				 {
						 ?> <input type="button"  value="delete" class='butt' onclick="confirm_url('<?php echo $extract['url'];?>','0'),refresh_page()"><br><?php
					   
				 }
				  echo "<div align='left' class='not_content'><font color='yellow'>". $extract['name'].":</font> <a href=". $extract['url']. " target='_blank'><u>".$extract['url']."</u></div><br>";
				}
				echo "</div>";
	 
	
	
	
	?>
	
	
	
	
	</div>
  </div>
</div>

  </body>
</html>

