<?php
	$host="localhost";
	$user="root";
	$pass="";
	$database="petsclinic";
	$connection = mysqli_connect($host, $user,$pass )or die("Connection Failed"); // Establishing Connection with Server
    $db = mysqli_select_db($connection,$database) or die ('Could not select ' . $database . ': ' . mysqli_error($db)); // Selecting Database
?>

