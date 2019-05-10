<?php
$conn= mysqli_connect("localhost","root", ""); //σύνδεση με την mysql
		if (!$conn)
		{
		die('Η σύνδεση απέτυχε: ' . mysql_error());
		}
		mysqli_select_db($conn,"polimesa"); //επιλογή της ΒΔ (mydb)
?>