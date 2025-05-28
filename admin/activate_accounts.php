<?php 
	require_once 'dbcon.php';						
	if (isset($_GET['voter_id']) && !empty($_GET['voter_id'])) {
    $voter_id = $_GET['voter_id'];
    if ($conn->query("UPDATE voters SET account = 'Active' WHERE voters_id = '$voter_id'") === TRUE) {
        echo "<script>alert('Voter activated successfully!'); window.location='voters.php';</script>";
    } else {
        echo "<script>alert('Error activating voter: " . $conn->error . "'); window.location='voters.php';</script>";
    }
} else {
    echo "<script>alert('No valid voter ID provided.'); window.location='voters.php';</script>";
}
?>
