	<?php
		// create query
		$queryContacts = "SELECT * FROM contacts";

		// execute query
		$resultContacts = mysql_query($queryContacts) or die ("Error in query: $queryContacts. ".mysql_error());

 		echo "<div id='userImage'>
				 <img src='https://lh3.googleusercontent.com/-_u0kn0AWPwE/AAAAAAAAAAI/AAAAAAAAAAA/v48vjd2tTJs/s96-c/photo.jpg' alt='user image' height='96' width='96'/> 
			</div>";
	
			//contact & user name
			if (mysql_num_rows($resultContacts) > 0) {
     			while($rowContacts = mysql_fetch_array($resultContacts)) {
     				// display user name
     				if($rowContacts['display'] == 2){	
        				echo "<div class='myName'>".$rowContacts['name']."</div>";
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