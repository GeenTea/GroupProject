<?php
    // Define database connection parameters
    $db_server = "127.0.0.1:3307";   // Database server address and port
    $db_username = "root";          // Database username
    $db_password = "";              // Database password (empty in this case)
    $db_name = "wrex_centre";       // Name of the database to connect to

    // Establish a connection to the MySQL database
    $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
?>
