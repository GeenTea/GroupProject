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
                <h1 id="Activities-title">Activities</h1>
            </center> 
        </div>
        <div class="flex">
            <div class="center-cart">
                <!-- cart 1 -->
                <div class="cart_legalAndPolicies">
                    <div class="cart-text-activities">
                        <center>
                            <h1 id="SPORTS-tl">SPORTS ON S4C</h1>
                            <br>
                            <p id="text-cart1">On matchdays we view sport shows and matches together on S4C. This allows us to practice Welsh and have a great time together.</p>
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
                            <p id="text-cart2">Clwb Clebran, every Thursday evening, gives Welsh language learners the opportunity to practice in an informal atmosphere outside the classroom.</p>
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
        include "./component/footer.php";
    ?>

    <script src="./js/activities-translate.js"></script>
    <script src="./js/burger-menu.js"></script>
</body>
</html>