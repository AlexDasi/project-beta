<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&family=Roboto:wght@300;400&family=Yeseva+One&display=swap" rel="stylesheet">    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

include 'phpelements/nav.php'

?>

<section class="journal__cover">
    <img class="journal__cover--image" src="content/images/journal/page/cover.jpg" alt="guy in a boat in Hawaii">
    <div class="journal__cover--copy">
        <h2>our journal</h2>
        <p class="journal__cover--largeP p-large">A curated selection of our most relevant stories, from some of our collaborators and friends we've met along the years.</p>
    </div>
</section>

<section class="journal__blog">

    <div class="journalHome__main">
        <div class="journalHome__main--img" alt="journal image"></div>

        <p class="journalHome__main--footer desktopHidden">Real photos from our real fields of fake cotton</p>

        <div class="journalHome__main--copy">
            <div>
                <h2 class="journalHome__main--title">ECO FRIENDLY AND FULLY SUSTAINABLE MATERIALS.</h2>
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

<footer>

<?php

include 'phpelements/footer.php'

?>
</footer>

<script src="js/journal.js"></script>

</body>