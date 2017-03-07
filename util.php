<?php
/*
add db entry for removed items

fix return statements

change all and last functions to take action as input
*/
require_once('db.php');
function remove_event($id){}


function undo_last(){
    $result= mysql_query("SELECT * FROM Shaq order by CAST(id AS UNSIGNED ) DESC limit 1");

    if($result === FALSE) {
        die(mysql_error());
    }

     while($row = mysql_fetch_array($result)){
        #assert id exists and is num
          $id=$row['id'];
          
     }
      $delete= mysql_query("DELETE FROM Shaq WHERE id=$id");

     if($delete === FALSE) {
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


#remove last_*() replace with last_action(*action_param)
function last_action($action){}

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

?>
