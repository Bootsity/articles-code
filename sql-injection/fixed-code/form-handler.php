<?php
$dsn    = "mysql:host=localhost;dbname=bootsity";
$user   = "root";
$passwd = "root";
$pdo = new PDO($dsn, $user, $passwd);
$username = $_POST["username"];
$password = $_POST["password"];
$stmt = $pdo->prepare('SELECT * FROM Users WHERE username = :username AND password = :password');
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();
if (count($stmt) == 0) {
    echo 'Not Logged In';
} else {
    echo 'Logged In';
}
$stmt->close();
$pdo->close();
?>
