<?php echo "<h2><a href='Albums.php' class='button'>Albums / Your records</a></h2>
	<h2><a href='videos.php' class='button'>Videos</a></h2>
	<h2><a href='images.php' class='button'>Images</a></h2>
	<h2><a href='links.php' class='button'>Links</a></h2>";
	
	if (isset($_SESSION['username']))
	{
	echo "<h2><a href='ranking.php' class='button'>Ranking</a></h2>";
	}
	
	?>