<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$db_name = 'hotel';

$conn = new mysqli($host, $username, $password, $db_name);

if($conn && $conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}