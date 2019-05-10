<?php  include "conndb.php";  
	if (isset($_SESSION['username']))
	{
	?>
		<p id="about"><a href="home.php">Home</a></p>       <?php   $result = mysqli_query($conn,"SELECT * FROM mjphotos");			   $result_v = mysqli_query($conn,"SELECT * FROM videos");			   $result_url = mysqli_query($conn,"SELECT * FROM links");			   $result_rec = mysqli_query($conn,"SELECT * FROM mjrec"); 	           $flag=0;			   $flagv=0;			   $flag_url=0;			   $flag_rec=0;						while($row=mysqli_fetch_array($result))						{   if($row['if_approved']==0) $flag=1; 						}												while($row1=mysqli_fetch_array($result_v))						{   if($row1['if_approved']==0) $flagv=1; 						}						while($row2=mysqli_fetch_array($result_url))						{   if($row2['if_approved']==0) $flag_url=1; 						}						while($row3=mysqli_fetch_array($result_rec))						{   if($row3['if_approved']==0) $flag_rec=1; 						}						if($flag==1 || $flagv==1 || $flag_url==1 || $flag_rec==1)						{ 					        if($_SESSION['ifadmin']==1)						        echo "<p id='about'><a href='profile.php'>Profile(1)</a></p>";				    
						    else						        echo "<p id='about'><a href='profile.php'>Profile</a></p>";						}else								echo "<p id='about'><a href='profile.php'>Profile</a></p>";?>
		<p id="about"><a href="offic_chat.php">Chat</a></p>
		<p id="about"><a href="posts.php">Forum</a></p>
		<p id="about"><a href="logout.php">Logout</a></p>				 <div class="p" style="float:right;font-size:20px; color:'white'; margin-right:3px;margin-top:3px;background:linear-gradient(to left , white,gray); padding-left:3px;padding-right:3px; border-radius:10px;" >user: <?php echo $_SESSION['name']?></div>				<script>		var imageSources = ['images/m1.jpg','images/m2.jpg','images/m4.png']		var index = 0;		setInterval (function(){		  if (index === imageSources.length) {			index = 0;		  }		 var cur=imageSources[index];		// document.body.style.backgroundImage = "url("+cur+")";		// document.body.style.backgroundSize="cover";		  index++;		} , 3000);		</script>     <?php 
	 
	}
	else
	{
		?>
		<p id="about"><a href="home.php">Home</a></p>
		<p id="about"><a href="login.php">Login</a></p>
		<p id="about"><a href="register.php">Register</a></p>				<p id="about"><a href="">About</a></p>
		<!--<p id="about"><a href="#">About</a></p> -->
		<?php
	}
?>