<?php
    // Start the session
    session_start();

    // Redirect to homepage if the user is not logged in
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to external CSS -->
    <link rel="stylesheet" href="./style/style.css">

    <!-- Website favicon -->
    <link rel="shortcut icon" href="./img/ed7e618b16ff89c1ac6e873a459f4cd5.png" type="image/x-icon">

    <title>Wrexham</title>
</head>
<body>
    <!-- Decorative background element -->
    <div class="white-scene"></div>

    <!-- Include website header -->
    <?php include "./component/header.php"; ?>

    <main id="main-profile">
        <center>
            <h1 id="profile-title">PROFILE</h1>
        </center>

        <div class="flex">
            <!-- Profile image section -->
            <div id="img-profile">
                <img src="./img/profile/71d310737132aef866ee39dda6e650a0c93e71fb.png" alt="">
            </div>

            <!-- Profile form section -->
            <div id="form-profile">
                <?php 
                    // Display profile form with prefilled values from session
                    echo'
                    <form action="./profile.php" method="post">
                        <input type="text" name="name" id="name-profile" placeholder="Name" value="'.$_SESSION["name"].'"><br>
                        <input type="text" name="username" id="username-profile" placeholder="Username" value="'.$_SESSION["username"].'"><br>
                        <input type="tel" name="phone" id="phone-profile" placeholder="Phone Number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" value="'.$_SESSION["phone"].'"><br>
                        <input type="email" name="email" id="email-profile" placeholder="Email" value="'.$_SESSION["email"].'"><br>
                        <button type="submit" value="save" name="save" id="save-profile">SAVE</button>
                        <button type="submit" value="delete" name="delete" id="delete-profile">DELETE</button>
                    </form>
                    ';
                ?>
            </div>
        </div>
    </main>

    <!-- Include website footer -->
    <?php include "./component/footer.php"; ?>

    <?php
        // Handle profile update request
        if(isset($_POST["save"]) && isset($_POST['name']) && isset($_POST['username']) && isset($_POST['phone']) && isset($_POST['email'])) {
            include 'config.php';

            // Get values from the form
            $name = $_POST['name'];
            $username = $_POST['username']; 
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $id = $_SESSION["id"];

            // Update user data in the database
            $sql = "UPDATE users SET name='$name', username1='$username', phone='$phone', email='$email' WHERE id='$id'";
            
            if (mysqli_query($conn, $sql)) {
                // Update session variables
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                $_SESSION['phone'] = $phone;
                $_SESSION['email'] = $email;

                // Show success alert and refresh the page
                echo "<script>alert('Profile updated successfully!');</script>";
                echo "<script>window.location.href = './profile.php';</script>";
            } else {
                // Show error alert and debug SQL
                echo "<script>alert('Error updating profile: " . mysqli_error($conn) . "');</script>";
                echo "<!-- SQL Error: " . $sql . " -->";
            }
        }

        // Handle delete account request
        if(isset($_POST["delete"])) {
            include 'config.php';

            $id = $_SESSION["id"];

            // Delete user from the database
            $sql = "DELETE FROM users WHERE id='$id'";
            
            if (mysqli_query($conn, $sql)) {
                // End the session after account deletion
                session_destroy();
            } else {
                // Show error alert and debug SQL
                echo "<script>alert('Error deleting account: " . mysqli_error($conn) . "');</script>";
                echo "<!-- SQL Error: " . $sql . " -->";
            }
        }
    ?>

    <!-- Include translation script -->
    <script src="./js/profile-translate.js"></script>

    <!-- Include burger menu functionality -->
    <script src="./js/burger-menu.js"></script>
</body>
</html>
