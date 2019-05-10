<!DOCTYPE HTML>
<?php session_start()
?>

<html>

  <head>
    <link rel = "stylesheet" type="text/css" href ="css/general.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/chat.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/style.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/posts_appear.css"/>
	<link rel = "stylesheet" type="text/css" href ="css/videos.css"/>
	<style>
	

	  .button_not{
	  font-size:27px;
	  border-radius:15px;
	  background: linear-gradient(to bottom right, black, gray);
	  text-shadow: 2px 2px #000000;
	  box-shadow: 5px 10px 18px  #48D1CC;
      border: none;
	  padding:5px;
	  top=0px;
	  float:right;
      color: white;
	  padding: 5px 15px; 
	  cursor:pointer;
	  
	  
	  
  }
  .notification-box{
	text-align:center;
	box-shadow: 0px 10px 18px #00FFFF;
	color:white;
	width:100%;
    
	padding-bottom:4px;
	margin-bottom:5px;
	background:linear-gradient(to left , black,gray);
	border-radius:15px;

}
  div.not_content{
	  background: linear-gradient(to bottom right, gray, black);
	  overflow-wrap: break-word;
	  font-size:25px;
	  box-shadow: 3px 5px 8px #00FFFF;
	  top:0px;
	  margin-right:3px;
	  margin-bottom:20px;
	  padding:5px;
	  border:solid;
	  border-color:black;
	  border-style:dashed;
	  text-shadow: 2px 2px #000000;
	  border-radius:40px;
  }
  div.prof{
	  background: linear-gradient(to bottom right, blue, grey);
	  
	  box-shadow: 3px 5px 8px #00FFFF;
	  top:0px;
	  margin-right:3px;
	  
	  border:solid;
	  border-color:black;
	  border-width:1px;
	  text-shadow: 2px 2px #000000;
	  border-radius:40px;
  }
    div.comment{
	  float:left;
	  font-size:20px;
	  background:  linear-gradient(to right, gray,#1F6095);
	  box-shadow: 3px 5px 8px #1a0000;
	  top:0px;
	  padding:4px;
	  margin-right:3px;
	  border:solid;
	  border-color:black;
	  border-width:1px;
	  text-shadow: 2px 2px #000000;
	  border-radius:10px;
  }
    
     .butt1{
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
   div.date{
	  background: linear-gradient(to bottom right, black, grey);
	 
	  box-shadow: 3px 5px 8px black;
	  
	  
	  font-size:20px;
	  border:solid;
	  border-color:black;
	  border-width:1px;
	  text-shadow: 2px 2px black;
	  border-radius:10px;
  }
  
  
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
 .butt2{
	  float:left;
	  font-size:15px;
	  border-radius:15px;
	  background: linear-gradient(to left , #4d79ff,gray);
	  text-shadow: 2px 2px #000000;
	  margin-right:3px;
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

div.load_im{
	display: inline-flex;
	flex-wrap:wrap;
}

div.gal{
	
}

img {
    border-radius: 50%;
}
</style>
<script src="js files/show_comm.js"></script>
<script src="js files/confirm_delete_images.js"></script>
<script src="js files/confirm_delete_url.js"></script>
<script src="js files/confirm_delete_music.js"></script>
<script src="js files/confirm_delete_videos.js"></script>
<script src="js files/delete_videos.js"></script>
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

<script>
/* $(document).ready(function(){
	setInterval(function(){
		$("#load_prof_im").load('phpfiles/profile_showed_im.php')
    }, 1000);
}); */

function delete_notification(){ 
var testid = document.getElementById('notific').innerHTML;

if (testid!='')
{
	document.getElementById('notific').innerHTML = '';
}


 var xmlhttp = new XMLHttpRequest();
 
	 xmlhttp.onreadystatechange = function(){

		 if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
		  document.getElementById('dele').innerHTML = xmlhttp.responseText;
		 }

	 }


 

 xmlhttp.open('GET','phpfiles/delete_notifications.php', true);

 xmlhttp.send(); 

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
	       // $password=$_POST["password"];
		   $name=$_SESSION["name"];
		   $username=$_SESSION["username"];
		   $email=$_SESSION["email"];
		   echo "<h1>";
             if($_SESSION['ifadmin']==0)
			   { 
 		          $flag=0;
				  $counter=0;
				 
				       echo "<div id='notific'>"; 								//bazo id etsi oste me to patima to0 koumpiou na to kano keno to sigkekrimeno div
							 echo "<div class='notification-box'>";
									 $result4 = mysqli_query($conn,"SELECT name,orderby FROM notifications where userid='$_SESSION[userid]' order by orderby");      //perno to onoma ths eikonas tou current user
									  while($row2=mysqli_fetch_array($result4))
									  {   
										  if($row2['orderby']==0)
										    echo "<div class='not_content'> image named <font color='yellow'> ".$row2['name']." </font>approved</div>";  
										  else
										    echo "<div class='not_content'> video named <font color='yellow'> ".$row2['name']." </font>approved</div>";
										  
										   $counter++;						//exo enan counter gia na do o pinakas exei eggrafes
										   if($counter>0)					//an exei esto kai mia eggrafh emfanizi to koumpi kai kleinei to div(mono an kleisei to div emfanizete to box)
											 $flag=1;
									  }
									  if($flag==1)
									  {
										// echo "</div>";
										 
										 echo "<div align='center'><input type='button' id='but_not' value='X' class='button_not' onclick='delete_notification()'></div><br>"; 
										 echo "</div><br>";
									  }
									  else
									  {}
				              echo "</div>";
				      
	          }    
			echo "<div class='prof'>Name: ". $name. "</div><br>";
			echo "<div class='prof'>username: ". $username. "</div><br>";
			
			echo "<div class='prof'>Email: ". $email."</div><br>";
			echo "<div class='prof'>My posts: </div><br><br>";								
		    
		
		  
	     $result = mysqli_query($conn,"SELECT *FROM posts  where userid='$_SESSION[userid]' "); 
		 while($row = mysqli_fetch_array($result)) //μετατροπή των στοιχείων εγγραφής σε ένα Array
			{ $post_id=$row['postid'];
					  echo "<div align='center'>";
					 	echo "<div class='col'><p>";
										echo "<div class='comment-box4'><p>";
											//	echo "<div class='prof1'>Name: ". $row['name']. "<br></div>";
												echo "<div class='prof1'> Date: ".$row['date']."</div><br>";
												
												echo "<div class='content1'>". $row['content']."<br><br><br></div><br>";
												
									    echo "</div>";
						echo "</div>";
					  echo "</div>";
					
					 ?>
					 <input type="button"  value="view comments" class='butt1' onclick="show_comment('<?php echo $post_id;?>')"><br>
					 <div id='<?php echo $post_id;?>' > </div>
				   <?php  //echo "<div id='comm_profile' > </div>";
					  
					 
						
		  } 
		  
		  if($_SESSION['ifadmin']==1)
			{    
	       	    $counter1=0;
		        $result10 = mysqli_query($conn,"SELECT * FROM links where if_approved='0'");
		        while($extract = mysqli_fetch_array($result10)){
				$counter1++;}
					
				if($counter1>0)
				{      echo "<br><div class='prof'>links to be approved: </div>";
						$result1 = mysqli_query($conn,"SELECT * FROM links where if_approved='0'");
						echo "<br><br><div class='notification-box'>";
											while($extract = mysqli_fetch_array($result1)){
											 ?> <input type="button"  value="confirm" class='butt1'  onclick="confirm_url('<?php echo $extract['url'];?>','1'),refresh_page()">
												<input type="button"  value="delete" class='butt1' onclick="confirm_url('<?php echo $extract['url'];?>','0'),refresh_page()"><br><?php
											 
											 echo "<div align='left' class='not_content'><font color='white'>". $extract['name']."</font>: <a href=". $extract['url']. " target='_blank'>".$extract['url']."</a></div>";
											}
				}
				
				
		   
		        $counter2=0;
		        $result10 = mysqli_query($conn,"SELECT * FROM mjrec where if_approved='0'");
		        while($extract = mysqli_fetch_array($result10)){
				$counter2++;}
					
				if($counter2>0)
				{	echo "<br><div class='prof'>Records to be approved: </div>";				
					$result10 = mysqli_query($conn,"SELECT * FROM mjrec where if_approved='0'");
					echo "<br><div class='notification-box'>";
					while($extract = mysqli_fetch_array($result10)){
					 ?> <input type="button"  value="confirm" class='butt1'  onclick="confirm_music('<?php echo $extract['name'];?>','1'),refresh_page()">
						<input type="button"  value="delete" class='butt1' onclick="confirm_music('<?php echo $extract['name'];?>','0'),refresh_page()"><br><?php
					 
					 echo "<div align='left' class='not_content'><font color='white'>". $extract['name'];
					 echo "</div>";
					}
		        }
				echo "<div id='dele1'></div>";
		         $result9 = mysqli_query($conn,"SELECT *FROM mjphotos where if_approved='0' && uploaded_by='0'");
			      while($row8 = mysqli_fetch_array($result9))
		          { if (!empty($row8)) 
					   echo "<br><div class='prof'>images to be approved: </div><br><br>";
					    break;
				  }
				   $result1 = mysqli_query($conn,"SELECT *FROM mjphotos where if_approved='0' && uploaded_by='0'");
				   ?> <div class='load_im'> <?php
					while($row1=mysqli_fetch_array($result1))
					{  
					         

									  echo "<div id='load_prof_im' class='gal'>";
											   echo '<div class="gallery">';									//auto edo prepei na mn emfanizete
												
												?>
												 <input type="button" class='butt2' value="confirm"  id='b1' onclick="confirm_im('<?php echo $row1['name'];?>'),refresh_page()"/>
												 <input type="button" class='butt2' value="delete" id='b2' onclick="delete_im('<?php echo $row1['name'];?>'),refresh_page()"/>
													<div id='dele'> </div> <?php
												
												echo '<a target="_blank" href="phpfiles/mjphotos/'.$row1['name'].'">         
												 <img src="phpfiles/mjphotos/'.$row1['name'].'" alt="mj1" width="200" height="200">      
												</a>
												<div class="desc">'.$row1['details'].'</div>
												</div>'; 
									
						             echo "</div>";
												
					}
					?></div><?php
					
	          echo "<div id='video'>";
	          $result8 = mysqli_query($conn,"SELECT * FROM videos where if_approved='0'"); 
			  $row4 = mysqli_fetch_array($result8);
		           if (!empty($row4)) 
					   echo "<br><div class='prof'>videos to be approved: </div><br><br>";

			  $result7 = mysqli_query($conn,"SELECT * FROM videos where if_approved='0'"); 
			  while($row3 = mysqli_fetch_array($result7))
			   { 
					 echo "<div style='text-align:center'> ";
					  
						?>
						 <input type="button"  value="confirm" id='but' class='buttv' onclick="confirm_prof_video('<?php echo $row3['name'];?>'),refresh_page()"/>
						 <input type="button"  value="delete" id='but' class='buttv' onclick="delete_video('<?php echo $row3['name'];?>'),refresh_page()"/>
							<div id='dele'> </div> <?php
						
						echo '<button onclick="playPause('.$row3["video_id"].')">Play/Pause</button> 
						<button onclick="makeBig('.$row3["video_id"].')">Big</button>
						<button onclick="makeSmall('.$row3["video_id"].')">Small</button>
						<button onclick="makeNormal('.$row3["video_id"].')">Normal</button>
						<br><br>
						<video id="'.$row3["video_id"].'" width="420">
						<source src="videos/'.$row3["name"].'" type="video/mp4">
						</video>
						</div> ';
						
							echo '<h2>Details of Video:</h2><div class="details"><h3>'.$row3["details"].'<br></br></h3></div><br>';
	    
				}
		
	
	
				echo "</div>";
		echo "</div> ";	
	       
          }
		  
		  
	}
	?>
	<p>
	
	</p>
	</h2>
  </div>
  
</div>


  </body>
</html>

