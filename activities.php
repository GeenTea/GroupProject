<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="shortcut icon" href="./img/ed7e618b16ff89c1ac6e873a459f4cd5.png" type="image/x-icon">
    <title>Wrexham</title>
</head>
<body>
    <div class="white-scene"></div>
    <?php
        include "./component/header.php";
    ?>
    <main id="main-legalAndPolicies">
        <div id="legalAndPolicies-Title">
            <center>
                <h1>Activities</h1>
            </center> 
        </div>
        <div class="flex">
            <div class="center-cart">
                <!-- cart 1 -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-activities">
                        <center>
                            <h1>SPORTS ON S4C</h1>
                            <br>
                            <p>On matchdays we view sport shows and matches together on S4C. This allows us to practice Welsh and have a great time together.</p>
                            <br>
                            <br>
                            <img src=".\img\activities\gkk23iyx.png" alt="">
                        </center>
                    </div>
                    
                </div>
                <!-- cart 2 -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-activities">
                        <center>
                            <h1 id="practice">PRACTICE WELSH</h1>
                            <p>Clwb Clebran, every Thursday evening, gives Welsh language learners the opportunity to practice in an informal atmosphere outside the classroom.</p>
                            <br>
                            <br>
                            <img src=".\img\activities\bvtxxlwu.png" alt="" id="practice-img">
                        </center>
                    </div>
                </div>
                <!-- cart 3 -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-activities">
                        <center>
                            <h1>& MORE</h1>
                            <p>There are also many non-Welsh language activities e.g. darts, live bands on a Saturday night, but even on those nights, the Welsh spirit and culture is evident.</p>
                            <img src=".\img\activities\z934zzun.png" alt="" id="party-img">
                            <img src=".\img\activities\e9xfhxr0.png" alt="" id="dart-img">
                            
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer id="footer-profile"> 
        <center>
            <div id="contact-info">
                <p id="contact-info-title">CONTACT INFO</p>
                <p id="conctact-info-text"><a href="https://maps.app.goo.gl/5QMd7n5NWni1pyDm9">Address: 10 High Street, Wrexham,  LL13 8HP, Wales</a></p>
                <p id="conctact-info-text">Phone Number: 01978 123456</p>
                <p id="conctact-info-text">e-mail address: info@wrexham.welsh.centre.uk</p>
            </div>
        </center>
        <center>
            <div id="open-hour">
                <p id="open-hour-title">Opening Hours</p>
                <p id="open-hour-text">Monday - Friday: 08:00 - 21:00 Saturday - Sunday: 10:00 - 22:00</p>
            </div>
        </center>
        <center>
            <p id="Copyright-symbol">© [2025] Wrexham Welsh Centre. All Rights Reserved</p>
        </center>
        <div id="social-media">
            <h3 id="social-media-title">Social Media</h3>
            <div class="flex">
                <img src="./img/footer/154f6b30438f040c6a12fb337265580b.png" alt="instagram"><a href="https://www.instagram.com/instagram"><p>Instagram</p></a>
            </div>
            <div class="flex">
                <img src="./img/footer/0d9f88246f5d43a8691aa6ad8d41c53f.png" alt="facebook"><a href="https://www.facebook.com/meta"><p>Facebook</p></a>
            </div>
        </div>
        <div id="Legal-and-Policies">
            <p id="Legal-title">Legal & Policies</p>
            <div id="legal-text">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a>
                <a href="#">Cookies</a>
            </div>
        </div>
    </footer>

    <script src="./js/language.js"></script>
    <script src="./js/burger-menu.js"></script>
</body>
</html>