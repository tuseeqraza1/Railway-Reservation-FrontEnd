<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "pakistan railways";

// connect to mysql database

$connect = new mysqli($hostname, $username, $password, $databaseName);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

return $connect;

?>