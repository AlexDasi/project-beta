<?php 
    /*$navTransparent = TRUE;*/
?>

<!DOCTYPE html>
<html lang="en">
    <!-- The canvas element is used to draw the 3D scene -->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&family=Roboto:wght@300&family=Yeseva+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

    </head>


<body>

<?php

include './phpelements/nav.php'

?>

<section class="about__cover">
    <div class="about__cover--image"  alt="guy in a boat in Hawaii"> </div>
    <div class="about__cover--copy">
        <h1>A new <br>way <br>of being yourself</h1>
        
    </div>
</section>

<section>
    <div class="about__main--h3"><h3>CUSTOM MADE SHIRTS FOR THE YOUNGS IN SPIRIT.</h3></div>
    <div class="about__main">
        <div class="about__main--img" alt="girl with hawaiian shirt"></div>
        <div class="about__main--copy">
            <p class="p-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque fermentum id aliquet vestibulum, diam gravida faucibus. Viverra sollicitudin scelerisque nam velit ut tempor at. Integer sapien sem sit eu, eget. Nulla velit et ultrices tempus. At lacus, aliquam iaculis posuere facilisi pellentesque lacus, malesuada. </p>
            <p class="yesevaLarge">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque fermentum.</p>
        </div>
    </div>
    <div class="about__secondary">
        <div class="about__secondary--div1">
            <p class="yesevaSmall">A new twist to a classic piece.</p>
            <p class="p-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque fermentum id aliquet vestibulum, diam gravida faucibus. </p>
        </div>
        <div class="about__secondary--div2">
            <p class="yesevaSmall">A new twist to a classic piece.</p>
            <p class="p-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque fermentum id aliquet vestibulum, diam gravida faucibus. </p>
        </div>        
        <div class="about__secondary--div3">
            <p class="yesevaSmall">A new twist to a classic piece.</p>
            <p class="p-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque fermentum id aliquet vestibulum, diam gravida faucibus. </p>
        </div>
    </div>
</section>


</body>