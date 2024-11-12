<?php
// MySQL server connection credentials
$servername = "localhost";  // Change if necessary
$username = "root";      // MySQL username (root by default)
$password = "";     // MySQL password (blank by default)

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Database name
$databaseName = "myNewDatabase";

// Check if the database already exists
$dbExists = $conn->select_db($databaseName);

if ($dbExists) {
    echo "Database '$databaseName' already exists!";
} else {
    // SQL query to create a new database
    $sql = "CREATE DATABASE $databaseName";
    
    // Execute query and check if database was created successfully
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully!";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>