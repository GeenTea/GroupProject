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
                <h1 id="Legal-title">Legal & Policies</h1>
            </center> 
        </div>
        <div class="flex">
            <div class="center-cart">
                <!-- cart 1 -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-legal">
                        <center>
                            <h1 id="cart-title1">Privacy</h1>
                            <p id="cart-firtsInfo1"><u>Information we collect:</u></p>
                            <p>Personal details. Website usage data.</p>
                            <br>
                            <p id="cart-secondInfo1"><u>How we use your information:</u></p>
                            <p id="cart-therdInfo1">To provide services. To improve our website and services.
                            To comply with legal requirements.</p>
                        </center>
                    </div>
                    
                </div>
                <!-- cart 2 -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-legal">
                        <center>
                            <h1 id="cart-title2">Cookies</h1>
                            <p id="cart-firtsInfo2">Our website uses cookies to enhance your experience.</p>
                            <br>
                            <br>
                            <p id="cart-secondInfo2">You can manage cookie preferences through your browser settings.</p>
                        </center>
                    </div>
                </div>
                <!-- cart 3 -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-legal">
                        <center>
                            <h1 id="cart-title3">Terms of Use</h1>
                            <p id="cart-firtsInfo3">By using the Wrexham Welsh Centre website, you agree to the following terms:</p>
                            <ul>
                                <li id="cart-infoLi1">Use of Content: All content is for informational purposes. Do not copy or distribute without permission.</li>
                                <li id="cart-infoLi2">User Conduct: Be respectful when interacting with our site. No harmful or unlawful activity is allowed.</li>
                                <li id="cart-infoLi3">Privacy: We collect and use data as outlined in our Privacy Policy.</li>
                            </ul>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php
        include "./component/footer.php";
    ?>

    <script src="./js/legal-translate.js"></script>
    <script src="./js/burger-menu.js"></script>
</body>
</html>