<?php
// config/database.php

$host = 'localhost';
$dbname = 'rawb2c_db';
$username = 'root'; // XAMPP default username
$password = ''; // XAMPP default password is empty

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    
    // Set the PDO error mode to exception for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set default fetch mode to associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // In a production environment, you would log this error and show a generic message.
    // For development, displaying the error helps with debugging.
    die("Database Connection Failed: " . $e->getMessage());
}
?>
