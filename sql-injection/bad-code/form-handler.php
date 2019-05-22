<?php

mysql_connect('localhost', 'root', 'root');
mysql_select_db('bootsity');

$username = $_POST["username"];
$password = $_POST["password"];
$query    = "SELECT * FROM Users WHERE username = " . $username . " AND password =" . $password;

$re = mysql_query($query);

if (mysql_num_rows($re) == 0) {
    echo 'Not Logged In';
} else {
    echo 'Logged In';
}
?>
