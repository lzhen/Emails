	<?php
	
		// create query
		$queryContacts2 ="SELECT contacts.name, contacts.email, contacts.display, messages.from, messages.date
				   		  FROM messages 
    			   		  INNER JOIN contacts
    			   		  ON contacts.email = messages.from
    			   		  ORDER BY date DESC";
    			   		
		// execute query
		$resultContacts2 = mysql_query($queryContacts2) or die ("Error in query: $queryContacts. ".mysql_error());
			//contact & user name
			if (mysql_num_rows($resultContacts2) > 0) {
			
				$new_array = array();
				$result = array();
				
     			while($rowContacts2 = mysql_fetch_array($resultContacts2)) {
     				// display contacts
        			if($rowContacts2['display'] == 1){
        				array_push($new_array, $rowContacts2['name']);
        				$result = array_unique($new_array);
        			}
   				}
   				
   				foreach ($result as $key => $val) {
    				
    				echo "<div class='contact'>".$val."</div>";
				}
   	
			} else {
     			// no
     			// print status message
     			echo "No rows found!";
			}
			
		// free result set memory
		mysql_free_result($resultContacts2);
	?>	