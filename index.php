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
    <div id="home_page_img">
        <img src="./img/home/Screenshot_2025-02-12_185214.png" alt="Wrexham-img">
    </div>
    <div id="home_mainText">
        <p id="WREXHAM_main_text">WREXHAM WELSH CENTRE</p>
    </div>
    <main>
        <center>
            <form action="./index.php" method="post">
                <label for="Contact" id="form-contact-us">CONTACT US</label><br>
                <input type="email" id="email" name="email" placeholder="Your email" required><br>
                <textarea id="message" name="message" required placeholder="Your message"></textarea><br>
                <input type="submit" value="SUBMIT" name="submit" id="submit-main-home">
            </form>
        </center>
    </main>
    <?php
        include "./component/footer.php";
    ?>

    <script type="module" src="./js/language.js"></script>
    <script type="module" src="./js/translate.js"></script>
    <script src="./js/burger-menu.js"></script>

    <?php
        include "./config.php";

        if (isset($_POST["submit"]) && $_REQUEST["email"] != "" && $_REQUEST["message"] != "") {
            $email = $_POST["email"];
            $message = $_POST["message"];

            $sql = "INSERT INTO contactus (email, message) VALUES ('$email', '$message')";
            try{
                mysqli_query($conn, $sql);
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
            mysqli_close($conn);
        }
    ?>

</body>
</html>