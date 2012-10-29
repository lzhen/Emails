	<?php

		// set server access variables
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "emails";

		// open connection
		$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!");

		// select database
		mysql_select_db($db) or die ("Unable to select database!");
		
				// execute query
		mysql_query("set names utf8");
	?>