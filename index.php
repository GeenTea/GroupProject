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
    <footer>
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