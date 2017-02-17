<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='./css/fullcalendar.min.css' rel='stylesheet' />
<link href='./css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='./lib/moment.min.js'></script>
<script src='./lib/jquery.min.js'></script>
<script src='./lib/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			customButtons: {
        	eat: {
            text: 'Eat',
            click: function() {
                 $.ajax({
                        url: "./shaq.php",
                        type: "POST",
                        data: { eat: "eat"},
                        success: function(response){
                             window.location.reload(true); 
                        },
                        error: function(){
                            alert('eat error!');
                        }
                    });
            }
        },
            drink: {
            text: 'Drink',
            click: function() {
                 $.ajax({
                        url: "./shaq.php",
                        type: "POST",
                        data: {drink: "drink"},
                        success: function(response){
                             window.location.reload(true);
                        },
                        error: function(){
                            alert('drink error!');
                        }
                    });
            }
        },

        pee: {
            text: 'Pee',
            click: function() {
                 $.ajax({
                        url: "./shaq.php",
                        type: "POST",
                        data: { pee: "pee"},
                        success: function(response){
                             window.location.reload(true);
                        },
                        error: function(){
                            alert('pee error!');
                        }
                    });
            }
        },
        poo: {
            text: 'Poo',
            click: function() {
                 $.ajax({
                        url: "./shaq.php",
                        type: "POST",
                        data: { poo: "poo"},
                        success: function(response){
                             window.location.reload(true);
                        },
                        error: function(){
                            alert('poo error!');
                        }
                    });
            }
        }
    },


			header: {
				left: 'eat drink pee poo',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			navLinks: true, // can click day/week names to navigate views
			defaultView: 'basicDay',
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				<?php

						$json_file='./json/events.json';
						$calender_file=file_get_contents($json_file);
						echo $calender_file;


				 ?>
			]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 18px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
</head>
<body>

	<div id='calendar'></div>

</body>
</html>
