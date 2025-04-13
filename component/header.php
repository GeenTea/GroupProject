<?php

    // Check if the user is not logged in (session username is not set)
    if(!isset($_SESSION['username'])){
        // Display header for non-logged-in users
        echo "
        <header>
            <div id='logo'>
                <!-- Logo Section -->
                <img src='./img/ed7e618b16ff89c1ac6e873a459f4cd5.png' alt='logo'>
            </div>
            <div id='title-web'>
                <!-- Language Switch Section -->
                <p id='WELSH' onclick='switchLang(\"WELSH\")'>CYMRAEG</p> <p>/</p> <p id='EN' onclick='switchLang(\"EN\")'>ENGLISH</p>
            </div>
            <div id='burger-menu'>
                <!-- Burger Menu Icon -->
                <p onclick='burger_menu()'>☰</p>
            </div>
            <nav id='nav-bar-constructor'>
                <!-- Navigation Bar for Non-Logged-In Users -->
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
        // Display header for logged-in users
        echo '
        <header>
            <div id="logo">
                <!-- Logo Section -->
                <img src="./img/ed7e618b16ff89c1ac6e873a459f4cd5.png" alt="logo">
            </div>
            <div id="title-web">
                <!-- Language Switch Section -->
                <p id="WELSH" onclick="switchLang(\'WELSH\')">CYMRAEG</p> <p>/</p> <p id="EN" onclick="switchLang(\'EN\')">ENGLISH</p>
            </div>
            <div id="burger-menu">
                <!-- Burger Menu Icon -->
                <p onclick="burger_menu()">☰</p>
            </div>
            <nav id="nav-bar-constructor">
                <!-- Navigation Bar for Logged-In Users -->
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