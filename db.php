<?php
$host = "localhost";
$user = "root";  // Change if using another username
$pass = "";      // Add a password if needed
$dbname = "crud_app";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
