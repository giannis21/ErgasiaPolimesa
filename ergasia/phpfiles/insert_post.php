<?php
date_default_timezone_set('Europe/Athens');
session_start();
include "conndb.php";
$userid=$_SESSION['userid'];
$content=$_GET['message'];			  
$name=$_SESSION['name'];   

?>