<?php
// Database configuration settings
$host = 'localhost'; // Host name
$dbname = 'your_database_name'; // Database name
$username = 'your_username'; // Database username
$password = 'your_password'; // Database password

// Data Source Name (DSN)
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    // Create a new PDO instance
    $pdo = new PDO($dsn, $username, $password);
    
    // Set error mode to exception to catch any errors
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Set default fetch mode to associative array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // Display success message
    echo "Connected successfully";
} catch (PDOException $e) {
    // Display error message if connection fails
    echo "Connection failed: " . $e->getMessage();
}
?>
