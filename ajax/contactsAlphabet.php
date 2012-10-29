	<?php
		// create query
		$queryContacts = "SELECT * FROM contacts";

		// execute query
		$resultContacts = mysql_query($queryContacts) or die ("Error in query: $queryContacts. ".mysql_error());
			//contact & user name
			if (mysql_num_rows($resultContacts) > 0) {
     			while($rowContacts = mysql_fetch_array($resultContacts)) {
     				// display contacts
        			if($rowContacts['display'] == 1){
        				echo "<div class='contact'>".$rowContacts['name']."</div>";
        			}
   				}
			} else {
     			// no
     			// print status message
     			echo "No rows found!";
			}
			
		// free result set memory
		mysql_free_result($resultContacts);
	?>	