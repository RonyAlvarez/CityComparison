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
	'State' => 'New York',
	'Name' => 'New York City',
	'Rank' => '1st, US',
	'Population' => '8,491,079',
	'Area' => '468.9 sq mi',
	'Time zone' => 'Eastern (EST) (UTC-5)',
	'Demonym' => 'New Yorker',
	'Nickname' => 'The Big Apple'
	);
$LosAngeles = array(
	'State' => 'California',
	'Name' => 'Los Angeles',
	'Rank' => '2nd, US',
	'Population' => '3,928,864',
	'Area' => '8,282 sq mi',
	'Time zone' => 'Pacific (UTC-8)',
	'Demonym' => 'Angeleno',
	'Nickname' => 'The City of Angels'
	);
$Chicago = array(
	'State' => 'Illinois',
	'Name' => 'Chicago',
	'Rank' => '3rd, US',
	'Population' => '2,722,389',
	'Area' => '234.0 sq mi',
	'Time zone' => 'Central (UTC-6)',
	'Demonym' => 'Chicagoan',
	'Nickname' => 'The Wind City'
	);
$Houston = array(
	'State' => 'Texas',
	'Name' => 'Houston',
	'Rank' => '4th, US',
	'Population' => '2,239,558',
	'Area' => '627.8 sq mi',
	'Time zone' => 'CST (UTC-6)',
	'Demonym' => 'Houstonian',
	'Nickname' => 'H-Town'
	);
$Philadelphia = array(
	'State' => 'Pennsylvania',
	'Name' => 'Philadelphia',
	'Rank' => '5th, US',
	'Population' => '1,560,297',
	'Area' => '141.6 sq mi',
	'Time zone' => 'EST (UTC-5)',
	'Demonym' => 'Philadelphian',
	'Nickname' => 'Philly'
	);
$Phoenix = array(
	'State' => 'Arizona',
	'Name' => 'Phoenix',
	'Rank' => '6th, US',
	'Population' => '1,537,058',
	'Area' => '2,967.59 sq mi',
	'Time zone' => 'MST (UTC-7)',
	'Demonym' => 'Phoenician',
	'Nickname' => 'Valley of the Sun'
	);
$SanAntonio = array(
	'State' => 'Texas',
	'Name' => 'San Antonio',
	'Rank' => '7th, US',
	'Population' => '1,436,697',
	'Area' => '465.4 sq mi',
	'Time zone' => 'CST (UTC-6)',
	'Demonym' => 'San Antonian',
	'Nickname' => 'Alamo City'
	);
$SanDiego = array(
	'State' => 'California',
	'Name' => 'San Diego',
	'Rank' => '8th, US',
	'Population' => '1,381,069',
	'Area' => '372.40 sq mi',
	'Time zone' => 'PDT (UTC-8)',
	'Demonym' => 'San Diegan',
	'Nickname' => 'America is Finest City'
	);
$Dallas = array(
	'State' => 'Texas',
	'Name' => 'Dallas',
	'Rank' => '9th, US',
	'Population' => '1,281,047',
	'Area' => '385.8 sq mi',
	'Time zone' => 'Central (UTC-6)',
	'Demonym' => 'Dallasite',
	'Nickname' => 'Big D'
	);
$SanJose = array(
	'State' => 'California',
	'Name' => 'San Jose',
	'Rank' => '10th, US',
	'Population' => '1,015,785',
	'Area' => '179.97 sq mi',
	'Time zone' => 'Pacific (UTC-8)',
	'Demonym' => 'San Josean',
	'Nickname' => 'The Capital of Sillicon Valley'
	);


/***********************************  
SEARCH BOX INPUT
************************************/

$city = $_POST['city'];



/***********************************  
AJAX OUTPUT
************************************/

if (strtoupper($city) === 'NEW YORK CITY' || 'NEW YORK') {

	echo "State: " . $NewYorkCity['State'] . ".<br>";
	echo "Name: " . $NewYorkCity['Name'] . ".<br>";
	echo "Rank: " . $NewYorkCity['Rank'] . ".<br>";
	echo "Population: " . $NewYorkCity['Population'] . ".<br>";
	echo "Nickname: " . $NewYorkCity['Nickname'] . ".<br>";
	echo "Demonym: " . $NewYorkCity['Demonym'] . ".<br>";
	echo "Area: " . $NewYorkCity['Area'] . ".<br>";
	echo "Time zone: " . $NewYorkCity['Time zone'] . ".<br>";
	} 
elseif (strtoupper($city) === 'LOS ANGELES') {
	echo "State: " . $LosAngeles['State'] . ".<br>";
	echo "Name: " . $LosAngeles['Name'] . ".<br>";
	echo "Rank: " . $LosAngeles['Rank'] . ".<br>";
	echo "Population: " . $LosAngeles['Population'] . ".<br>";
	echo "Nickname: " . $LosAngeles['Nickname'] . ".<br>";
	echo "Demonym: " . $LosAngeles['Demonym'] . ".<br>";
	echo "Area: " . $LosAngeles['Area'] . ".<br>";
	echo "Time zone: " . $LosAngeles['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'CHICAGO') {
	echo "State: " . $Chicago['State'] . ".<br>";
	echo "Name: " . $Chicago['Name'] . ".<br>";
	echo "Rank: " . $Chicago['Rank'] . ".<br>";
	echo "Population: " . $Chicago['Population'] . ".<br>";
	echo "Nickname: " . $Chicago['Nickname'] . ".<br>";
	echo "Demonym: " . $Chicago['Demonym'] . ".<br>";
	echo "Area: " . $Chicago['Area'] . ".<br>";
	echo "Time zone: " . $Chicago['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'HOUSTON') {
	echo "State: " . $Houston['State'] . ".<br>";
	echo "Name: " . $Houston['Name'] . ".<br>";
	echo "Rank: " . $Houston['Rank'] . ".<br>";
	echo "Population: " . $Houston['Population'] . ".<br>";
	echo "Nickname: " . $Houston['Nickname'] . ".<br>";
	echo "Demonym: " . $Houston['Demonym'] . ".<br>";
	echo "Area: " . $Houston['Area'] . ".<br>";
	echo "Time zone: " . $Houston['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'PHILADELPHIA') {
	echo "State: " . $Philadelphia['State'] . ".<br>";
	echo "Name: " . $Philadelphia['Name'] . ".<br>";
	echo "Rank: " . $Philadelphia['Rank'] . ".<br>";
	echo "Population: " . $Philadelphia['Population'] . ".<br>";
	echo "Nickname: " . $Philadelphia['Nickname'] . ".<br>";
	echo "Demonym: " . $Philadelphia['Demonym'] . ".<br>";
	echo "Area: " . $Philadelphia['Area'] . ".<br>";
	echo "Time zone: " . $Philadelphia['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'PHOENIX') {
	echo "State: " . $Phoenix['State'] . ".<br>";
	echo "Name: " . $Phoenix['Name'] . ".<br>";
	echo "Rank: " . $Phoenix['Rank'] . ".<br>";
	echo "Population: " . $Phoenix['Population'] . ".<br>";
	echo "Nickname: " . $Phoenix['Nickname'] . ".<br>";
	echo "Demonym: " . $Phoenix['Demonym'] . ".<br>";
	echo "Area: " . $Phoenix['Area'] . ".<br>";
	echo "Time zone: " . $Phoenix['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'SAN ANTONIO') {
	echo "State: " . $SanAntonio['State'] . ".<br>";
	echo "Name: " . $SanAntonio['Name'] . ".<br>";
	echo "Rank: " . $SanAntonio['Rank'] . ".<br>";
	echo "Population: " . $SanAntonio['Population'] . ".<br>";
	echo "Nickname: " . $SanAntonio['Nickname'] . ".<br>";
	echo "Demonym: " . $SanAntonio['Demonym'] . ".<br>";
	echo "Area: " . $SanAntonio['Area'] . ".<br>";
	echo "Time zone: " . $SanAntonio['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'SAN DIEGO') {
	echo "State: " . $SanDiego['State'] . ".<br>";
	echo "Name: " . $SanDiego['Name'] . ".<br>";
	echo "Rank: " . $SanDiego['Rank'] . ".<br>";
	echo "Population: " . $SanDiego['Population'] . ".<br>";
	echo "Nickname: " . $SanDiego['Nickname'] . ".<br>";
	echo "Demonym: " . $SanDiego['Demonym'] . ".<br>";
	echo "Area: " . $SanDiego['Area'] . ".<br>";
	echo "Time zone: " . $SanDiego['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'DALLAS') {
	echo "State: " . $Dallas['State'] . ".<br>";
	echo "Name: " . $Dallas['Name'] . ".<br>";
	echo "Rank: " . $Dallas['Rank'] . ".<br>";
	echo "Population: " . $Dallas['Population'] . ".<br>";
	echo "Nickname: " . $Dallas['Nickname'] . ".<br>";
	echo "Demonym: " . $Dallas['Demonym'] . ".<br>";
	echo "Area: " . $Dallas['Area'] . ".<br>";
	echo "Time zone: " . $Dallas['Time zone'] . ".<br>";	
	}
elseif (strtoupper($city) === 'SAN JOSE') {
	echo "State: " . $SanJose['State'] . ".<br>";
	echo "Name: " . $SanJose['Name'] . ".<br>";
	echo "Rank: " . $SanJose['Rank'] . ".<br>";
	echo "Population: " . $SanJose['Population'] . ".<br>";
	echo "Nickname: " . $SanJose['Nickname'] . ".<br>";
	echo "Demonym: " . $SanJose['Demonym'] . ".<br>";
	echo "Area: " . $SanJose['Area'] . ".<br>";
	echo "Time zone: " . $SanJose['Time zone'] . ".<br>";	
	}
else {
	echo "Incorrect input, Try again.";
}

?>