<?php 
session_start();
if (isset($_SESSION['username'])) {
	$_SESSION['msg']="you must log in first to use these page";
	header("location: login.php");
}
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location:login.php")
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Home -page</title>
 </head>
 <body>
 <?php
if(isset($_SESSION['success'])):
 ?>
 </body>
 </html>