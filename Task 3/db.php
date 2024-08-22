<?php
$servername = "localhost";
$username = "root";  // Change this according to your MySQL username
$password = "";      // Change this according to your MySQL password
$dbname = "user_management";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
