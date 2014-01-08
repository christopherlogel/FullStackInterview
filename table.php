<?php

$baseid = $_POST['baseid'];

include 'config.php';

// Grabs five rows for display
if($baseid !=null)
{	
	$stmt = $mysqli->prepare("SELECT * FROM addresses LIMIT ?, 5");
	$stmt->bind_param('s', $baseid);
	
	$stmt->execute();
	
	$result = $stmt->get_result();
	
	$rows = array();
	while ($row = $result->fetch_assoc())
	{
		$rows[] = $row;
	}
	
	echo json_encode($rows);
}
?>