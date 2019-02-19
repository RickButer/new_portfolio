<?php
 include "db_connection.php";   

 $query = 'SELECT * FROM projects';

 $db_result = $conn->query($query);  

 do ($db_result $row)

   $result = mysql_query("SELECT * FROM projects");
   $rows = array();
   while($r = mysql_fetch_assoc($db_result)) {
   $rows['name'],['time_coding'],['description'],['photo'] = $r;
   }

   print json_encode($rows);

    $conn = null;
 ?>
