<?php
require_once("config.inc.php");
require_once("gameq/GameQ.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="javascript/jquery-1.7.2.min.js"></script>

	<link rel="shortcut icon" href="favicon.ico">

	<title>PHP Arma2 Server Status</title>


	<script language="Javascript">
	$(document).ready(function() {
		//hide all player lists by default
		$('.hide-players').hide();

		//hide all mods by default
		$('.hide-mods').hide();

		$(".players").click(function() {
			$('.hide-players',this).toggle();
		});

		$(".mods").click(function() {
			$('.hide-mods',this).toggle();
		});

	});
	</script>

</head>
<body>

<h2>PHP Arma2 Server Status</h2>


<?php
// Call the class, and add your servers.
$gq = new GameQ();
$gq->addServers($servers);

// You can optionally specify some settings
$gq->setOption('timeout', 3); //in seconds

// You can optionally specify some output filters,
// these will be applied to the results obtained.
$gq->setFilter('normalise'); //makes sure a fixed set of variables is always available

// Send requests, and parse the data
$results = $gq->requestData();


echo "<div class='div-table'>\n";
//iterate through each server
foreach ($results as $key => $server)
{
	//the server is online and running
	if ($server['gq_online'])
	{
		//row one
		echo "<div class='div-table-row'>\n";
			echo "<div class='div-table-col div-left'>\n";
				//Arma2 Logo
				echo "<img src='images/arma2.jpg' alt='Arma2 Logo' title='Arma2 Logo' />\n";
				if (GEOIP == "true") {
					//Use GeoIP to determine country
					echo "<a href='http://www.hostip.info'>";
					echo "<img src='http://api.hostip.info/flag.php?ip=". $server['gq_address'] ."' alt='Country' title='Country' /></a>\n";
				}
			echo "</div>\n";

			//Server name
			echo "<div class='div-table-col div-right'>\n";
				echo $server['gq_hostname'];
			echo "</div>\n";
		echo "</div>\n";

		//row two
		echo "<div class='div-table-row'>\n";
			echo "<div class='div-table-col div-left'>\n";
				//IP address:port
				echo $server['gq_address'] . ":" . $server['gq_port'];
			echo "</div>\n";

			echo "<div class='div-table-col div-right'>\n";
				//Map
				echo "Map: " . $server['gq_mapname'];
			echo "</div>\n";
		echo "</div>\n";

		//row three
		echo "<div class='div-table-row'>\n";
			echo "<div class='div-table-col div-left'>\n";
				//Mission
				echo "Mission: " . $server['mission'];
			echo "</div>\n";

			echo "<div class='div-table-col div-right'>\n";
				//GameType
				echo "Type: " . $server['gq_gametype'];
			echo "</div>\n";
		echo "</div>\n";

		//row four
		echo "<div class='div-table-row'>\n";
			echo "<div class='div-table-col div-left'>\n";
				//Players
				echo "Players: " . $server['gq_numplayers'] . "/" . $server['gq_maxplayers'];
			echo "</div>\n";

			echo "<div class='div-table-col div-right'>\n";
				//Password
				echo "Password: ";
				if ($server['gq_password'] == 0) {
					echo "No";
				} else {
					echo "Yes";
				}
			echo "</div>\n";
		echo "</div>\n";

		//row five (hidden in divs, activated by click)
		echo "<div class='div-table-row'>\n";
			echo "<div class='div-table-col div-left'>\n";
				if ($server['gq_numplayers'] > 0) //if there are players, show the option for displaying their names
				{
					echo "<div class='players' style='cursor: pointer' title='Show/Hide Player Listing'><div class='like-link'>Player Listing</div>\n";
						echo "<table class='hide-players'>";
						//Iterate through all the players
						foreach ($server['players'] as $player)
						{
							echo "<tr>\n";
								echo "<td>".$player['gq_name']."</td>\n";
								//TODO: can we grab this other information?
								//echo "<td>".$player['gq_score']."</td>\n";
								//echo "<td>".$player['gq_ping']."</td>\n";
							echo "</tr>\n";
						}
						echo "</table>";
					echo "</div>\n";
				}
			echo "</div>\n";

			echo "<div class='div-table-col div-right'>\n";
				echo "<div class='details'>\n";
				//Server details
				echo "<p>Dedicated: ";
				if ($server['gq_dedicated'] == 1) {
					echo "Yes</p>\n";
				} else {
					echo "No</p>\n";
				}
				echo "<p><div class='mods' style='cursor: pointer' title='Show/Hide Mod List'><div class='like-link'>Mods:</div>\n";
				echo "<div class='hide-mods'>" . $server['mod'] . "</div></div></p>\n";
				echo "</div>\n";
			echo "</div>\n";
		echo "</div>\n";

	} else {
		echo "<p class='error'>The server " . $key . " is down.</p>";
	}
}
echo "</div>\n";

?>


<br><hr>
<center><a href="https://github.com/firefly2442/phparma2serverstatus">phparma2serverstatus</a>
<br>Version: <?php echo VERSION;?></center>

</body>
</html>
