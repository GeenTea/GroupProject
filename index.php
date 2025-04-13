<?php
    // Start the session to handle user session data
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Make the website responsive on different devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="./style/style.css">
    
    <!-- Favicon for the browser tab -->
    <link rel="shortcut icon" href="./img/ed7e618b16ff89c1ac6e873a459f4cd5.png" type="image/x-icon">
    
    <title>Wrexham</title>
</head>
<body>
    <!-- Decorative background element (possibly for animation or styling) -->
    <div class="white-scene"></div>

    <?php
        // Include the website header
        include "./component/header.php";
    ?>

    <!-- Section with homepage image -->
    <div id="home_page_img">
        <img src="./img/home/Screenshot_2025-02-12_185214.png" alt="Wrexham-img">
    </div>

    <!-- Main title text on homepage -->
    <div id="home_mainText">
        <p id="WREXHAM_main_text">WREXHAM WELSH CENTRE</p>
    </div>

    <main>
        <center>
            <!-- Contact form -->
            <form action="./index.php" method="post">
                <label for="Contact" id="form-contact-us">CONTACT US</label><br>
                <!-- Email input field -->
                <input type="email" id="email" name="email" placeholder="Your email" required><br>
                <!-- Message textarea -->
                <textarea id="message" name="message" required placeholder="Your message"></textarea><br>
                <!-- Submit button -->
                <input type="submit" value="SUBMIT" name="submit" id="submit-main-home">
            </form>
        </center>
    </main>

    <?php
        // Include the website footer
        include "./component/footer.php";
    ?>

    <!-- JavaScript modules for language switching and menu -->
    <script type="module" src="./js/language.js"></script>
    <script type="module" src="./js/translate.js"></script>
    <script src="./js/burger-menu.js"></script>

    <?php
        // Include database configuration
        include "./config.php";

        // Check if the form was submitted and fields are not empty
        if (isset($_POST["submit"]) && $_REQUEST["email"] != "" && $_REQUEST["message"] != "") {
            // Get email and message from the form
            $email = $_POST["email"];
            $message = $_POST["message"];

            // SQL query to insert data into the contactus table
            $sql = "INSERT INTO contactus (email, message) VALUES ('$email', '$message')";
            try {
                // Execute the SQL query
                mysqli_query($conn, $sql);
            } catch (Exception $e) {
                // Handle errors during query execution
                echo "Error: " . $e->getMessage();
            }

            // Close the database connection
            mysqli_close($conn);
        }
    ?>
</body>
</html>
