<?php 
	if (isset($_SESSION['username']))
	{
	?>
		<p id="about"><a href="home.php">Home</a></p>
						    else
		<p id="about"><a href="offic_chat.php">Chat</a></p>
		<p id="about"><a href="posts.php">Forum</a></p>
		<p id="about"><a href="logout.php">Logout</a></p>
	 
	}
	else
	{
		?>
		<p id="about"><a href="home.php">Home</a></p>
		<p id="about"><a href="login.php">Login</a></p>
		<p id="about"><a href="register.php">Register</a></p>
		<!--<p id="about"><a href="#">About</a></p> -->
		<?php
	}
?>