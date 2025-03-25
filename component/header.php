<?php

    if(!isset($_SESSION['username'])){
        echo "
        <header>
            <div id='logo'>
                <img src='./img/ed7e618b16ff89c1ac6e873a459f4cd5.png' alt='logo'>
            </div>
            <div id='title-web'>
                <p id='WELSH' onclick='Language_Welsh()'>CYMRAEG</p> <p>/</p> <p id='EN' onclick='Language_EN()'>ENGLISH</p>
            </div>
            <div id='burger-menu'>
                <p onclick='burger_menu()'>☰</p>
            </div>
            <nav id='nav-bar-constructor'>
                <ul id='nav-bar'>
                    <center>
                        <li><a href='./index.php'>MAIN PAGE</a></li>
                        <li><a href='./LegalAndPolicies.php'>Legal & Policies</a></li>
                        <li><a href='./activities.php'>Activities</a></li>
                        <li><a href='./sign-in.php'>Sign Up</a></li>
                        <li><a href='./login.php'>Log In</a></li>
                    </center>
                </ul>
            </nav>
        </header>
    ";
    }else{
        echo '
        <header>
            <div id="logo">
                <img src="./img/ed7e618b16ff89c1ac6e873a459f4cd5.png" alt="logo">
            </div>
            <div id="title-web">
                <p id="WELSH" onclick="Language_Welsh()">CYMRAEG</p> <p>/</p> <p id="EN" onclick="Language_EN()">ENGLISH</p>
            </div>
            <div id="burger-menu">
                <p onclick="burger_menu()">☰</p>
            </div>
            <nav id="nav-bar-constructor">
                <ul id="nav-bar">
                    <center>
                        <li><a href="./index.php">MAIN PAGE</a></li>
                        <li><a href="./profile.php">Profile</a></li>
                        <li><a href="./LegalAndPolicies.php">Legal & Policies</a></li>
                        <li><a href="./activities.php">Activities</a></li>
                        <li><a href="./logout.php">Exit</a></li>
                    </center>
                </ul>
            </nav>
        </header>';
        
    }
?>