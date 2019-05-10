<!DOCTYPE HTML>
<?php session_start();
date_default_timezone_set('Europe/Athens');
?>

<html>
  <head>
  <link rel = "stylesheet" type="text/css" href ="css/general.css"/>
  <link rel = "stylesheet" type="text/css" href ="css/style.css"/>     <link rel = "stylesheet" type="text/css" href ="css/posts_appear.css"/>    <style>  div.comment{	  float:left;	  font-size:20px;	  background:  linear-gradient(to right, gray,#1F6095);	  box-shadow: 3px 5px 8px #1a0000;	  top:0px;	  padding:4px;	  margin-right:3px;	  border:solid;	  border-color:black;	  border-width:1px;	  text-shadow: 2px 2px #000000;	  border-radius:10px;	   }     .delete{	  font-size:17px;	  border-radius:15px;	 	  	  box-shadow: 5px 10px 18px  #48D1CC;      border: none;      color: black;	  	  cursor:pointer;	  margin:10px;  }   div.date{	  background: linear-gradient(to bottom right, black, grey);	 	  box-shadow: 3px 5px 8px black;	  margin-top:2px;	  color:white;	  margin-right:10px;	  border:solid;	  border-color:blue;	  border-width:1px;	  text-shadow: 2px 2px black;	  border-radius:10px;  }    .back1{	  float:right;	  top:0px;	  border-radius:20px;	  font-size:24px;	  color:white;	  padding-right:3px;	  padding-left:3px;	  background:linear-gradient(to bottom right, white, grey);  }    </style>
  </head>
  <body>
    <div id="allnav">    <div id="header">      <p><a>MICHAEL JACKSON</a></p>    </div>    <div class="right"></div>    <div class="left"></div>    <div class ="center"></div>    <div id="footer"></div>    <nav class="navbar">	<?php 	include 'navbar.php';	  ?>    </nav>   </div>  
      </div>
    </div>
    </div>
	</form>
	<?php    include 'conndb.php';
?>


<script src="http://code.jquery.com/jquery-1.9.0.js"></script>

<script src="js files/subcomm.js"></script>
<script src="js files/del_comm.js"></script>

</head>
<body>
<div class="row">
  <div class='left-menu'>    <?php include "sidebar.php"; ?>	<?php	if (isset($_SESSION['username']))	{	echo "<h2><a href='game.php' class='button'>Play and Win</a></h2>";	}	echo "</div><div class='column side'>";	?>    <p></p>  </div>
  <div class="column middle">

	
	 <?php      $_SESSION['postid']=$_POST['postid'];	  $postid= $_SESSION['postid'];	     $result = mysqli_query($conn,"SELECT *FROM posts  where postid='$postid' "); 		 while($row = mysqli_fetch_array($result)) //μετατροπή των στοιχείων εγγραφής σε ένα Array					{ 					  echo "<div align='center'>";					 	echo "<div class='col'><p>";										echo "<div class='comment-box'><p>";												echo "<div class='name'>Name: ". $row['name']. "</div>";												echo "<div class='name'> Date: ".$row['date']."</div><br>";												?><a href='posts.php' class='back1'><img src="phpfiles/mjphotos/back.png"  width="50" height="20"></a></h2><?php												echo "<div class='content'>". $row['content']."<br><br><br></div><br>";																					    echo "</div>";						echo "</div>";					  echo "</div>";					} 						  ?>   <div id="comments" align="center">  	    LOADING COMMENTS PLEASE WAIT...       </div>	   	   <div id="tip1">  	           </div>	 <?php	echo      "<div align='center'><form name='form1' align='center'>       <input type='hidden' name='postid' value='$postid'>    <textarea  name='message'> </textarea><br>    <a href= '#' onclick= 'submitComment()' class= 'button'> Comment </a> <br /> <br />	 	 </form></div>"  ;  	 	 ?>
	 </div>
	 
	 
	 
	 
	
</div>
</div>
</h2>

  

</body>﻿
  </body>
</html>

