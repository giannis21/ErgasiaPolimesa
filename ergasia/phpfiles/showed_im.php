<?phpinclude "conndb.php";session_start();?> <div class='photoes'>	                  	<?php				   $result = mysqli_query($conn,"SELECT * FROM mjphotos"); 						while($row=mysqli_fetch_array($result))						{    $name_com=$row['name'];									if($row['if_approved']==1 )									{	 													  								echo '<div class="gallery">';									//auto edo prepei na mn emfanizete										if (isset($_SESSION['username']))											if($_SESSION['ifadmin']==1)											{?>											 <input type="button"  value="delete" id='but' class='butt1' onclick="delete_im('<?php echo $name_com;?>')"/>												<div id='dele'> </div> <?php											}											echo  '<a  href="phpfiles/mjphotos/'.$row['name'].'" download >';												?> <input type="button"  value="download"  class='butt1' />	</a>		 <?php												echo '<a target="_blank" href="mjphotos/'.$row['name'].'">';          											echo ' <img src="phpfiles/mjphotos/'.$row['name'].'" alt="mj1" width="200" height="200">      											</a>											<div class="desc">'.$row['details'].'</div>											</div>';    									}						}	 		   ?>	            	    </div>