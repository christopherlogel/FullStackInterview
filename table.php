<?php

$baseid = $_POST['baseid'];

// Grabs five rows for display
if($baseid !=null)
{		
	// Open connection
	$connection = mysql_connect("localhost", "root", "password") 
	or die(mysql_error());

	// Get the databse
	mysql_select_db("sandbox") 
	or die(mysql_error());

	// Selects 5 entries starting at the base id
	$baseid_offset = $badeid + 5;
	$addresses = mysql_query("SELECT * FROM addresses LIMIT {$baseid},{$baseid_offset}") 
	or die(mysql_error());

	// Outputs the database entires via JSON
	$rows = array();
	while ($row = mysql_fetch_row($addresses))
	{
		$rows[] = $row;
	}

	echo json_encode($rows);
}
?>