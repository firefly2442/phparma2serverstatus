<?php

//change this to reflect the servers that you want to query
$servers = array(
	array(
		'id' => 'AlphaSquad Arma 3',
		'type' => 'armedassault3',
		'host' => '207.182.138.242:2302',
	),
	array(
		'id' => 'Kellys Heroes',
		'type' => 'armedassault3',
		'host' => '144.76.38.131:2402'
	),
	array(
		'id' => 'TAW',
		'type' => 'armedassault3',
		'host' => '64.31.29.82:2402'
	),
	array(
		'id' => 'Arma2 OA Test',
		'type' => 'armedassault2oa',
		'host' => '74.91.120.129:2312'
	),
	array(
		'id' => 'United Operations Arma 3',
		'type' => 'armedassault3',
		'host' => 'arma3.unitedoperations.net:2402'
	),
	array(
		'id' => 'DayZ Test',
		'type' => 'dayz',
		'host' => '45.59.69.210:2330'
	)
);


//TODO: currently offline, looking into alternatives
//change this to toggle querying geographic information based on the IP address
//define("GEOIP", "true");


/* phparma2serverstatus version (you don't need to change this) */
define("VERSION", "0.2");

?>
