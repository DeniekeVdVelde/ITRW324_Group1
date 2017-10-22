<?php
	
	include_once('db_config.php');
	error_reporting(E_ALL);
	//Get the variables
	$username = isset($_GET['username']) ?
	mysqli_real_escape_string($conn,$_GET['username']) : "";
	$password = isset($_GET['password']) ?
	mysqli_real_escape_string($conn,$_GET['password']) : "";
		
	
		
	
		$insertstatement = 'SELECT count(*) co FROM `admin` WHERE
		username="'.$username.'" AND password="'.$password.'" ';
		
		$query123 = mysqli_query($conn,$insertstatement) or
		trigger_error(mysqli_error()." ".$insertstatement);
		
		while($r = mysqli_fetch_array($query123)){
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
