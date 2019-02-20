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
    <!-- Start typewriter animation -->
    <div class="flex_grid">
        <div class="typewriter1 typewriter flex"></div>
        <div class="typewriter2 typewriter flex"></div>
        <div class="typewriter3 typewriter flex"></div>
        <div class="space"></div>
    </div>
    <!-- start project container with AJAX -->
    <div class="full_card_container flex">
        <div class="card_container flex">
            <div class="card_txt_holder">
                <div class="card_name flex" id="name"></div>
                <div class="card_time flex" id="time"></div>
                <div class="card_description flex" id="description"></div>
            </div>
            <div class="middle_box flex">
                <div class="skills" id="skill"></div>
                <img src="" class="card_photo" id="photo" />
                <a href="" class="github flex">
                    <p>go to my github to see all my projects</p>
                </a>
            </div>
            <div class="card_arrow_box flex">
                <div class="card_arrow flex" id="ajax_call">next project</div>
            </div>
        </div>
    </div>
    <!-- start project intro to trigger the function nextProject -->
    <div class="project_intro_container" id='project_intro'>
        <div class="project_text">
            <p> I am currently studying at CodeGorilla™ in the Netherlands.<br /><br />
                I did not have any coding skills before this.<br /><br /><br />
                With every project you can see how far into the study I was at the time and which skills I used.<br /><br />
                <span>See my projects</span></p>
        </div>
    </div>
    <!-- start the about me page -->
    <div class='about_me_toggle'>
        <div class="things_I_like">
            <div class="like_big">Things about me</div>
        </div>
        <div class="things_I_like_space">
            <div class="like">Things I like</div>
            <div class="like">Things I dont like</div>
        </div>
        <div class="about_me_container">
            <div class="about_left">
                <div class="one animation1 white"><p class='p1'>coding ofcourse!</p></div>
                <div class="two animation2 white"><p class='p2'>jazz music</p></div>
                <div class="tree animation3 white"><p class='p3'>riding my motorbike</p></div>
                <div class="four animation4 white"><p class='p4'>watching the stars</p></div>
                <div class="five animation5 white"><p class='p5'>exploring new cultures</p></div>
            </div>
            <div class="about_right">
                <div class="one animation1 white"><p class='p1'>politics</p></div>
                <div class="two animation2 white"><p class='p2'>taxes</p></div>
                <div class="tree animation3 white"><p class='p3'>shots at the bar</p></div>
                <div class="four animation4 white"><p class='p4'>grumpy, negative people</p></div>
                <div class="five animation5 white"><p class='p5'>forgetting a semicolon somewere...</p></div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>
</body>

</html>