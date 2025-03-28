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
    <?php
        include "./component/footer.php";
    ?>

    <script src="./js/language.js"></script>
    <script src="./js/burger-menu.js"></script>
</body>
</html>