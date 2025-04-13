<?php
    // Start session to store user login state
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Ensures proper rendering and touch zooming on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- Favicon for the site -->
    <link rel="shortcut icon" href="./img/ed7e618b16ff89c1ac6e873a459f4cd5.png" type="image/x-icon">

    <title>Wrexham</title>
</head>
<body class="red-background">
    <!-- Language toggle (commented out) -->
    <!-- <p id="WELSH" onclick="Language_Welsh()">CYMRAEG</p> <p>/</p> <p id="EN" onclick="Language_EN()">ENGLISH</p> -->

    <center>
        <div class="login-sign-background">
            <!-- Login title -->
            <h2 id="login-title">LOGIN</h2>

            <!-- Login form container -->
            <div class="login-sign-card">
                <!-- Login form using POST method -->
                <form action="./login.php" method="post">
                    <!-- Username input -->
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <!-- Password input -->
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <!-- Login button -->
                    <button type="submit" value="Login" class="login-sign-button" id="login" name="login">Login</button>
                </form>

                <!-- Language selection for the login page -->
                <div id="login-lang">
                    <p id='WELSH' onclick='Language_Welsh()'>CYMRAEG</p> <p>/</p> <p id='EN' onclick='Language_EN()'>ENGLISH</p>
                </div>
            </div>
        </div>
    </center>

    <?php
        // Check if login form was submitted
        if(isset($_POST["login"])) {
            // Include database configuration
            include 'config.php';

            // Retrieve submitted username and password
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Query database for user with matching username
            $sql = "SELECT * FROM users WHERE username1 = '$username'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($result);

            // Verify password and handle login success
            if ($user && password_verify($password, $user['password1'])) {
                // Set session variables for user data
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username1'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['name'] = $user['name'];

                // Redirect to homepage on success
                header("Location: index.php");
                exit();
            } else {
                // Show error message on login failure
                $error = "<center><h3>error password</h3></center>";
                echo $error;
            }
        }
    ?>

    <!-- Script for handling translation on the login page -->
    <script src="./js/login-translate.js"></script>

    <!-- Script for responsive burger menu -->
    <script src="./js/burger-menu.js"></script>
</body>
</html>
