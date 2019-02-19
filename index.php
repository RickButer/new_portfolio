<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rick's portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet">
</head>

<body>
    <div class="bg"></div>

    <div class="logo_container">
        <a href="index.php" class="logo">
            < Rick's portfolio <span class="rotate">/</span> ><span class="blink"> _</span>
        </a>
        <a href="#" class="navbar" id="about_me">about me</a>
        <a href="#" class="navbar" id="my_projects">my projects</a>
        <a href="#" class="navbar" id="contact_me">contact me</a>
    </div>

<!-- 
    <div class="flex_grid">
            <div class="typewriter1 typewriter flex"></div>
            <div class="typewriter2 typewriter flex"></div>
            <div class="typewriter3 typewriter flex"></div>
            <div class="space"></div>
    </div> -->
      
    <!-- <div class="full_card_container flex">
            <div class="card_container flex">
               <div class="card_txt_holder">
                  <div class="card_name flex"></div>
                  <div class="card_time flex"></div>
                  <div class="card_description flex"></div>
               </div>
                <img src="" class="card_photo"/>
            <div class="card_arrow_box flex">
               <div class="card_arrow flex" id="ajax_call">next project</div>
            </div>
         </div>
         </div> -->

         <?php
         include 'php/projects_card.php'
         ?>



    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>

</html>