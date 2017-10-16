<?php

	include_once('config.php');
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
	$row = mysqli_fetch_array(mysqli_query($con,$selectStatement));
	$articleTitle = $row[0];
	$articleDate = $row[1];
	$articleImageLocation = $row[2];
	
	$response[] = array("art_title" => $articleTitle, "art_date" => $articleDate, "art_image_location" => $articleImageLocation);
	header('Content-type: application/json');
	echo json_encode($response);
	
		
?>