<?php
	include_once('db_config.php');
	
	$servername = "127.0.0.1";
	$username = "rootr";
	$password = "324";
	$db_name = "test";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	mysql_select_db("$db_name") or die ("no database");

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully ";

?>