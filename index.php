<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&family=Roboto:wght@300;400&family=Yeseva+One&display=swap" rel="stylesheet">    <link rel="stylesheet" href="css/style.css">

    
</head>
<body>

<?php

include 'phpelements/nav.php'

?>

    <!-- header -->

    <header class="container">
        <span class="intro__text">
            <h1>NOT YOUR TYPICAL HAWAIIAN SHIRT.</h1>
            <img class="hero rellax mobileHidden" data-rellax-speed="7" src="content/images/hero-image.jpg">
            <img class="hero desktopHidden" src="content/images/hero-image.jpg">
            <p class="intro__text--paragraph">We put the tools, you do your thing. Come on in and check why <a href="/about.php">we do what we do.</a></p>
            <svg class= "fl-header rellax mobileHidden" data-rellax-speed="-6" width="262" height="334" viewBox="0 0 262 334" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 273.353C1.28382 247.389 10.9274 223.313 32.9614 206.853C39.9627 201.613 47.2476 196.828 54.5325 192.111C67.5499 183.686 81.8063 180.485 96.6598 179.795C112.513 179.053 128.382 178.497 144.176 177.048C173.838 174.353 199.589 161.733 220.026 136.781C224.057 131.861 227.654 126.436 230.968 120.893C234.312 115.3 233.775 109.268 230.879 103.489C230.282 102.293 229.61 101.13 228.878 100.035C211.726 74.3248 173.928 77.3744 160.373 105.578C157.298 111.981 156.357 118.804 157.223 126.032C158.194 134.17 156.387 139.089 151.625 141.802C146.774 144.565 140.593 143.268 135.846 138.365C130.995 133.344 128.77 126.857 128.218 119.613C127.412 109.099 129.278 99.1085 133.756 89.9262C160.985 33.9902 220.892 37.6632 248.598 74.8472C265.303 97.2553 266.796 122.207 250.793 145.256C227.221 179.205 197.693 202.843 159.015 210.492C138.399 214.569 117.768 217.888 96.8986 219.253C86.1056 219.961 76.1634 223.6 66.9976 230.086C63.8925 232.277 60.8024 234.501 57.5779 236.472C40.5897 246.884 33.9018 263.85 33.5883 284.708C33.4988 290.336 34.3795 295.98 34.8572 301.607C35.738 311.817 42.6796 317.714 47.9492 324.756C50.9498 328.766 50.7109 331.007 46.0384 332.187C42.5452 333.063 38.634 333.635 35.2304 332.742C21.601 329.187 10.8826 321.151 5.18003 305.988C1.64205 296.502 0.104497 286.646 0 273.353Z" fill="white"/>
                <path d="M133.272 14.8675C143.078 12.703 152.837 10.3237 162.707 8.58634C164.626 8.25455 168.136 9.87 168.693 11.5249C169.548 14.0992 169.491 18.5186 168.04 20.3103C164.744 24.3939 160.638 27.8766 156.389 30.6773C148.565 35.8283 140.206 39.9903 132.382 45.1414C123.273 51.1447 116.533 59.7847 111.993 70.6491C108.601 78.7493 103.672 81.6375 98.355 79.1842C93.1497 76.769 91.2146 70.5023 93.6066 62.2028C98.9891 43.4875 110.177 30.2494 125.108 20.7115C127.813 18.9788 130.67 17.521 133.447 15.9367C133.365 15.5913 133.325 15.2261 133.272 14.8675Z" fill="white"/>
            </svg>
            <svg class= "fl-header rellax desktopHidden" data-rellax-speed="-6" width="262" height="334" viewBox="0 0 262 334" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 273.353C1.28382 247.389 10.9274 223.313 32.9614 206.853C39.9627 201.613 47.2476 196.828 54.5325 192.111C67.5499 183.686 81.8063 180.485 96.6598 179.795C112.513 179.053 128.382 178.497 144.176 177.048C173.838 174.353 199.589 161.733 220.026 136.781C224.057 131.861 227.654 126.436 230.968 120.893C234.312 115.3 233.775 109.268 230.879 103.489C230.282 102.293 229.61 101.13 228.878 100.035C211.726 74.3248 173.928 77.3744 160.373 105.578C157.298 111.981 156.357 118.804 157.223 126.032C158.194 134.17 156.387 139.089 151.625 141.802C146.774 144.565 140.593 143.268 135.846 138.365C130.995 133.344 128.77 126.857 128.218 119.613C127.412 109.099 129.278 99.1085 133.756 89.9262C160.985 33.9902 220.892 37.6632 248.598 74.8472C265.303 97.2553 266.796 122.207 250.793 145.256C227.221 179.205 197.693 202.843 159.015 210.492C138.399 214.569 117.768 217.888 96.8986 219.253C86.1056 219.961 76.1634 223.6 66.9976 230.086C63.8925 232.277 60.8024 234.501 57.5779 236.472C40.5897 246.884 33.9018 263.85 33.5883 284.708C33.4988 290.336 34.3795 295.98 34.8572 301.607C35.738 311.817 42.6796 317.714 47.9492 324.756C50.9498 328.766 50.7109 331.007 46.0384 332.187C42.5452 333.063 38.634 333.635 35.2304 332.742C21.601 329.187 10.8826 321.151 5.18003 305.988C1.64205 296.502 0.104497 286.646 0 273.353Z" fill="white"/>
                <path d="M133.272 14.8675C143.078 12.703 152.837 10.3237 162.707 8.58634C164.626 8.25455 168.136 9.87 168.693 11.5249C169.548 14.0992 169.491 18.5186 168.04 20.3103C164.744 24.3939 160.638 27.8766 156.389 30.6773C148.565 35.8283 140.206 39.9903 132.382 45.1414C123.273 51.1447 116.533 59.7847 111.993 70.6491C108.601 78.7493 103.672 81.6375 98.355 79.1842C93.1497 76.769 91.2146 70.5023 93.6066 62.2028C98.9891 43.4875 110.177 30.2494 125.108 20.7115C127.813 18.9788 130.67 17.521 133.447 15.9367C133.365 15.5913 133.325 15.2261 133.272 14.8675Z" fill="white"/>
            </svg>
        </span>
    

            

    </header>

            <!--CTA-->

<section class="CTA CTA__1">
    <h2 class="desktopHidden">Only yours, actually.</h2>
    <img class="CTA__1--image" src="content/images/camisa-fl.png" alt="white shirt with flourishes"></span>
    <span class="CTA__1--text mobileHidden">
        <h2 class="color__light">Only yours, actually.</h2>
        <p class="p-medium color__white">A unique and fully interactive shirt editor where you can play with our massive set of templates and fabrics. Jump in, sit back and let yourself go.</p>
        <a class="button" href="/editor.php" target=”_blank”>Make your own</a>
    </span>
    <p class="p-medium intro__text--paragraph desktopHidden">A unique and fully interactive shirt editor where you can play with our massive set of templates and fabrics. Jump in, sit back and let yourself go.</p>
    <a class="button desktopHidden" href="/editor.php" target=”_blank”>Make your own</a>
</section>

    <!--horizontal scroll: https://medium.com/@lucas.eckman/ditch-the-carousel-creating-a-horizontal-scroll-effect-7a36c0f1c456-->


<?php

include 'phpelements/stl-home.php'

?>

            <!--CTA-2-->
<section class="CTA CTA__2">
    <div class="CTA__2--title">
        <h3 class="color__white centered-text">Check our <br> shirt editor</h3>
        <svg class="CTA__2--fl mobileHidden" width="601" height="205" viewBox="0 0 601 205" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.1624 28.9132C18.0804 19.0964 25.4062 12.4538 36.0676 9.93871C40.0756 8.99494 44.1346 8.89526 48.0982 10.2762C51.7988 11.5613 54.0619 14.4209 54.1546 17.798C54.2425 21.1395 52.1091 24.1545 48.5188 25.6465C47.353 26.1258 46.147 26.5743 44.9125 26.7874C30.6403 29.279 22.7329 38.3479 19.2213 51.7992C18.4136 54.8893 18.39 58.1872 17.9611 61.3857C17.8391 62.2888 17.539 63.1709 17.3236 64.0613C16.4624 63.6718 15.4336 63.4657 14.7575 62.8572C11.0053 59.4881 9.33492 55.0599 8.73714 50.1842C7.7889 42.5242 10.2388 35.5693 13.1624 28.9132Z" fill="white"/>
            <path d="M594.931 168.461C597.458 184.652 590.298 196.121 575.654 201.743C572.536 202.937 569.33 202.868 566.407 200.983C564.196 199.559 563.03 197.448 563.448 194.846C563.847 192.398 565.108 190.67 567.73 189.604C570.029 188.671 571.838 186.575 573.928 185.094C583.551 178.261 585.892 168.801 583.878 157.758C583.75 157.053 583.511 156.35 583.525 155.658C583.544 154.944 583.814 154.231 583.975 153.519C584.688 153.739 585.557 153.778 586.092 154.212C590.842 158.057 593.647 163.104 594.931 168.461Z" fill="white"/>
        </svg>   
    </div>
    <a class="button" href="/editor.php" target=”_blank”>Make your own</a>
    
</section>

            <!--journal-HOME-->

<section class="journalHome">

    <div class="journalHome__main">
        <div class="journalHome__main--img" alt="journal image"></div>

        <p class="journalHome__main--footer desktopHidden">Real photos from our real fields of fake cotton</p>

        <div class="journalHome__main--copy">
            <div>
                <h3 class="journalHome__main--title">ECO FRIENDLY AND FULLY SUSTAINABLE MATERIALS.</h3>
                <p class="p-medium journalHome__main--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie ac consequat libero ut. Lacus natoque nam dolor dui. Adipiscing aliquet magna nisl turpis. Adipiscing amet tempus lacus, aliquam, sem lacus nunc. Ullamcorper ultrices a mauris diam, feugiat senectus enim.</p>
                <a href="">Read more...</a>
            </div>
            <div>
                <p class="journalHome__main--footer mobileHidden">Real photos from our real fields of fake cotton</p>
            </div>
        </div>

    </div>

    <ul class="journalHome__secondary"></ul>




    
    
</section>



    <script src="js/overlay-menu.js"></script>        
    <script src="js/journal-home.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <script src="node_modules/rellax/rellax.min.js"></script>
    <script>
        var rellax = new Rellax('.rellax');
    </script>

    <script>
  //Enable Horizontal Parallax Scrolling
        var rellaxH = new Rellax('.rellaxH', {
            horizontal:true
            vertical:false
        });
    </script>
    
    <footer>

<?php

include 'phpelements/footer.php'

?>
</footer>

</body>
</html>