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
                <h1>Legal & Policies</h1>
            </center> 
        </div>
        <div class="flex">
            <div class="center-cart">
                <!-- cart 1 -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-legal">
                        <center>
                            <h1>Privacy</h1>
                            <p><u>Information we collect:</u></p>
                            <p>Personal details. Website usage data.</p>
                            <br>
                            <p><u>How we use your information:</u></p>
                            <p>To provide services. To improve our website and services.
                            To comply with legal requirements.</p>
                        </center>
                    </div>
                    
                </div>
                <!-- cart 2 -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-legal">
                        <center>
                            <h1>Cookies</h1>
                            <p>Our website uses cookies to enhance your experience.</p>
                            <br>
                            <br>
                            <p>You can manage cookie preferences through your browser settings.</p>
                        </center>
                    </div>
                </div>
                <!-- cart 3 -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-legal">
                        <center>
                            <h1>Terms of Use</h1>
                            <p>By using the Wrexham Welsh Centre website, you agree to the following terms:</p>
                            <ul>
                                <li>Use of Content: All content is for informational purposes. Do not copy or distribute without permission.</li>
                                <li>User Conduct: Be respectful when interacting with our site. No harmful or unlawful activity is allowed.</li>
                                <li>Privacy: We collect and use data as outlined in our Privacy Policy.</li>
                            </ul>
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