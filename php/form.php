<?php
session_start();
?>

<form action="form_handler.php" method="GET">


        <div><label>Name of the project VARCHAR</label><br />
            <input type="text" name="project_name" autofocus required></div>


        <div><label>description VARCHAR 200 characters</label><br />
            <input type="text" name="description"></div>

        <div><label>photo</label><br />
            <input type="text" name="photo"></div>

        <div><label>time spent coding since you made this</label><br />
            <input type="text" name="time_coding"></div>

        <div><button type="submit">submit</button></div>

</form>