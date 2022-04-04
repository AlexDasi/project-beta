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
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&family=Roboto:wght@300;400&family=Yeseva+One&display=swap" rel="stylesheet">        <link rel="stylesheet" href="css/style.css">

        
    </head>


<body>

<?php

include 'phpelements/nav.php'

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
            <p class="yesevaLarge">Bring a festive boost to your everyday style</p>
        </div>
    </div>
    <div class="about__secondary">
        <div class="about__secondary--div1">
            <p class="yesevaSmall">A new twist to a classic piece.</p>
            <p class="p-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque fermentum id aliquet vestibulum, diam gravida faucibus. </p>
        </div>
        <div class="about__secondary--div2">
            <p class="yesevaSmall">Not just for beach parties and dads.</p>
            <p class="p-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque fermentum id aliquet vestibulum, diam gravida faucibus. </p>
        </div>        
        <div class="about__secondary--div3">
            <p class="yesevaSmall">Create and share your unique designs.</p>
            <p class="p-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque fermentum id aliquet vestibulum, diam gravida faucibus. </p>
        </div>
    </div>
</section>


<div class="about__images--bkg">
        <div class="about__images--front"></div>
</div>

<section class="about__third">

    <div class="about__third--content">
        <h3 class="about__third--content--h3">it all started as a simple dream.</h3>
        <p class="about__third--content--p p-small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem neque totam, doloremque eligendi cum animi laboriosam tenetur quasi illum quidem quas distinctio ipsam sequi similique! Rem sequi hic dolorum quas.</p>
    </div>

    <div class="about__third--fl">
        <svg width="132" height="96" viewBox="0 0 132 96" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M88.3747 62.3908C80.7592 60.1022 74.3061 57.4733 68.8668 52.8055C66.1235 50.4508 63.7034 47.7983 61.8393 44.7064C58.1332 38.5672 52.3629 36.6611 45.6655 36.7976C42.703 36.8598 40.1106 38.067 38.1808 40.4537C37.3504 41.4813 36.5109 42.5064 35.6433 43.5093C34.6907 44.6112 33.5745 44.5067 33.1308 43.128C32.8194 42.1642 32.7417 41.0003 32.9486 40.01C34.1786 34.1477 39.0458 29.975 45.3022 29.8128C53.5134 29.6053 60.4677 32.6896 64.8552 39.702C71.5397 50.3894 81.5938 55.243 93.3767 57.515C95.469 57.9199 97.6036 58.1854 99.7313 58.3129C108.463 58.8335 114.83 54.6055 119.577 47.7934C122.394 43.7476 121.485 39.4375 117.566 35.4204C116.988 34.8326 116.013 34.4741 115.165 34.3297C108.991 33.2783 103.716 35.2843 99.0875 39.273C97.9106 40.2855 97.4566 41.7252 97.5701 43.2099C97.7011 44.9377 98.0318 46.6655 98.3995 48.3643C98.725 49.8572 98.4044 50.2723 96.8818 49.9762C93.8606 49.3855 91.8174 47.6707 90.7786 44.7512C89.0181 39.8192 90.2628 34.992 94.3631 31.7374C101.278 26.2456 109.036 24.5305 117.622 26.8699C120.1 27.5436 122.091 28.9236 123.652 30.9664C129.491 38.5963 129.133 47.6009 122.436 54.4788C115.041 62.0698 106.074 65.3872 95.4485 63.6296C92.798 63.182 90.1514 62.7015 88.3747 62.3908Z" fill="#E6F6B7"/>
                <path d="M27.3622 57.4966C22.5523 56.0765 17.9996 52.7699 15.1134 47.405C10.8428 39.4657 13.9067 30.0479 21.8988 26.7515C23.4311 26.1211 25.1959 25.913 26.8724 25.798C28.4953 25.6832 29.6823 26.6141 29.9768 27.768C30.2614 28.9046 29.6812 30.0527 28.2741 30.9063C27.1414 31.5902 25.9322 32.1417 24.8007 32.821C19.4212 36.0344 18.2412 41.6378 22.1283 46.5559C26.0446 51.5111 31.3065 53.5338 37.5527 52.5372C38.9916 52.3098 40.4367 51.4957 41.6568 50.6309C43.6296 49.2285 45.3765 49.1421 46.4486 50.7378C47.4974 52.2932 46.8278 54.3561 44.9073 55.4904C39.8131 58.4932 34.055 59.2851 27.3622 57.4966Z" fill="#E6F6B7"/>
                <path d="M1.8285 57.8981C2.25174 57.2089 2.88041 55.8258 3.82753 54.7079C5.71145 52.4742 8.86997 52.3526 10.9844 54.3832C12.0186 55.3754 12.959 56.5175 13.7237 57.7341C15.3843 60.3679 14.725 63.3917 12.2197 65.3275C9.50652 67.4216 6.8741 67.3243 4.54583 64.9834C3.79738 64.2332 3.10836 63.4066 2.46876 62.5591C1.54898 61.3399 1.29647 59.92 1.8285 57.8981Z" fill="#E6F6B7"/>
                <path d="M82.7604 32.2087C82.376 34.7517 82.0325 37.3057 81.5833 39.8362C81.4925 40.3567 81.1093 41.042 80.682 41.2193C80.2707 41.3913 79.4633 41.17 79.1062 40.8311C76.6364 38.4913 73.6215 37.0414 70.638 35.5464C69.6255 35.0368 68.9894 34.3215 68.9981 33.1808C69.0062 31.933 69.6557 31.0174 70.8304 30.6853C72.0522 30.3414 73.3313 30.1832 74.5951 29.9916C76.7005 29.6754 78.8115 29.4288 80.9136 29.1068C82.7721 28.8216 83.7877 30.2466 83.1257 32.2628C83.0085 32.246 82.8867 32.228 82.7604 32.2087Z" fill="#E6F6B7"/>
        </svg>
    </div>
</section>

<footer>

    <?php

    include 'phpelements/footer.php'

    ?>
</footer>

</body>
</html>