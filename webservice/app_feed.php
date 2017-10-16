<?php

	include_once('db_config.php');
	error_reporting(E_ALL);
	//Get the variables
	
	$articleTitle = isset($_GET['art_title']) ?
	mysql_real_escape_string($_GET['art_title']) : "";
	$articleDate = isset($_GET['art_date']) ?
	mysql_real_escape_string($_GET['art_date']) : "";
	$articleImageLocation = isset($_GET['art_image_location']) ?
	mysql_real_escape_string($_GET['art_image_location']) : "";

	$response = array();
	$selectStatement = 'SELECT art_title , art_date, art_image_location FROM `tbl_validated`';
	$queryFeed = mysql_query($selectStatement) or
		trigger_error(mysql_error()." ".$selectStatement);
	while($r = mysql_fetch_array($queryFeed)){
			extract($r);}
	}
	$response[] = array("art_title" => $articleTitle, "art_date" => $articleDate, "art_image_location" => $articleImageLocation);
	header('Content-type: application/json');
	echo json_encode($response);
	
		
?>