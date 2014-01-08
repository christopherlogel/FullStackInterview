<?php

include 'config.php';

// This code grabs the total number of rows so that we can 
// build the pagination code
$stmt = $mysqli->prepare("SELECT * FROM addresses");
$stmt->execute();

$result = $stmt->get_result();

$rows = array();
while ($row = $result->fetch_assoc())
{
	$rows[] = $row;
}

echo count($rows);

?>