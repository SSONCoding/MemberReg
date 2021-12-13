<?php
$servername = "localhost";
$username = "user21600";
$password = "pwd21600";
$dbname = "db21600";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


