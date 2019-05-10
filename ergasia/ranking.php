<!DOCTYPE HTML>
<?php session_start()
?>

<html>

  <head>
    <link rel = "stylesheet" type="text/css" href ="css/general.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/style.css"/>

	<style>

  .notification-box{
	font-size:20px;
	box-shadow: 0px 10px 18px #00FFFF;
	color:white;
	width:100%;
    
	padding-bottom:4px;
	margin-bottom:5px;
	background:linear-gradient(to left , black,gray);
	border-radius:15px;

}
  div.not_content{
	  background: linear-gradient(to bottom right, black, gray);
	  overflow-wrap: break-word;
	  font-size:25px;
	  box-shadow: 3px 5px 8px #00FFFF;
	  top:0px;
	  margin-right:3px;
	  margin-bottom:20px;
	  padding:5px;
	  border:solid;
	  border-style: dotted;
	  border-color:gray;
	  text-shadow: 2px 2px #000000;
	  border-radius:40px;
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
	} echo "</div><div class='column side'>";
	include "conndb.php";
	?>
    <p></p>
  </div>
  <div class="column middle">

	<?php
   if (isset($_SESSION['username']))
      	{
		 	header('Cache-Control: no cache');  
	     
		   $name=$_SESSION["name"];
		   
		 
                $counter=1;
				 echo "<div align='center'; style='font-size:40px;color:white; box-shadow: 5px black;'>Statistics of the game--Top 10</div><br>";
				    
							 echo "<div class='notification-box'>";
									 $result4 = mysqli_query($conn,"SELECT *from points_user where points!='0' order by points DESC");      //perno to onoma ths eikonas tou current user
									 
									  while($row2=mysqli_fetch_array($result4))
									  {   
										  echo "<div class='not_content'> ".$counter."th:   ".$row2['user']. "--------Points: ". $row2['points']."<br></div>";
										  if($counter>10)
											  break;
										   $counter++;
									  }
									 
								
		      
	          
			
									
		    
		
		  
	    
	       
          
		  
		  
	}
	?>
	
  </div>
  
</div>


  </body>
</html>

