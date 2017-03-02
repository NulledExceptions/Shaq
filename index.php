<!DOCTYPE html>
<html>
    
        <meta charset='utf-8' />
        <link href='./css/fullcalendar.min.css' rel='stylesheet' />
        <link href='./css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <link rel="stylesheet" href="./lib/compiled/flipclock.css">
        <script src='./lib/moment.min.js'></script>
        <script src='./lib/jquery.min.js'></script>
        <script src='./lib/fullcalendar.min.js'></script>
        <script src="./lib/compiled/flipclock.js"></script>


<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            //firstDay:1,

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
        },
               text: 'Undo',
            click: function() {
                 $.ajax({
                        url: "./shaq.php",
                        type: "POST",
                        data: { undo: "id"},
                        success: function(response){
                             window.location.reload(true);
                        },
                        error: function(){
                            alert('eat error!');
                        }
                    });
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
                     require_once('./util.php');
                    all_events();


                    // $json_file='./json/events.json';
                    //  $calender_file=file_get_contents($json_file);
                    //  echo $calender_file;


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
    <div class="clock" style="margin:1em;"></div><br>
    <div class="message"></div>
    <div class="poo_clock" style="margin:1em;"></div>
    <div class="poo_message"></div>

    <script type="text/javascript">
        
        var clock;
        
        $(document).ready(function() {
            var clock;

            clock = $('.clock').FlipClock({
                clockFace: 'HourlyCounter',
                autoStart: false,
                callbacks: {
                    stop: function() {
                        $('.message').html('The clock has stopped!')
                    }
                }
            });
            
            //clock.setTime(24460);
            clock.setTime(
            <?php
            date_default_timezone_set("America/Chicago");
            require_once 'util.php';
            $peetime=last_pee();
            $currtime = date("Y-m-d") .' '.date("H:i:s");
            echo strtotime($currtime)-strtotime($peetime);



                ?>);
            clock.setCountdown(false);
            clock.start();

        });
    </script>
    

    <script type="text/javascript">
        var poo_clock;
        
        $(document).ready(function() {
            var poo_clock;

            poo_clock = $('.poo_clock').FlipClock({
                clockFace: 'HourlyCounter',
                autoStart: false,
                zoom: 0.5,
                callbacks: {
                    stop: function() {
                        $('.poo_message').html('The clock has stopped!')
                    }
                }
            });
            
            //clock.setTime(24460);
            poo_clock.setTime(
            <?php
            date_default_timezone_set("America/Chicago");
            require_once 'util.php';
            $pootime=last_poo();
            $currtime = date("Y-m-d") .' '.date("H:i:s");
            echo strtotime($currtime)-strtotime($pootime);



                ?>);
            poo_clock.setCountdown(false);

            poo_clock.start();

        });
    </script>



    <div id='calendar'></div>

</body>
</html>
