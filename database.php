<?php
$servername = "localhost";
$username = "user";
$password = "admin";
$dbname = "situsti";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>