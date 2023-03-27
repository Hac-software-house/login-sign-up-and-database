<?php
$hostName = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname ="login-register";
$conn = mysqli_connect($hostName, $dbuser, $dbpassword);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the database exists, create it if not
if (!mysqli_select_db($conn, $dbname)) {
    $sql = "CREATE DATABASE $dbname";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
}

// Connect to the database
$conn = mysqli_connect($hostName, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>