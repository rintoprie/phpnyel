<?php
	$db_host = "127.0.0.1";
	$db_name = "phpnyeldb";
	$db_user = "root";
	$db_pass = "123";

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name)or die ('Can not connect to the database: ' . mysql_error());
	mysqli_query($conn, "SET CHARACTER SET utf8");
?>
		