<?php

//change this to reflect the servers that you want to query
//Note: since GameSpy shut down, the 'type' should now be 'source'
$servers = array(
	array(
		'id' => 'AlphaSquad Arma 3',
		'type' => 'source',
		'host' => '209.190.50.178:2303',
	),
	array(
		'id' => 'Kellys Heroes',
		'type' => 'source',
		'host' => '144.76.38.131:2303'
	),
	array(
		'id' => 'TAW',
		'type' => 'source',
		'host' => '64.31.29.82:2303'
	),
	array(
		'id' => '7Cav',
		'type' => 'source',
		'host' => '108.61.31.86:2303'
	),
	array(
		'id' => 'United Operations Arma 2',
		'type' => 'source',
		'host' => 'arma2.unitedoperations.net:27001'
	),
	array(
		'id' => 'United Operations Arma 3',
		'type' => 'source',
		'host' => 'arma3.unitedoperations.net:2402'
	)
);


//change this to toggle querying geographic information based on the IP address
define("GEOIP", "true");


/* phparma2serverstatus version (you don't need to change this) */
define("VERSION", "0.2");

?>
