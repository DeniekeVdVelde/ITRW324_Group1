<?php header('Access-Control-Allow-Origin: *');?>
<?php header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');?>
<?php header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT');?>
<?php 
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$db_name = "test";

	
		$conn = mysqli_connect($servername, $username, $password);
		mysqli_select_db($conn,"$db_name") or die ("no database");
		
		
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully ";
?>
