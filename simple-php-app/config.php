<?php
$host = 'mysql-db';  // Use the MySQL service name from docker-compose
$user = 'root';
$password = 'rootpassword';
$dbname = 'testdb';

// Connect
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
