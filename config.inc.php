<?php

// change this to reflect the servers that you want to query
// https://github.com/Austinb/GameQ/wiki/Examples-v3#different-client-and-query-ports
$servers = [
	[
		'id' => 'AlphaSquad Arma 3',
		'type' => 'arma3',
		'host' => '207.182.138.242:2302',
		'options' => [
			'query_port' => 2303
		]
	],
	//[
		//'id' => 'Arma 2 OA Test',
		//'type' => 'armedassault2oa',
		//'host' => '107.191.44.98:2302'
	//],
	//[
		//'id' => 'DayZ Test',
		//'type' => 'dayz',
		//'host' => '198.12.65.82:2302'
	//]
];


//TODO: currently offline, looking into alternatives
//change this to toggle querying geographic information based on the IP address
//define("GEOIP", "true");


/* phparma2serverstatus version (you don't need to change this) */
define("VERSION", "0.2");

?>
