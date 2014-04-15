<?php

//change this to reflect the servers that you want to query
$servers = array(
	array(
		'id' => 'AlphaSquad Arma 3',
		'type' => 'armedassault3',
		'host' => '209.190.50.178:2302',
	),
	array(
		'id' => 'Kellys Heroes',
		'type' => 'armedassault3',
		'host' => '144.76.38.131:2402'
	),
	array(
		'id' => 'TAW',
		'type' => 'armedassault2oa',
		'host' => '64.31.29.82:2302'
	),
	array(
		'id' => '7Cav',
		'type' => 'armedassault3',
		'host' => '108.61.31.86:2302'
	)
);


//change this to toggle querying geographic information based on the IP address
define("GEOIP", "true");


/* phparma2serverstatus version (you don't need to change this) */
define("VERSION", "0.2");

?>
