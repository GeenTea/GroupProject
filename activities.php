<?php
    // Start the session to manage user data
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Make the site responsive on all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to the CSS stylesheet -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- Favicon icon for the tab -->
    <link rel="shortcut icon" href="./img/ed7e618b16ff89c1ac6e873a459f4cd5.png" type="image/x-icon">

    <title>Wrexham</title>
</head>
<body>
    <!-- Decorative background scene -->
    <div class="white-scene"></div>

    <?php
        // Include the header component
        include "./component/header.php";
    ?>

    <main id="main-legalAndPolicies">
        <!-- Page title section -->
        <div id="legalAndPolicies-Title">
            <center>
                <h1 id="Activities-title">Activities</h1>
            </center> 
        </div>

        <!-- Flex container for activity cards -->
        <div class="flex">
            <div class="center-cart">

                <!-- Activity Card 1: Watching sports together -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-activities">
                        <center>
                            <h1 id="SPORTS-tl">SPORTS ON S4C</h1>
                            <br>
                            <p id="text-cart1">On matchdays we view sport shows and matches together on S4C. This allows us to practice Welsh and have a great time together.</p>
                            <br><br>
                            <img src=".\img\activities\gkk23iyx.png" alt="">
                        </center>
                    </div>
                </div>

                <!-- Activity Card 2: Welsh language practice group -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-activities">
                        <center>
                            <h1 id="practice">PRACTICE WELSH</h1>
                            <p id="text-cart2">Clwb Clebran, every Thursday evening, gives Welsh language learners the opportunity to practice in an informal atmosphere outside the classroom.</p>
                            <br><br>
                            <img src=".\img\activities\bvtxxlwu.png" alt="" id="practice-img">
                        </center>
                    </div>
                </div>

                <!-- Activity Card 3: Other cultural and social events -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-activities">
                        <center>
                            <h1 id="and-more">& MORE</h1>
                            <p id="text-cart3">There are also many non-Welsh language activities e.g. darts, live bands on a Saturday night, but even on those nights, the Welsh spirit and culture is evident.</p>
                            <img src=".\img\activities\z934zzun.png" alt="" id="party-img">
                            <img src=".\img\activities\e9xfhxr0.png" alt="" id="dart-img">
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

    <!-- JavaScript files for interactivity -->
    <script src="./js/activities-translate.js"></script>
    <script src="./js/burger-menu.js"></script>
</body>
</html>
