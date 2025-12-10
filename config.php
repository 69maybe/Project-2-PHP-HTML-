<?php
/**
 * Database Configuration
 * Compatible with InfinityFree hosting
 */

// Database connection settings
define('DB_HOST', 'localhost'); // InfinityFree usually uses localhost
define('DB_USER', 'your_username'); // Replace with your InfinityFree database username
define('DB_PASS', 'your_password'); // Replace with your InfinityFree database password
define('DB_NAME', 'your_database'); // Replace with your InfinityFree database name

// Check if database is configured
function isDatabaseConfigured() {
    return DB_USER !== 'your_username' && 
           DB_PASS !== 'your_password' && 
           DB_NAME !== 'your_database';
}

// Create connection
function getDBConnection() {
    // Check if database is configured
    if (!isDatabaseConfigured()) {
        return false;
    }
    
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    // Check connection
    if (!$conn) {
        return false;
    }
    
    // Set charset to UTF-8
    mysqli_set_charset($conn, "utf8");
    
    return $conn;
}

// Close connection
function closeDBConnection($conn) {
    mysqli_close($conn);
}
?>

