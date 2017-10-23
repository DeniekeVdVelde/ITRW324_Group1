<?php

	include_once('config.php');
	error_reporting(E_ALL);
	
	$articleTitle = isset($_GET['art_title']) ?
	mysqli_real_escape_string($_GET['art_title']) : "";
	$articleSummary= isset($_GET['art_summary']) ?
	mysqli_real_escape_string($_GET['art_summary']) : "";
	$articleDate = isset($_GET['art_date']) ?
	mysqli_real_escape_string($_GET['art_date']) : "";
	$articleImageLocation = isset($_GET['art_image_location']) ?
	mysqli_real_escape_string($_GET['art_image_location']) : "";
	
	$selectStatement = "SELECT art_title,art_summary,art_date, art_image_location FROM `tbl_validated` ORDER BY art_date DESC";
	$result = mysqli_query($con,$selectStatement);

	while($row = mysqli_fetch_assoc($result))
	{
		if ($row["art_date"])
		{
			$date = new DateTime($row["art_date"]);
			$row["art_date"] = $date->format('d-M-Y');
		}
	
		$arr[] = ($row);		
	}
	
	function utf8ize($d) {
    if (is_array($d)) {
        foreach ($d as $k => $v) {
            $d[$k] = utf8ize($v);
			
        }
    } else if (is_string ($d)) {
        return utf8_encode($d);
    }
    return $d; }

	header('Content-type:application/json');
	echo json_encode(utf8ize($arr ));
?>