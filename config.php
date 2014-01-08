<?php

// Open connection
/*
$connection = mysql_connect("localhost", "root", "password") 
or die(mysql_error());

// Get the databse
mysql_select_db("sandbox") 
or die(mysql_error());*/

$mysqli = new mysqli("localhost", "root", "password", "sandbox");


?>