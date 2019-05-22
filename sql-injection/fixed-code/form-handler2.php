<?php
$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "bootsity";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$username = $_POST["username"];
$password = $_POST["password"];
// prepare and bind
$stmt = $conn->prepare('SELECT * FROM Users WHERE username = ? AND password = ?');
$stmt->bind_param($username, $password);
$stmt->execute();
if (count($stmt) == 0) {
    echo 'Not Logged In';
} else {
    echo 'Logged In';
}
$stmt->close();
$conn->close();
?>
