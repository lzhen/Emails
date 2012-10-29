<?php
	if(isset($_POST['name']) === true && empty($_POST['name']) === false) {
		require '../db/connect.php';
		
		// create query
		$queryJoinCM = "SELECT DISTINCT contacts.name, contacts.email, contacts.display, messages.subject, messages.from, messages.to, messages.date
				   		FROM contacts 
    			   		INNER JOIN messages
    			   		ON contacts.email = messages.from";

		// execute query
		$resultJoinCM = mysql_query($queryJoinCM) or die ("Error in query: $queryJoinCM. ".mysql_error());

		//contact & user name
		if (mysql_num_rows($resultJoinCM) > 0) {
			while($rowJoinCM = mysql_fetch_array($resultJoinCM)) {
				// display user name
				if($rowJoinCM['name'] == mysql_real_escape_string(trim($_POST['name']))){
					$dateArray = $rowJoinCM['date'];
					$subjectArray = $rowJoinCM['subject'];
					echo "<div class='time' title='".$subjectArray."'>".$dateArray."</div>";
				}
				
			}
		} else {
			// no
			// print status message
			echo "No rows found!";
		}
			
		// free result set memory
		mysql_free_result($resultJoinCM);

	}
?>

