<?php
// Open connection
$connection = mysql_connect("localhost", "root", "password") 
or die(mysql_error());

// Get the databse
mysql_select_db("sandbox") 
or die(mysql_error());

// Selects all of the rows
$addresses = mysql_query("SELECT * FROM addresses") 
or die(mysql_error());

// Outputs the database entires via JSON
$rows = array();
while ($row = mysql_fetch_row($addresses))
{
	$rows[] = $row;
}

echo count($rows);

?>