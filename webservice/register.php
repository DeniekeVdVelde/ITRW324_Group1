<?php
	include_once('db_config.php');
	error_reporting(E_ALL);
	//Get the variables
	$username = isset($_GET['username']) ?
	mysql_real_escape_string($_GET['username']) : "";
	$password = isset($_GET['password']) ?
	mysql_real_escape_string($_GET['password']) : "";
	$email = isset($_GET['email']) ?
	mysql_real_escape_string($_GET['email']) : "";
	//Register code here begin
	$insertstatement = 'INSERT INTO 
	`register`(`id`,`username`,`password`,`email`) VALUES 
	(NULL,"'.$username.'","'.$password.'","'.$email.'")';
	$query123 = mysql_query($insertstatement);
	
	
	echo "$query123";
	//Register code ends

?>