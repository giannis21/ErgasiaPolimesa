<?php
$conn= mysqli_connect("localhost","id3653676_localhost", "lefteris"); //σύνδεση με την mysql
		if (!$conn)
		{
		die('Η σύνδεση απέτυχε: ' . mysql_error());
		}
		mysqli_select_db($conn,"id3653676_polimesa"); //επιλογή της ΒΔ (mydb)
?>