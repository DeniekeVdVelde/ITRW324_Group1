<?php
$connect_error = 'connection issues encountered';
mysqli_connect('localhost','rootr','324') or die($connect_error);
mysqli_select_db(mysqli_connect('localhost','rootr','324'),'test') or die($connect_error);
?>