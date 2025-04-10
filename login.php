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
            <h2 id="login-title">LOGIN</h2>
            <div class="login-sign-card">
                <form action="./login.php" method="post">
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <button type="submit" value="Login" class="login-sign-button" id="login" name="login">Login</button>
                </form>
                <div id="login-lang">
                    <p id='WELSH' onclick='Language_Welsh()'>CYMRAEG</p> <p>/</p> <p id='EN' onclick='Language_EN()'>ENGLISH</p>
                </div>
            </div>
        </div>
    </center>
    <?php
        if(isset($_POST["login"])) {
            include 'config.php';
            
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            $sql = "SELECT * FROM users WHERE username1 = '$username'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($result);
        
            if ($user && password_verify($password, $user['password1'])) {
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username1'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['phone'] = $user['phone'];
                $_SESSION['name'] = $user['name'];

                header("Location: index.php");
                exit();
            } else {
                $error = "<center><h3>error password</h3></center>";
                echo $error;
            }
        }
        ?>
    <script src="./js/login-translate.js"></script>
    <script src="./js/burger-menu.js"></script>
</body>
</html>