<?php

$id = $_POST['id'];

// Open the DB connection
include 'config.php';

// Grabs the entry by ID
if($id !=null)
{	
	$stmt = $mysqli->prepare("SELECT * FROM addresses LIMIT ?, 1");
	$stmt->bind_param('s', $id);
	
	$stmt->execute();
	
	$result = $stmt->get_result();
	
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
				
	$rows = array();
	while ($row = $result->fetch_assoc())
	{
		$row['state'] = $states[$row['state']];
		$rows[] = $row;
	}
	
	echo json_encode($rows);
}
?>