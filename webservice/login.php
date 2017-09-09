<?php
	
	include_once('db_config.php');
	error_reporting(E_ALL);
	//Get the variables
	$username = isset($_GET['username']) ?
	mysql_real_escape_string($_GET['username']) : "";
	$password = isset($_GET['password']) ?
	mysql_real_escape_string($_GET['password']) : "";
		
		
	$insertstatement = 'SELECT count(*) co FROM `admin` WHERE
	username="'.$username.'" AND password="'.$password.'" ';
	
	$query123 = mysql_query($insertstatement) or
	trigger_error(mysql_error()." ".$insertstatement);
	
	while($r = mysql_fetch_array($query123)){
		extract($r);
	//echo "count star is $co";
	}
	
	$co = (int)$co;
	$customer_id = '';
	if($co == 1)
	{//user logged 
		
		$result = array();
		$result[] = array("Login successful", "status" => 1);
	}
	
	if($co != 1)
	{//user not available
		
		$result = array();
		$result[] = array("Login Failed", "status" => 0);
	}
	
	//Login code here begin
	$insertstatement = 'SELECT count(*) co FROM `register` WHERE
	username="'.$username.'" AND password="'.$password.'" ';
	
	$query123 = mysql_query($insertstatement) or
	trigger_error(mysql_error()." ".$insertstatement);
	
	while($r = mysql_fetch_array($query123)){
		extract($r);
	//echo "count star is $co";
	}
	
	$co = (int)$co;
	$customer_id = '';
	if($co == 1)
	{//user logged 
		
		$result = array();
		$result[] = array("Login successful", "status" => 1);
	}
	
	if($co != 1)
	{//user not available
		
		$result = array();
		$result[] = array("Login Failed", "status" => 0);
	}
	
	/*Output Header*/
	header('Content-type: apllication/json');
	echo json_encode($result);
?>