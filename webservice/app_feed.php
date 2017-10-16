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
	
	$selectStatement = "SELECT art_title , art_date, art_image_location FROM tbl_validated;";
	$rows = mysqli_query($con,$selectStatement);
	$i=-1;

	while($row = mysqli_fetch_array($rows))
	{
		$i++;
		$article[$i] = array($row['art_title'], $row['art_date'], $row['art_image_location']);
	}
	
	header('Content-type: application/json');
	echo json_encode($article);
	
		
?>