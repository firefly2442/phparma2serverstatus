<?php

//change this to reflect the servers that you want to query
$servers = array(
	array(
		'id' => 'AlphaSquad US1',
		'type' => 'armedassault2oa',
		'host' => '209.190.105.50:2322'
	),
	array(
		'id' => 'AlphaSquad US2',
		'type' => 'armedassault2oa',
		'host' => '209.190.105.50:2312'
	),
	array(
		'id' => 'Kellys Heroes',
		'type' => 'armedassault2oa',
		'host' => '78.129.202.206:2302'
	),
	array(
		'id' => 'Phoenix Soldiers',
		'type' => 'armedassault2oa',
		'host' => '72.26.196.58:2302'
	),
	array(
		'id' => 'DayZ',
		'type' => 'armedassault2oa',
		'host' => '74.91.113.53:2302'
	)
);


//change this to toggle querying geographic information based on the IP address
define("GEOIP", "true");


/* phparma2serverstatus version (you don't need to change this) */
define("VERSION", "0.1");

?>
