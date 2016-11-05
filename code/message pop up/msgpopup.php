<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>dialog demo</title>
    <link rel="stylesheet" href="css/le-frog/jquery-ui-1.10.4.custom.min.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js"></script></head>
    <body>
    <button id="opener">Click Please!</button>
    <div id="mydialog" title="Message">Error</div>
	
    <script>
    $(document).ready(function(){
       $( "#mydialog" ).dialog({ autoOpen: false });
       $( "#opener" ).click(function() {
         $( "#mydialog" ).dialog( "open" );
		 
		 
       });
    });
    </script>
    </body>
    </html>  

