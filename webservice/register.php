<?php
	include_once('db_config.php');
	error_reporting(E_ALL);
	//Get the variables

	$username = isset($_POST['username']) ?
	mysql_real_escape_string($_POST['username']) : "";
	$password = isset($_POST['password']) ?
	mysql_real_escape_string($_POST['password']) : "";
	$confirmpassword = isset($_POST['confirmpassword']) ?
	mysql_real_escape_string($_POST['confirmpassword']) : "";
	$email = isset($_POST['email']) ?
	mysql_real_escape_string($_POST['email']) : "";
	//
	//Register code here begin
	$insertstatement = 'INSERT INTO 
	`register`(`id`,`username`,`password`,`email`) VALUES 
	(NULL,"'.$username.'","'.$password.'","'.$email.'")';
	$query123 = mysql_query($insertstatement);
	
	echo "$query123";
	//Register code ends

?>