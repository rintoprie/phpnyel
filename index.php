<?php
	require 'bootstrap.php';
	
	if (!isset($_SESSION["login"])) {
		header("Location:login.php");
		exit;
	}

	include 'pages/header.php';
	include 'pages/home.php';
	include 'pages/footer.php';
?>	