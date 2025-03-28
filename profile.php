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
    <main id="main-profile">
        <center>
            <h1 id="profile-title">PROFILE</h1>
        </center>
        <div class="flex">
            <div id="img-profile">
                <img src="./img/profile/71d310737132aef866ee39dda6e650a0c93e71fb.png" alt="">
            </div>
            <div id="form-profile">
                <form action="./profile.php" method="post">
                    <input type="text" name="name" id="name-profile" placeholder="Name"><br>
                    <input type="text" name="username" id="username-profile" placeholder="Username"><br>
                    <input type="tel" name="phone" id="phone-profile" placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br>
                    <input type="email" name="email" id="email-profile" placeholder="Email"><br>
                    <button type="submit" value="save" id="save-profile">SAVE</button>
                    <button type="submit" value="delete" id="delete-profile">DELETE</button>
                </form>
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