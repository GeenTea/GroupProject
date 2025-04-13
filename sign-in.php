<?php
    // Start the session to store user data after registration
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Ensure responsive behavior on all devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to external stylesheet -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- Website favicon -->
    <link rel="shortcut icon" href="./img/ed7e618b16ff89c1ac6e873a459f4cd5.png" type="image/x-icon">

    <title>Wrexham</title>
</head>
<body class="red-background">
    <!-- Optional language selector (currently commented out) -->
    <!-- <p id="WELSH" onclick="Language_Welsh()">CYMRAEG</p> <p>/</p> <p id="EN" onclick="Language_EN()">ENGLISH</p> -->

    <center>
        <div class="login-sign-background">
            <h2 id="sign-up-title">SIGN UP</h2>
            <div class="login-sign-card">
                <!-- Sign up form -->
                <form action="./sign-in.php" method="post">
                    <input type="text" name="username" id="username" placeholder="Create Username" required>
                    <!-- request username -->
                    <input type="email" name="email" id="email" placeholder="Add e-mail" required>
                    <!-- request email -->
                    <input type="password" name="password" id="password" placeholder="Create Password" required>
                    <!-- request password -->
                    <button type="submit" value="Sign up" id="Sign-up" class="login-sign-button" name="signup">Sign Up</button>
                </form>

                <!-- Language switcher -->
                <div id="sign-lang">
                    <p id="WELSH" onclick="Language_Welsh()">CYMRAEG</p> <p>/</p> <p id="EN" onclick="Language_EN()">ENGLISH</p>
                </div>
            </div>
        </div>
    </center>

    <!-- Include language and UI scripts -->
    <script src="./js/sign-up-translate.js"></script>
    <script src="./js/burger-menu.js"></script>

    <?php
        // If the sign-up form was submitted
        if(isset($_POST["signup"])) {
            include 'config.php'; // Connect to the database

            // Retrieve form input
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Hash the password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Check if username or email already exists in the database
            $sql = "SELECT * FROM users WHERE username1 = '$username' OR email = '$email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                // Show error if user already exists
                echo "
                <center>
                    <p style='font-size:24px;'>Username or email already exists!</p>
                </center>
                ";
            } else {
                // Insert new user into the database
                $sql = "INSERT INTO users (username1, email, password1) VALUES ('$username', '$email', '$hashed_password')";
                if (mysqli_query($conn, $sql)) {

                    // Fetch the newly registered user
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_assoc($result);

                    // Store user info in session
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['username'] = $user['username1'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['phone'] = $user['phone'];
                    $_SESSION['name'] = $user['name'];

                    // Redirect to homepage after successful sign-up
                    header("Location: index.php");
                    exit();
                } else {
                    // Show error if registration failed
                    echo "
                    <center>
                        <p style='font-size:24px;'>Error: Could not register user.</p>
                    </center>
                    ";
                }
            }
        }
    ?>
</body>
</html>
