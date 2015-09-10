<?php

/***********************************  
CITIES ARRAY
************************************/

/***********************************
info in the array: 
Name => New York,
Population => 8,491,079
Area total => 468.9 sq mi
Rank => 1st, US
Time zone => Eastern (EST) (UTC-5)
************************************/

$NewYorkCity = array(
	'Name' => 'New York City',
	'Rank' => '1st, US',
	'Population' => '8,491,079',
	'Area' => '468.9 sq mi',
	'Time zone' => 'Eastern (EST) (UTC-5)'
	);
$LosAngeles = array(
	'Name' => 'Los Angeles',
	'Rank' => '2nd, US',
	'Population' => '3,928,864',
	'Area' => '8,282 sq mi',
	'Time zone' => 'Pacific (UTC-8)'
	);
$Chicago = array(
	'Name' => 'Chicago',
	'Rank' => '3rd, US',
	'Population' => '2,722,389',
	'Area' => '234.0 sq mi',
	'Time zone' => 'Central (UTC-6)'
	);
$Houston = array(
	'Name' => 'Houston',
	'Rank' => '4th, US',
	'Population' => '2,239,558',
	'Area' => '627.8 sq mi',
	'Time zone' => 'CST (UTC-6)'
	);
$Philadelphia = array(
	'Name' => 'Philadelphia',
	'Rank' => '5th, US',
	'Population' => '1,560,297',
	'Area' => '141.6 sq mi',
	'Time zone' => 'EST (UTC-5)'
	);
$Phoenix = array(
	'Name' => 'Phoenix',
	'Rank' => '6th, US',
	'Population' => '1,537,058',
	'Area' => '2,967.59 sq mi',
	'Time zone' => 'MST (UTC-7)'
	);
$SanAntonio = array(
	'Name' => 'San Antonio',
	'Rank' => '7th, US',
	'Population' => '1,436,697',
	'Area' => '465.4 sq mi',
	'Time zone' => 'CST (UTC-6)'
	);
$SanDiego = array(
	'Name' => 'San Diego',
	'Rank' => '8th, US',
	'Population' => '1,381,069',
	'Area' => '372.40 sq mi',
	'Time zone' => 'PDT (UTC-8)'
	);
$Dallas = array(
	'Name' => 'Dallas',
	'Rank' => '9th, US',
	'Population' => '1,281,047',
	'Area' => '385.8 sq mi',
	'Time zone' => 'Central (UTC-6)'
	);
$SanJose = array(
	'Name' => 'San Jose',
	'Rank' => '10th, US',
	'Population' => '1,015,785',
	'Area' => '179.97 sq mi',
	'Time zone' => 'Pacific (UTC-8)'
	);


/***********************************  
SEARCH BOX INPUT
************************************/

$city = $_POST['city'];



/***********************************  
AJAX OUTPUT
************************************/

if (strtoupper($city) === 'NEW YORK CITY') {

	echo "Name: " . $NewYorkCity['Name'] . ".<br>";
	echo "Rank: " . $NewYorkCity['Rank'] . ".<br>";
	echo "Population: " . $NewYorkCity['Population'] . ".<br>";
	echo "Area: " . $NewYorkCity['Area'] . ".<br>";
	echo "Time zone: " . $NewYorkCity['Time zone'] . ".<br>";
	} 
elseif (strtoupper($city) === 'LOS ANGELES') {
	echo "Name: " . $LosAngeles['Name'] . ".<br>";
	echo "Rank: " . $LosAngeles['Rank'] . ".<br>";
	echo "Population: " . $LosAngeles['Population'] . ".<br>";
	echo "Area: " . $LosAngeles['Area'] . ".<br>";
	echo "Time zone: " . $LosAngeles['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'CHICAGO') {
	echo "Name: " . $Chicago['Name'] . ".<br>";
	echo "Rank: " . $Chicago['Rank'] . ".<br>";
	echo "Population: " . $Chicago['Population'] . ".<br>";
	echo "Area: " . $Chicago['Area'] . ".<br>";
	echo "Time zone: " . $Chicago['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'HOUSTON') {
	echo "Name: " . $Houston['Name'] . ".<br>";
	echo "Rank: " . $Houston['Rank'] . ".<br>";
	echo "Population: " . $Houston['Population'] . ".<br>";
	echo "Area: " . $Houston['Area'] . ".<br>";
	echo "Time zone: " . $Houston['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'PHILADELPHIA') {
	echo "Name: " . $Philadelphia['Name'] . ".<br>";
	echo "Rank: " . $Philadelphia['Rank'] . ".<br>";
	echo "Population: " . $Philadelphia['Population'] . ".<br>";
	echo "Area: " . $Philadelphia['Area'] . ".<br>";
	echo "Time zone: " . $Philadelphia['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'PHOENIX') {
	echo "Name: " . $Phoenix['Name'] . ".<br>";
	echo "Rank: " . $Phoenix['Rank'] . ".<br>";
	echo "Population: " . $Phoenix['Population'] . ".<br>";
	echo "Area: " . $Phoenix['Area'] . ".<br>";
	echo "Time zone: " . $Phoenix['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'SAN ANTONIO') {
	echo "Name: " . $SanAntonio['Name'] . ".<br>";
	echo "Rank: " . $SanAntonio['Rank'] . ".<br>";
	echo "Population: " . $SanAntonio['Population'] . ".<br>";
	echo "Area: " . $SanAntonio['Area'] . ".<br>";
	echo "Time zone: " . $SanAntonio['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'SAN DIEGO') {
	echo "Name: " . $SanDiego['Name'] . ".<br>";
	echo "Rank: " . $SanDiego['Rank'] . ".<br>";
	echo "Population: " . $SanDiego['Population'] . ".<br>";
	echo "Area: " . $SanDiego['Area'] . ".<br>";
	echo "Time zone: " . $SanDiego['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'DALLAS') {
	echo "Name: " . $Dallas['Name'] . ".<br>";
	echo "Rank: " . $Dallas['Rank'] . ".<br>";
	echo "Population: " . $Dallas['Population'] . ".<br>";
	echo "Area: " . $Dallas['Area'] . ".<br>";
	echo "Time zone: " . $Dallas['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'SAN JOSE') {
	echo "Name: " . $SanJose['Name'] . ".<br>";
	echo "Rank: " . $SanJose['Rank'] . ".<br>";
	echo "Population: " . $SanJose['Population'] . ".<br>";
	echo "Area: " . $SanJose['Area'] . ".<br>";
	echo "Time zone: " . $SanJose['Time zone'] . ".<br>";	
	}
else {
	echo "Incorrect input, Try again.";
}

?>