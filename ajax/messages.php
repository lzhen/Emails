	<?php
		if(isset($_POST['date']) === true && empty($_POST['date']) === false) {
		require '../db/connect.php';
		// create query
		$queryJoinMM = "SELECT messages.id, messages.subject, message_bodies.body,messages.date
				   		FROM messages 
    			   		INNER JOIN message_bodies
    			   		ON messages.id = message_bodies.message_id";
		
		// execute query
		$resultJoinMM = mysql_query($queryJoinMM) or die ("Error in query: $queryJoinMM. ".mysql_error());

 			
 			//contact & user name
			if (mysql_num_rows($resultJoinMM) > 0) {
     			while($rowJoinMM = mysql_fetch_array($resultJoinMM)) {
     				// display user name
     				if($rowJoinMM['date'] == mysql_real_escape_string(trim($_POST['date']))){	
        				echo "<div>".$rowJoinMM['body']."</div>";
        			}
   				}
			} else {
     			// no
     			// print status message
     			echo "No rows found!";
			}
    		
		// free result set memory
		mysql_free_result($resultJoinMM);
		}
	?>