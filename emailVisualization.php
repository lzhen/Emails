<html>

<head>
  <meta charset='utf-8' />
  <meta http-equiv="X-UA-Compatible" content="chrome=1" />
  <meta name="description" content="Chronoline.js : chronoline.js is a library for making a chronology timeline out of events on a horizontal timescale." />

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.qtip.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <script language="javascript" src="js/jquery-1.8.2.min.js"></script>
  <script language="javascript" src="js/script.js"></script>
  <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
  <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
  <script type="text/javascript" src="js/jquery.qtip.min.js"></script>
  <script type="text/javascript" src="js/raphael-min.js"></script> 
  <script type="text/javascript" src="js/chronoline.js"></script>

  <script type="text/javascript">
      $(document).ready(function(){

      var events = [
      {dates: [new Date(2011, 2, 31)], title: "2011 Season Opener", section: 0},
      {dates: [new Date(2012, 1, 29)], title: "Spring Training Begins", section: 2},
      {dates: [new Date(2012, 3, 5)], title: "Atlanta Braves @ New York Mets Game 1", section: 1},
      {dates: [new Date(2012, 3, 7)], title: "Atlanta Braves @ New York Mets Game 2", section: 1},
      {dates: [new Date(2012, 3, 8)], title: "Atlanta Braves @ New York Mets Game 3", section: 1},
      {dates: [new Date(2012, 3, 9), new Date(2012, 3, 11)], title: "Atlanta Braves @ Houston Astros", section: 1},
      {dates: [new Date(2012, 3, 13), new Date(2012, 3, 15)], title: "Milwaukee Brewers @ Atlanta Braves", section: 1},
      {dates: [new Date(2012, 3, 9), new Date(2012, 3, 11)], title: "Boston Red Sox @ Toronto Blue Jays", section: 1},
      {dates: [new Date(2012, 3, 13), new Date(2012, 3, 15)], title: "Baltimore Orioles @ Toronto Blue Jays", section: 1},
      {dates: [new Date(2012, 3, 17), new Date(2012, 3, 19)], title: "Tampa Bay Rays @ Toronto Blue Jays", section: 1},
      {dates: [new Date(2012, 3, 20), new Date(2012, 3, 23)], title: "Toronto Blue Jays @ Kansas City Royals", section: 1},
      {dates: [new Date(2012, 3, 5)], title: "Opening Day for 12 Teams", section: 1},
      {dates: [new Date(2012, 2, 28)], title: "Seattle Mariners v. Oakland A's", section: 1, description: "Played in Japan!"},
      {dates: [new Date(2012, 4, 18), new Date(2012, 5, 24)], title: "Interleague Play", section: 1},
      {dates: [new Date(2012, 5, 10)], title: "All-Star Game", section: 1},
      {dates: [new Date(2012, 9, 24)], title: "World Series Begins", section: 3}
      ];

      var sections = [
      {dates: [new Date(2011, 2, 31), new Date(2011, 9, 28)], title: "2011 MLB Season", section: 0, attrs: {fill: "#d4e3fd"}},
      {dates: [new Date(2012, 2, 28), new Date(2012, 9, 3)], title: "2012 MLB Regular Season", section: 1, attrs: {fill: "#d4e3fd"}},
      {dates: [new Date(2012, 1, 29), new Date(2012, 3, 4)], title: "Spring Training", section: 2, attrs: {fill: "#eaf0fa"}},
      {dates: [new Date(2012, 9, 4), new Date(2012, 9, 31)], title: "2012 MLB Playoffs", section: 3, attrs: {fill: "#eaf0fa"}}
      ];

      var timeline1 = new Chronoline(document.getElementById("target1"), events,
        {animated: true,
         tooltips: true,
         defaultStartDate: new Date(2012, 4, 5),
         sections: sections,
         sectionLabelAttrs: {'fill': '#997e3d', 'font-weight': 'bold'},
      });

      
      $("#divTest").resizable({
       	maxHeight: 300,
        maxWidth: 100,
        minHeight: 150,
        minWidth: 100,
       	handles:'s',
        	resize: function(event, ui) {
            $( "#divHeight" ).empty().append("height: " + $(this).height());
        }
      });
      
   	  $('.ui-resizable-s').dblclick(function(){
        $("#divTest").height(150);
      });
    });
  </script>    
  <title>Email Visualization</title>
</head>

<body>

 	
 	<div class="leftDiv">
		
		<!-- display user image -->
		<div id="userImage">
			 <img src="https://lh3.googleusercontent.com/-_u0kn0AWPwE/AAAAAAAAAAI/AAAAAAAAAAA/v48vjd2tTJs/s96-c/photo.jpg" alt="user image" height="96" width="96"/> 
		</div>
	
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

		// create query
		$query = "SELECT * FROM contacts";

		// execute query
		$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());

		// see if any rows were returned
		if (mysql_num_rows($result) > 0) {

     		while($row = mysql_fetch_array($result)) {
     		
     			// display user name
     			if($row['display'] == 2){	
        			echo "<div>".$row['name']."</div>";
        		}
        		
     			// display contacts
        		if($row['display'] == 1){
        			echo "<div>".$row['name']."</div>";
        		}
   			 }
   			 
		} else {

     		// no
     		// print status message
     		echo "No rows found!";

		}

		// free result set memory
		mysql_free_result($result);

		// close connection
		mysql_close($connection);

	?>
	</div>
	<div class="rightDiv">
  		<div id="divTest" >
	 	<!-- MAIN CONTENT -->
    		<div id="main_content_wrap" class="outer">
    		  <section id="main_content" class="inner">
     	 		<h2>Monthly Timeline</h2>
     	 		<div id="target1" class="timeline-tgt">
    			</div>
      		  </section>
    		</div>
 		</div>
 	</div>
 	
 	<div class="bottomDiv">
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

		// create query
		$query = "SELECT * FROM messages";

		// execute query
		mysql_query("set names utf8");
		$result = mysql_query($query) or die ("Error in query: $query. ".mysql_error());
     	
     	// json.php
		echo '{ "messages":[';
			while($row=mysql_fetch_array($result))
				  {
					$id=$row['id'];
					$subject=$row['subject'];
					$from=$row['from'];
					$to=$row['to'];
					$date=$row['date'];
					echo '
						{
						"id":"'.$id.'";
						"subject":"'.$subject.'";
						"from":"'.$from.'";
						"to":"'.$to.'";
						"date":"'.$date.'";
						},'; 
			 }
	    echo ']}';
		

		// free result set memory
		mysql_free_result($result);

		// close connection
		mysql_close($connection);

	?>

 	</div>
 	
 	

    
 	

</body>

</html>