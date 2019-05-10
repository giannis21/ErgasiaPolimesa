<?php 
include "conndb.php";echo "<div class='chatboox'>";
$result1 = mysqli_query($conn,"SELECT * FROM logs ORDER by id DESC");
while($extract = mysqli_fetch_array($result1)){
 echo "<div class='msg' align='left'>". $extract['name'].": ". $extract['message']. "</div><br>";
}
echo "</div>";
?>﻿