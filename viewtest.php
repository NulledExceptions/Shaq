<?php

// REQUIRE DB CONNECTION
require_once('db.php');

// GET PAGE HIT INFO FROM DB
//$sql = "SELECT * FROM Shaq";
//$query = $db->prepare($sql);
//$query->execute();
//$page_hits = $query->fetchAll();



$result= mysql_query("SELECT * FROM Shaq");
 while($row = mysql_fetch_array($result)){
      echo $row['action'].' '.$row['time'].' '.$row['id']. '<br>';;
 }
//var_dump($page_hits);

?>
