<?php
 include "db_connection.php";   

 $query = 'SELECT * FROM projects';

 $db_result = $conn->query($query); 
 
 $bigArray = array();


 foreach ($db_result as $row){   
   $smallArray = array($row['name'], $row['description'], $row['time_coding'], $row['photo']);
   array_push($bigArray, $smallArray);
 }  

   echo json_encode($bigArray);

  //  var_dump($bigArray);
    $conn = null;
 ?>
