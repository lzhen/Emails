<html>

<head>
  <meta charset='utf-8' />
  <meta http-equiv="X-UA-Compatible" content="chrome=1" />
  <meta name="description" content="Chronoline.js : chronoline.js is a library for making a chronology timeline out of events on a horizontal timescale." />

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
  <link rel="stylesheet" type="text/css" href="css/jquery.qtip.min.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
  <script type="text/javascript" src="js/jquery.qtip.min.js"></script>
  <script type="text/javascript" src="js/raphael-min.js"></script>
  <script type="text/javascript" src="js/dragdivscroll.js"></script> 
   <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
  
  <style type="text/css">
	pre {font-family:Tahoma;
		 padding:0;
		 margin:0;
	}
  </style>
<script type="text/javascript">
      $(document).ready(function(){
      
      	var monthNames = ['January','February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var yearNames = [2011, 2012];
		

		/*for(var j=0; j<yearNames.length; j++){			
			for(var i=0; i<monthNames.length; i++){
		    	$("#monthband").append($("<td class='month'>" + monthNames[i].substring (0,3) + "</td>"));
			}
			$("#yearband").append($("<td class='year' colspan='12'>" + yearNames[j] + "</td>"));
		}*/
    
    	for(var j=yearNames.length-1; j>=0; j--){			
			for(var i=monthNames.length-1; i>=0; i--){
		    	$("#monthband").append($("<td class='month'>" + monthNames[i].substring (0,3) + "</td>"));
			}
			$("#yearband").append($("<td class='year' colspan='12'>" + yearNames[j] + "</td>"));
		}
    
     	$("#divTest").resizable({
     	 	minWidth: 120,
       		maxHeight: 300,
        	minHeight: 150,
        	maxwidth:120,
       		handles:'s',
        	resize: function(event, ui) {
            	$( "#divHeight" ).empty().append("height: " + $(this).height());
         	}
      	 });
      
   	 	$(".ui-resizable-s").dblclick(function(){
        	$("#divTest").height(150);
      	 });
      	 
	  	$(".contact").on('click', function(){
			var name = $(this).text();	
			if($.trim(name) != '') {
				$.post('ajax/viz.php', {name:name}, function(data){
					$('div#viz').html(data);
					var duration = document.getElementsByClassName('time');
					for(var i=0; i<duration.length; i++){
					    var oneDuration = duration[i];
						var timeString = duration[i].innerHTML;
						
						var time = new Date(Date.parse(timeString.replace(/-/g, " ")));
						var year = time.getFullYear();
						var year1 = 0;
						var year2 = 1;
						var month = time.getMonth();
						var date = time.getDate();
						var hour = time.getHours();
						var minute = time.getMinutes();
						var second = time.getSeconds();
						var number = i+1;
						var q = time.getTime();
						
						if(year == yearNames[0]){
						
								if(month == monthNames.indexOf("January")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("February")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("March")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("April")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("May")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("June")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("July")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("August")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("September")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("October")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("November")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("December")){
									$("div.time:nth-child("+ number +")").css("margin-left", year1*1525+month*128+date*4);
								}
						}else if(year == yearNames[1]){
								if(month == monthNames.indexOf("January")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("February")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("March")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("April")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("May")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("June")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+ month*128+date*4);
								}else if(month == monthNames.indexOf("July")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+ month*128+date*4);
								}else if(month == monthNames.indexOf("August")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+ month*128+date*4);
								}else if(month == monthNames.indexOf("September")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("October")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("November")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+month*128+date*4);
								}else if(month == monthNames.indexOf("December")){
									$("div.time:nth-child("+ number +")").css("margin-left", year2*1525+month*128+date*4);
								}
						
						}
					}
					
					$("div.time").on('click', function(){
		 				var date = $(this).text();
		 				if($.trim(date) != '') {
		 					$.post('ajax/messages.php', {date:date}, function(data2){
		 						$('div#bottomDiv pre').html(data2);
		 					})
		 				}
		 			})

					
					
				})
			}
		 }); 
		 
		$( "#sortable" ).sortable();
        $( "#sortable" ).disableSelection();
		
    });
  </script>

<title>Email Visualization</title>
</head>

<body>
	<?php include 'db/connect.php'; ?>
	<div class="leftDiv">
		<?php include 'ajax/profile.php'; ?>
		<div id="sortable">
			<?php include 'ajax/contactsFrequency.php'; ?>
		</div>
		<button name="subject" type="submit" id="frequency">Frequency</button>
		<button name="subject" type="submit" id="recency">Recency</button>
		<button name="subject" type="submit" id="alphabet">Alphabet</button>
	</div>
	<div class="rightDiv">
		<div id='topDiv'>
 			<div id='divTest'>
 			 	<table id="timebind" border="0" cellspacing="0">
 			 		<tr id="yearband">
 					</tr>
 					<tr id="monthband">
 					</tr>
 				</table>
 				<div id='viz'>
 				</div>
 			</div>
 		</div>
 		<div id="bottomDiv">
 			<pre >
 			</pre>
 		</div>
	</div>
	<?php include 'db/close.php'; ?>
	
</body>
<script type='text/javascript'>
  new DragDivScroll( 'divTest' );
</script>

</html>