<?php  
 	require_once 'actions/db_connect.php'; 

	$sql = "select * from events";
	$result = mysqli_query($conn, $sql) or die("failed to query databases");
?>