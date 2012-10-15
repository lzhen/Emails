$(document).ready(function(){

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
