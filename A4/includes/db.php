<!-- Connecting to the database -->
<?php
		$hostservername = "localhost"; //use localhost:<port_number> if connection does not work
		$username = "root";
		$password = "";
		$dbname = "mengani";	

		$dbconnection = new mysqli($hostservername, $username, $password, $dbname);

		if ($dbconnection->connect_error) {
			die("Nooooooooo<br>" . $dbconnection->connect_error);
		}
?>
