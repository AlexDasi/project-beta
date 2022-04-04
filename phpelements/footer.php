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

    <div class="footer">


        <div class="footer__logo">

            <svg width="98" height="182" viewBox="0 0 98 182" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M34.9142 158.107C34.3897 164.946 31.2527 170.211 27.4399 170.211C23.2641 170.211 19.8749 163.887 19.8749 156.09C19.8749 148.293 23.2641 141.969 27.4399 141.969V134.908H7.2666V175.255H47.6133V158.107H34.9142Z" fill="#01003C"/>
        <path d="M90.3327 49.4673H80.8394V89.814H90.3327V49.4673Z" fill="#01003C"/>
        <path d="M50.4952 49.4673C50.4952 57.2643 47.0776 63.5886 42.8666 63.5886C38.6556 63.5886 35.238 57.2643 35.238 49.4673H7.2666V89.814H19.9809V77.71C19.9809 69.913 23.3985 63.5886 27.6095 63.5886C31.8204 63.5886 35.238 69.913 35.238 77.71V89.814H50.4952V77.71C50.4952 69.913 53.9128 63.5886 58.1237 63.5886C62.3347 63.5886 65.7523 69.913 65.7523 77.71V89.814H78.4666V49.4673H50.4952Z" fill="#01003C"/>
        <path d="M49.9865 6.7478V47.0945H62.6856C63.2101 40.2557 66.3471 34.9905 70.1598 34.9905C73.9726 34.9905 77.1096 40.2557 77.6341 47.0945H90.3332V6.7478H49.9865ZM70.1598 27.9298C68.6636 27.9298 67.201 27.4861 65.957 26.6549C64.7129 25.8236 63.7433 24.6421 63.1707 23.2598C62.5981 21.8775 62.4483 20.3564 62.7402 18.8889C63.0321 17.4215 63.7526 16.0735 64.8106 15.0155C65.8686 13.9576 67.2165 13.2371 68.684 12.9452C70.1515 12.6533 71.6725 12.8031 73.0548 13.3757C74.4372 13.9482 75.6187 14.9179 76.4499 16.1619C77.2812 17.406 77.7248 18.8686 77.7248 20.3648C77.7248 22.3712 76.9278 24.2954 75.5091 25.7141C74.0904 27.1328 72.1662 27.9298 70.1598 27.9298Z" fill="#01003C"/>
        <path d="M49.9865 134.908V175.255H62.6856C63.2101 168.416 66.3471 163.151 70.1598 163.151C73.9726 163.151 77.1096 168.416 77.6341 175.255H90.3332V134.908H49.9865ZM70.1598 156.09C68.6636 156.09 67.201 155.646 65.957 154.815C64.7129 153.984 63.7433 152.802 63.1707 151.42C62.5981 150.038 62.4483 148.517 62.7402 147.049C63.0321 145.582 63.7526 144.234 64.8106 143.176C65.8686 142.118 67.2165 141.397 68.684 141.105C70.1515 140.813 71.6725 140.963 73.0548 141.536C74.4372 142.108 75.6187 143.078 76.4499 144.322C77.2812 145.566 77.7248 147.029 77.7248 148.525C77.7248 150.531 76.9278 152.456 75.5091 153.874C74.0904 155.293 72.1662 156.09 70.1598 156.09Z" fill="#01003C"/>
        <path d="M34.9142 28.9385C34.3897 35.7772 31.2527 41.0425 27.4399 41.0425C23.2641 41.0425 19.8749 34.7181 19.8749 26.9211C19.8749 19.1241 23.2641 12.7998 27.4399 12.7998C31.2527 12.7998 34.3897 18.065 34.9142 24.9038H47.6133V6.7478H7.2666V47.0945H47.6133V28.9385H34.9142Z" fill="#01003C"/>
        <path d="M49.9865 92.1875V132.534H90.3332V92.1875H49.9865ZM70.1598 126.482C65.984 126.482 62.5948 120.158 62.5948 112.361C62.5948 104.564 65.984 98.2395 70.1598 98.2395C74.3357 98.2395 77.7248 104.564 77.7248 112.361C77.7248 120.158 74.3357 126.482 70.1598 126.482Z" fill="#01003C"/>
        <path d="M41.5613 111.251C33.7643 111.251 27.4399 107.862 27.4399 103.686C27.4399 99.5104 33.7643 96.1213 41.5613 96.1213H47.6133V92.1875H7.2666V113.47H13.3186C21.1156 113.47 27.4399 116.859 27.4399 121.035C27.4399 125.211 21.1156 128.6 13.3186 128.6H7.2666V132.534H47.6133V111.251H41.5613Z" fill="#01003C"/>
        <path d="M2.52002 1H1.52002V2V180V181H2.52002H95.08H96.08V180V2V1H95.08H2.52002Z" stroke="#01003C" stroke-width="2" stroke-miterlimit="10"/>
        </svg>

        </div>

        <div class="footer__thanks">
            <h2>Thanks!</h2>
        </div>

        <section class="footer__bottom">
            <div class="footer__bottom--text footerText">
                <p>Copyright 2022<a class="footerLink" href="www.alexdasi.com">Alex Dasi</a></p>
            </div>
            <div class="footer__bottom--line"></div>
            <div class="footer__bottom--text footerText">
                <a class="footerLink" href="https://www.linkedin.com/in/alexdasi/">Linkedin</a>
                <a class="footerLink" href="https://www.instagram.com/alexdasi/?hl=es">Instagram</a>
                <a class="footerLink" href="https://twitter.com/alejandrodasi">Twitter</a>
            </div>
            <div class="footer__bottom--line"></div>
            <div class="footer__bottom--text footerText">
                <a class="footerLink" href="https://www.linkedin.com/in/alexdasi/">Privacy</a>
                <a class="footerLink" href="https://www.instagram.com/alexdasi/?hl=es">Terms & Conditions</a>
                <a class="footerLink" href="https://twitter.com/alejandrodasi">Legal</a>
            </div>
        </section>

    </div>
</body>
