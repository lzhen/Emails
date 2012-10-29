	<?php
	
		// create query
		$queryContacts2 ="SELECT contacts.name, contacts.email, SUM(contacts.display), messages.from
				   		  FROM messages 
    			   		  INNER JOIN contacts
    			   		  ON contacts.email = messages.from
    			   		  WHERE (contacts.display = 1)
    			   		  GROUP BY contacts.name
    			   		  ORDER BY SUM(contacts.display) DESC";
    			   		
		// execute query
		$resultContacts2 = mysql_query($queryContacts2) or die ("Error in query: $queryContacts. ".mysql_error());
			
		//contact & user name
		if (mysql_num_rows($resultContacts2) > 0) {
			
				$new_array = array();
				$new_array2 = array();
				$result = array();
				$result2 = array();
				
     			while($rowContacts2 = mysql_fetch_array($resultContacts2)) {
     				// display contacts
					echo "<div class='contact'>".$rowContacts2['name']."</div>";
        		
   				}
   				
			} else {
			
     			// no
     			// print status message
     			echo "No rows found!";
			}
			
		// free result set memory
		mysql_free_result($resultContacts2);
	?>	