<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<head>
<title>Myles Malloy's Portfolio</title>
<!--JQUERY-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<link rel="stylesheet" href="css/styles.css">
<meta name="theme-color" content="#ff8f3b">

</head>
<?php 
	$mysqli = new mysqli("localhost","root","root","mamp_database");

	if ($mysqli->connect_error) { 
		die('Database Error');
	}
		
	$thumb_results = $mysqli->query("SELECT `title`, `hrefval` FROM `myles-portfolio`"); 

?>