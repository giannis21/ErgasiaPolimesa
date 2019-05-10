

<?php

include "conndb.php";

session_start();

// emfanish comments
  $post_id=$_REQUEST['postid'];

		
                        $sql3="SELECT * FROM comments where postid='$post_id';" ;      //emfanish comments tou ka8e post
						 $result1 = mysqli_query($conn,$sql3); //επιλογή όλων 
						if(!$result1)
						 {die('i eggrafh apetixe'.mysql_error());}

						while($row1 = mysqli_fetch_array($result1))

						{     

							echo "<div class='comment-box5'>";
									   echo "<div class='comment' >".$row1['name'].": ". $row1['message']."</div><br><br><br>";					   
									   echo "<div class='date'>".$row1['date']."<br></div>";
							echo "</div>";
								
						} 		

	
	
			                                                                                


	


?>