<?php
require_once("config.inc.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="javascript/jquery-2.1.4.min.js"></script>

	<link rel="shortcut icon" href="favicon.ico">

	<title>PHP Arma2/3 Server Status</title>


	<script>
	$(document).ready(function() {

		//use asynchronous AJAX call via JQuery to query the servers in the backend
		//this way it's not blocking the loading of the page
		var datastring = 'query-servers=true';
		$.ajax({
			type: "POST",
			url: "query-servers.php",
			data: datastring,
			success: function(data) {
				//show information in our div
				$('.server-data').show().html(data);

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
			}
		});

	});
	</script>

</head>
<body>

<h2>PHP Arma2/3 Server Status</h2>

<div class='server-data'>
Loading...
</div>


<br><hr>
<div style="text-align: center;">
<a href="https://github.com/firefly2442/phparma2serverstatus">phparma2serverstatus</a>
<br>Version: <?php echo VERSION;?>
</div>

</body>
</html>
