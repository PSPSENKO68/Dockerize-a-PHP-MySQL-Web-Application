<?php
$host = 'localhost';
$user = 'root';
$password = '123456789';
$dbName = 'phonestore';

$conn = mysqli_connect($host, $user, $password, $dbName);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

?>