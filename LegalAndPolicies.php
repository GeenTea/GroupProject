<?php
    // Start a session to maintain user state across pages
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Ensure the page is responsive on all screen sizes -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to the main CSS stylesheet -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- Favicon for the browser tab -->
    <link rel="shortcut icon" href="./img/ed7e618b16ff89c1ac6e873a459f4cd5.png" type="image/x-icon">

    <title>Wrexham</title>
</head>
<body>
    <!-- Background decorative element -->
    <div class="white-scene"></div>

    <?php
        // Include the header component (navigation bar, logo, etc.)
        include "./component/header.php";
    ?>

    <main id="main-legalAndPolicies">
        <!-- Title section for the Legal & Policies page -->
        <div id="legalAndPolicies-Title">
            <center>
                <h1 id="Legal-title">Legal & Policies</h1>
            </center> 
        </div>

        <!-- Flex container holding all the legal info cards -->
        <div class="flex">
            <div class="center-cart">

                <!-- Card 1: Privacy Policy section -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-legal">
                        <center>
                            <h1 id="cart-title1">Privacy</h1>
                            <!-- Section explaining what data is collected -->
                            <p id="cart-firtsInfo1"><u>Information we collect:</u></p>
                            <p>Personal details. Website usage data.</p>
                            <br>
                            <!-- Section explaining how collected data is used -->
                            <p id="cart-secondInfo1"><u>How we use your information:</u></p>
                            <p id="cart-therdInfo1">To provide services. To improve our website and services.
                            To comply with legal requirements.</p>
                        </center>
                    </div>
                </div>

                <!-- Card 2: Cookies Policy section -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-legal">
                        <center>
                            <h1 id="cart-title2">Cookies</h1>
                            <!-- Short explanation of cookie usage -->
                            <p id="cart-firtsInfo2">Our website uses cookies to enhance your experience.</p>
                            <br>
                            <br>
                            <!-- Info on how users can manage cookies -->
                            <p id="cart-secondInfo2">You can manage cookie preferences through your browser settings.</p>
                        </center>
                    </div>
                </div>

                <!-- Card 3: Terms of Use section -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-legal">
                        <center>
                            <h1 id="cart-title3">Terms of Use</h1>
                            <!-- Introductory statement about terms -->
                            <p id="cart-firtsInfo3">By using the Wrexham Welsh Centre website, you agree to the following terms:</p>
                            <ul>
                                <!-- Rule about using website content -->
                                <li id="cart-infoLi1">Use of Content: All content is for informational purposes. Do not copy or distribute without permission.</li>
                                <!-- Rule about user behavior -->
                                <li id="cart-infoLi2">User Conduct: Be respectful when interacting with our site. No harmful or unlawful activity is allowed.</li>
                                <!-- Reminder about data usage and privacy -->
                                <li id="cart-infoLi3">Privacy: We collect and use data as outlined in our Privacy Policy.</li>
                            </ul>
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php
        // Include the footer component
        include "./component/footer.php";
    ?>

    <!-- Script for language translation functionality -->
    <script src="./js/legal-translate.js"></script>

    <!-- Script for burger menu (mobile navigation) -->
    <script src="./js/burger-menu.js"></script>
</body>
</html>
