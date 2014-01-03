<?php

$id = $_POST['id'];

// Grabs the entry by ID
if($id !=null)
{		
	// Open connection
	$connection = mysql_connect("localhost", "root", "password") 
	or die(mysql_error());

	// Get the databse
	mysql_select_db("sandbox") 
	or die(mysql_error());

	$addresses = mysql_query("SELECT * FROM addresses LIMIT {$id}, 1") 
	or die(mysql_error());

	// Array found in a code snippet library online so I didn't have to type all of this out
	$states = array('AL' => 'ALABAMA',
                'AK' => 'ALASKA',
                'AS' => 'AMERICAN SAMOA',
                'AZ' => 'ARIZONA',
                'AR' => 'ARKANSAS',
                'CA' => 'CALIFORNIA',
                'CO' => 'COLORADO',
                'CT' => 'CONNECTICUT',
                'DE' => 'DELAWARE',
                'DC' => 'DISTRICT OF COLUMBIA',
                'FM' => 'FEDERATED STATES OF MICRONESIA',
                'FL' => 'FLORIDA',
                'GA' => 'GEORGIA',
                'GU' => 'GUAM',
                'HI' => 'HAWAII',
                'ID' => 'IDAHO',
                'IL' => 'ILLINOIS',
                'IN' => 'INDIANA',
                'IA' => 'IOWA',
                'KS' => 'KANSAS',
                'KY' => 'KENTUCKY',
                'LA' => 'LOUISIANA',
                'ME' => 'MAINE',
                'MH' => 'MARSHALL ISLANDS',
                'MD' => 'MARYLAND',
                'MA' => 'MASSACHUSETTS',
                'MI' => 'MICHIGAN',
                'MN' => 'MINNESOTA',
                'MS' => 'MISSISSIPPI',
                'MO' => 'MISSOURI',
                'MT' => 'MONTANA',
                'NE' => 'NEBRASKA',
                'NV' => 'NEVADA',
                'NH' => 'NEW HAMPSHIRE',
                'NJ' => 'NEW JERSEY',
                'NM' => 'NEW MEXICO',
                'NY' => 'NEW YORK',
                'NC' => 'NORTH CAROLINA',
                'ND' => 'NORTH DAKOTA',
                'MP' => 'NORTHERN MARIANA ISLANDS',
                'OH' => 'OHIO',
                'OK' => 'OKLAHOMA',
                'OR' => 'OREGON',
                'PW' => 'PALAU',
                'PA' => 'PENNSYLVANIA',
                'PR' => 'PUERTO RICO',
                'RI' => 'RHODE ISLAND',
                'SC' => 'SOUTH CAROLINA',
                'SD' => 'SOUTH DAKOTA',
                'TN' => 'TENNESSEE',
                'TX' => 'TEXAS',
                'UT' => 'UTAH',
                'VT' => 'VERMONT',
                'VI' => 'VIRGIN ISLANDS',
                'VA' => 'VIRGINIA',
                'WA' => 'WASHINGTON',
                'WV' => 'WEST VIRGINIA',
                'WI' => 'WISCONSIN',
                'WY' => 'WYOMING');
				
	// Outputs the database entires via JSON
	$rows = array();
	while ($row = mysql_fetch_row($addresses))
	{
		$row[4] = $states[$row[4]];
		$rows[] = $row;
	}
	
	echo json_encode($rows);
}
?>