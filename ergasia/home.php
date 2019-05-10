<!DOCTYPE HTML>
<?php session_start(); ?>
<html>
  <head>
    <link rel = "stylesheet" type="text/css" href ="css/general.css"/>
		<link rel = "stylesheet" type="text/css" href ="css/albums.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<div class="not_resizible">
	<div class="row">
  <div class="left-menu">
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
    <h2>From Scratch
    <p>Michael Joseph Jackson (August 29, 1958 – June 25, 2009) was an American singer, 
	songwriter, and dancer. Dubbed the "King of Pop", he was one of the most popular entertainers in the world,
	and was the best-selling music artist at the time of his death. Jackson's contributions to music, dance, and fashion
	along with his publicized personal life made him a global figure in popular culture for over four decades.
    </p>
	<p>
	The eighth child of the Jackson family, Michael made his professional debut in 1964 with his elder brothers Jackie,
	Tito, Jermaine, and Marlon as a member of the Jackson 5. He began his solo career in 1971 while at Motown Records. 
	In the early 1980s, Jackson became a dominant figure in popular music. His music videos, including those of "Beat It", 
	"Billie Jean", and "Thriller" from his 1982 album Thriller, are credited with breaking racial barriers and transforming 
	the medium into an art form and promotional tool. The popularity of these videos helped bring the television channel
	MTV to fame. Jackson's 1987 album Bad spawned the U.S. Billboard Hot 100 number-one singles "I Just Can't Stop Loving You", 
	"Bad", "The Way You Make Me Feel", "Man in the Mirror", and "Dirty Diana", becoming the first album to have five number-one
	singles in the nation. He continued to innovate with videos such as "Black or White" and "Scream" throughout the 1990s,
	and forged a reputation as a touring solo artist. Through stage and video performances, Jackson popularized a number of
	complicated dance techniques, such as the robot and the moonwalk, to which he gave the name. His distinctive sound and 
	style has influenced numerous artists of various music genres.
	</p>
	<p>
	Thriller is the best-selling album of all time, with estimated sales of 65 million copies worldwide. Jackson's other albums,
	including Off the Wall (1979), Bad (1987), Dangerous (1991), and HIStory (1995), also rank among the world's best-selling albums.
	He is one of the few artists to have been inducted into the Rock and Roll Hall of Fame twice, and was also inducted into the 
	Songwriters Hall of Fame and the Dance Hall of Fame as the only dancer from pop and rock music. His other achievements include 
	multiple Guinness World Records including the Most Successful Entertainer of All Time,13 Grammy Awards, the Grammy
	Legend Award, the Grammy Lifetime Achievement Award, 26 American Music Awards—more than any other artist—including
	the "Artist of the Century" and "Artist of the 1980s", 13 number-one singles in the United States during his solo career—more 
	than any other male artist in the Hot 100 era—and estimated sales of over 350 million records worldwide.Jackson won hundreds 
	of awards, making him the most awarded recording artist in the history of popular music. He became the first artist in
	history to have a top ten single in the Billboard Hot 100 in five different decades when "Love Never Felt So Good" reached
	number nine in 2014.Jackson traveled the world attending events honoring his humanitarianism, and, in 2000, the 
	Guinness World Records recognized him for supporting 39 charities, more than any other entertainer.
	</p>
	<p>
	 Aspects of Jackson's personal life, including his changing appearance, personal relationships, and behavior, generated 
	 controversy. In 1993, he was accused of child sexual abuse, but the civil case was settled out of court for an undisclosed 
	 amount and no formal charges were brought. In 2005, he was tried and acquitted of further child sexual abuse allegations 
	 and several other charges after the jury found him not guilty on all counts. While preparing for his comeback concert series,
	 This Is It, Jackson died of acute propofol and benzodiazepine intoxication on June 25, 2009, after suffering from cardiac 
	 arrest. The Los Angeles County Coroner ruled his death a homicide, and his personal physician, Conrad Murray, was convicted 
	 of involuntary manslaughter. Jackson's death triggered a global outpouring of grief, and a live broadcast of his public memorial
	 service was viewed around the world. Forbes ranks Jackson the top-earning dead celebrity, with earnings of $825 million in 
	 2016, the highest yearly amount ever recorded by the publication. Jackson is also remembered for his generous philanthropy 
	 and his pioneering efforts in charitable fundraising within the entertainment industry In October 2017, Forbes announced 
	 that Jackson had topped the publication's list of top-earning dead celebrities for the fifth straight year with annual earnings of $75 million.
	</p>
	
	<p>
	
	</p>
	</h2>
  </div>
  
</div>
</div>
  </body>
</html>

