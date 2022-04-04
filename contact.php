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

<div class="contact">
    <section class="contact__text"> <h2 class="contact__h1">Hey there! <br> We would love to hear from you</h2></section>



    <div class="contact__form">
        <div class="cf--left">
            <div class="contact__form--line">
                <label for="firstname" class="p-small">FIRST NAME*</label> 
                <input id="firstname" required="required" name="firstname" class="t-input--text" type="text">
            </div> 
            <div class="contact__form--line">
                <label for="lastname" class="p-small">LAST NAME *</label> 
                <input id="lastname" required="required" name="lastname" class="t-input--text" type="text">
            </div> 
            <div class="contact__form--line">
                <label for="email" class="p-small">EMAIL*</label> 
                <input id="email" required="required" name="email" class="t-input--text" type="text">
            </div> 
            <div class="contact__form--line">
                <label for="phone" class="p-small">PHONE NUMBER</label> 
                <input id="phone" name="phone" class="t-input--text" type="text">
            </div>
        </div> 
        <div class="cf--right">
            <div class="c-Contact-form-right contact__form--line">
                <label for="message" class="p-small">YOUR MESSAGE*</label> 
                <textarea id="message" required="required" name="message" type="text" class="c-Contact-form-right-textarea t-textarea">
                </textarea>
            </div>
        </div>
    </div>

</div>
    

<footer>


<?php

include 'phpelements/footer.php'

?>
</footer>

</body>