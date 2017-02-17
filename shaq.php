<?php 
date_default_timezone_set("America/Chicago");


$action="";
$color="";
 if(isset($_POST['eat'])){
 	$action='eat';
  $color='red';
 }

 else if(isset($_POST['drink'])){
 	 	$action='drink';
    $color='blue';
}
 
else  if(isset($_POST['walk'])){
 	 	$action='walk';
    $color='green';
}
 
 else if(isset($_POST['pee'])){
 	 	$action='pee';
    $color='yellow';
 }
 
 else if(isset($_POST['poo'])){
 	 	$action='poo';
    $color='brown';
 }
 


	



echo '<button type="submit" form="eat" value="Submit">Eat</button> <br>';

echo '<button type="submit" form="drink" value="Submit">Drink</button> <br>';

echo '<button type="submit" form="walk" value="Submit">Walk</button> <br>';

echo '<button type="submit" form="pee" value="Submit">Pee</button> <br>';


echo '<button type="submit" form="poo" value="Submit">Poo</button> <br>';






$json_file='./json/events.json';
$time = date("Y-m-d") .' '.date("H:i:s");
$break ='<br>';
$textColor = "black";
echo $time;


$calender_array = array("title" => $action, "start" => $time, "color"=> $color,"textColor"=>$textColor, "id"=> $action);
$calender_array=json_encode($calender_array);
echo $calender_array;
$f=file_put_contents($json_file, ','.$calender_array.PHP_EOL , FILE_APPEND | LOCK_EX);
if ($f) print 1;
else print 0;






  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>shaq cal</title>
  </head>
  <body>
<form action="shaq.php" method="post" id="walk">
  <input type="hidden" name="walk" value="yes"><br>
</form>



<form action="shaq.php" method="post" id="eat">
  <input type="hidden" name="eat" value="yes"><br>
</form>



<form action="shaq.php" method="post" id="drink">
  <input type="hidden" name="drink" value="yes"><br>
</form>


<form action="shaq.php" method="post" id="pee">
  <input type="hidden" name="pee" value="yes"><br>
</form>


<form action="shaq.php" method="post" id="poo">
  <input type="hidden" name="poo" value="yes"><br>
</form>



  </body>
  </html>


  
