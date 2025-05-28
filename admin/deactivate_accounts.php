<?php 
	require_once 'dbcon.php';						
	$voter_id = $_GET['voter_id'];
$conn->query("UPDATE voters SET account = 'Inactive' WHERE voters_id = '$voter_id'") or die($conn->error);
	echo "<script> window.location='voters.php' </script>";
?>
