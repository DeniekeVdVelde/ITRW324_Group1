<?php
	include_once('db_config.php');
	error_reporting(E_ALL);
	//Get the variables

	$username = isset($_POST['username']) ?
	mysqli_real_escape_string($conn,$_POST['username']) : "";
	$password = isset($_POST['password']) ?
	mysqli_real_escape_string($conn,$_POST['password']) : "";
	$confirmpassword = isset($_POST['confirmpassword']) ?
	mysqli_real_escape_string($conn,$_POST['confirmpassword']) : "";
	$email = isset($_POST['email']) ?
	mysqli_real_escape_string($conn,$_POST['email']) : "";
	//

	//echo $username;
	//echo $password;
	//echo $confirmpassword;
	//echo $email;
	
	//Register code here begin
	$insertstatement = 'INSERT INTO 
	`register`(`id`,`username`,`password`,`email`) VALUES 
	(NULL,"'.$username.'","'.$password.'","'.$email.'")';
	$query123 = mysqli_query($conn,$insertstatement);
	
	echo "$query123";
	//Register code ends

?>
