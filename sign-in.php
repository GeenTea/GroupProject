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
            <h2>SIGN UP</h2>
            <div class="login-sign-card">
                <form action="./sign-in.php" method="post">
                    <input type="text" name="username" id="username" placeholder="Create Username" required>
                    <input type="email" name="email" id="email" placeholder="Add e-mail" required>
                    <input type="password" name="password" id="password" placeholder="Create Password" required>
                    <button type="submit" value="Sign up" class="login-sign-button">Sign Up</button>
                </form>
                <div id="sign-lang">
                    <p id="WELSH" onclick="Language_Welsh()">CYMRAEG</p> <p>/</p> <p id="EN" onclick="Language_EN()">ENGLISH</p>
                </div>
            </div>
        </div>
    </center>
    <script src="./js/language.js"></script>
    <script src="./js/burger-menu.js"></script>

    <?php
                
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            header("Location: ./index.php");
            exit(); 
        } //else {
        //     echo "<p>Please fill out the registration form..</p>";
        // }
    ?>

</body>
</html>