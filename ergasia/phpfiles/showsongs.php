<?php 
session_start();
include "conndb.php";
$album = $_REQUEST['album1'];

$result1 = mysqli_query($conn,"SELECT * FROM albums WHERE album='$album'");

while($extract = mysqli_fetch_array($result1)){

 echo "<div class='msg' align='left'>". $extract['song']. "</div><br>";
 echo "<audio controls>
  <source src='music/".$extract['song'].".mp3' type='audio/mpeg'>
Your browser does not support the audio element.
</audio>";
} 

?>﻿