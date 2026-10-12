<?php

$host = "localhost";
$dbname = "gogola1";
$username = "root";
$password = "";

try {
    // Create a PDO connection to MySQL
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    // Enable exception error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Display success message
    echo "Database connected successfully!";
} catch (PDOException $e) {
    // Display error message if connection fails
    echo "Connection failed: " . $e->getMessage();
}
?>
