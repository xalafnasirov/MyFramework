<?php

// Database connection settings
$host = $_SERVER['SERVER_NAME'];
$db_name = 'my_database';
$username = 'root';
$password = '';

// PDO connection
try {
    $db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    // Set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}