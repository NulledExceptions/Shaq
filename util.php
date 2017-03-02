<?php
require_once('db.php');

function undo_event($eventid){
    $result= mysql_query("SELECT * FROM Shaq order by CAST(id AS UNSIGNED ) DESC limit 1");

    if($result === FALSE) {
        die(mysql_error());
    }

     while($row = mysql_fetch_array($result)){
          echo $row['action'].' '.$row['time'].' '.$row['id']. '<br>';
          echo '****';
          $id=$row['id'];
          echo $id;
     }

     $delete= mysql_query("DELETE FROM Shaq WHERE id='".$row['id']."'");
      $delete= mysql_query("DELETE FROM Shaq WHERE id=$id");
    #echo "DELETE FROM Shaq WHERE id=".$row['id']."";
     if($delete === FALSE) {
         die(mysql_error());


          }

     echo "<br>NEW last entry:";
     $result= mysql_query("SELECT * FROM Shaq order by CAST(id AS UNSIGNED ) DESC limit 1");
    if($result === FALSE) {
       die(mysql_error());
    }
    }


function last_entry(){
  $result= mysql_query("SELECT * FROM Shaq order by CAST(id AS UNSIGNED ) DESC limit 1");


   if($result === FALSE) {
       die(mysql_error());
   }

    while($row = mysql_fetch_array($result)){
         echo $row['id'];
    }

}



 function last_action(){}

function last_pee(){
   $result= mysql_query("SELECT * FROM Shaq WHERE action='pee' order by CAST(id AS UNSIGNED ) DESC limit 1");

   if($result === FALSE) {
       die(mysql_error());
   }

    // while($row = mysql_fetch_array($result)){
    //      echo $row['action'].' '.$row['time'].' '.$row['id']. '<br>';
    // }
    $peetime='';
    while($row = mysql_fetch_array($result)){
         $peetime=$row['time'];
    }
    return $peetime;
}
//LAST ENTRY

function last_poo(){
  $result= mysql_query("SELECT * FROM Shaq WHERE action='poo' order by CAST(id AS UNSIGNED ) DESC limit 1");

  if($result === FALSE) {
      die(mysql_error());
  }

  $pootime='';
   while($row = mysql_fetch_array($result)){
    
        $pootime=$row['time'];


   }
   return $pootime;
}

 //LAST ENTRY

 function last_eat(){
   $result= mysql_query("SELECT * FROM Shaq WHERE action='eat' order by CAST(id AS UNSIGNED ) DESC limit 1");

   if($result === FALSE) {
       die(mysql_error());
   }

    while($row = mysql_fetch_array($result)){
         echo $row['time'];
    }



}


function all_events(){
    //EVENT FILTERING
    $result= mysql_query("SELECT * FROM Shaq");
    if($result === FALSE) {
        die(mysql_error());
    }

  echo '{"title":"poo","start":"2017-02-11 20:17:29","color":"brown"}';
    while($row = mysql_fetch_array($result)){
      #echo $row['action'].' '.$row['epoch_time'].' '.$row['id']. '<br>';;
      #{"title":"poo","start":"2017-02-11 20:17:29","color":"brown"}
      echo ',{"title":"'.$row['action'].'","start":"'.$row['time'].'","id":"'.$row['id'].'","color":"'.$row['color'].'","textColor":"'.$row['text_color'].'"}';
      #echo ',{"title":"'.$row['action'].'","start":"'.$row['time'].'"}';

   }



 }
//var_dump($page_hits);

function all_eating(){
    $result= mysql_query("SELECT * FROM Shaq WHERE action ='eat'");
    if($result === FALSE) {
        die(mysql_error());
    }

    while($row = mysql_fetch_array($result)){
         echo $row['action'].' '.$row['time'].' '.$row['id']. '<br>';
    }
}

function all_drinking(){
$result= mysql_query("SELECT * FROM Shaq WHERE action ='drink'");
if($result === FALSE) {
    die(mysql_error());
}

while($row = mysql_fetch_array($result)){
     echo $row['action'].' '.$row['time'].' '.$row['id']. '<br>';
}

}

function all_pee(){
    $result= mysql_query("SELECT * FROM Shaq WHERE action ='pee'");
    if($result === FALSE) {
        die(mysql_error());
    }

    while($row = mysql_fetch_array($result)){
         echo $row['action'].' '.$row['time'].' '.$row['id']. '<br>';
    }

}

function all_poo(){
$result= mysql_query("SELECT * FROM Shaq WHERE action ='poo'");
if($result === FALSE) {
    die(mysql_error());
}

while($row = mysql_fetch_array($result)){
     echo $row['action'].' '.$row['time'].' '.$row['id']. '<br>';
}
}
#all_events();
#last_poo();
?>
