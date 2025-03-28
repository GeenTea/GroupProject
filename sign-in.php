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
<body class="red-background">
            <!-- <p id="WELSH" onclick="Language_Welsh()">CYMRAEG</p> <p>/</p> <p id="EN" onclick="Language_EN()">ENGLISH</p> -->
    <center>
        <div class="login-sign-background">
            <h2 id="sign-up-title">SIGN UP</h2>
            <div class="login-sign-card">
                <form action="./sign-in.php" method="post">
                    <input type="text" name="username" id="username" placeholder="Create Username" required>
                    <input type="email" name="email" id="email" placeholder="Add e-mail" required>
                    <input type="password" name="password" id="password" placeholder="Create Password" required>
                    <button type="submit" value="Sign up" id="Sign-up"class="login-sign-button" name="signup">Sign Up</button>
                </form>
                <div id="sign-lang">
                    <p id="WELSH" onclick="Language_Welsh()">CYMRAEG</p> <p>/</p> <p id="EN" onclick="Language_EN()">ENGLISH</p>
                </div>
            </div>
        </div>
    </center>
    <script src="./js/sign-up-translate.js"></script>
    <script src="./js/burger-menu.js"></script>
    <?php
        if(isset($_POST["signup"])) {
            include 'config.php';

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

        
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            
            $sql = "SELECT * FROM users WHERE username1 = '$username' OR email = '$email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                echo "
                <center>
                    <p style='font-size:24px;'>Username or email already exists!</p>
                </center>
                ";
            } else {

                
                $sql = "INSERT INTO users (username1, email, password1) VALUES ('$username', '$email', '$hashed_password')";
                if (mysqli_query($conn, $sql)) {
                    
                    $sql = "SELECT * FROM users WHERE email = '$email'";
                    $result = mysqli_query($conn, $sql);
                    $user = mysqli_fetch_assoc($result);
                    $_SESSION['username'] = $user['username1'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['phone'] = $user['phone'];
                    $_SESSION['name'] = $user['name'];
                    header("Location: index.php");
                    exit();
                } else {
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