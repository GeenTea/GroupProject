<?php

    if(!isset($_SESSION['username'])){
        echo "
        <header>
            <div id='logo'>
                <img src='./img/ed7e618b16ff89c1ac6e873a459f4cd5.png' alt='logo'>
            </div>
            <div id='title-web'>
                <p id='WELSH' onclick='switchLang(\"WELSH\")'>CYMRAEG</p> <p>/</p> <p id='EN' onclick='switchLang(\"EN\")'>ENGLISH</p>
            </div>
            <div id='burger-menu'>
                <p onclick='burger_menu()'>☰</p>
            </div>
            <nav id='nav-bar-constructor'>
                <ul id='nav-bar'>
                    <center>
                        <li><a href='./index.php' id='main-link'>MAIN PAGE</a></li>
                        <li><a href='./LegalAndPolicies.php' id='legal-link'>Legal & Policies</a></li>
                        <li><a href='./activities.php' id='activities-link'>Activities</a></li>
                        <li><a href='./sign-in.php' id='sign-link'>Sign Up</a></li>
                        <li><a href='./login.php' id='login-link'>Log In</a></li>
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
                <p id="WELSH" onclick="switchLang(\'WELSH\')">CYMRAEG</p> <p>/</p> <p id="EN" onclick="switchLang(\'EN\')">ENGLISH</p>
            </div>
            <div id="burger-menu">
                <p onclick="burger_menu()">☰</p>
            </div>
            <nav id="nav-bar-constructor">
                <ul id="nav-bar">
                    <center>
                        <li><a href="./index.php" id="main-link">MAIN PAGE</a></li>
                        <li><a href="./profile.php" id="profile-link">Profile</a></li>
                        <li><a href="./LegalAndPolicies.php" id="legal-link">Legal & Policies</a></li>
                        <li><a href="./activities.php" id="activities-link">Activities</a></li>
                        <li><a href="./logout.php" id="exit-link">Exit</a></li>
                    </center>
                </ul>
            </nav>
        </header>';
        
    }
?>