<?php

        $project_name = $_GET["project_name"]; //html name
        $description = $_GET["description"]; //html name
        $photo = $_GET["photo"]; //html name
        $time_coding = $_GET["time_coding"]; //html name
        
    
        include "db_connection.php";

        try { //database name only!
                $sql = "INSERT INTO projects (name, description, photo, time_coding)
                VALUES ('$project_name', '$description', '$photo', '$time_coding')";
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "New record created successfully";
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
    
        // header("Location: ../../index.php");

?>