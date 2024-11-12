<?php
// MySQL server connection credentials
$servername = "localhost";  // Server name (usually 'localhost')
$username = "root";         // MySQL username (typically 'root' for local environments)
$password = "";             // MySQL password (blank if not set)
$dbname = "myNewDatabase";  // Name of the database where the table will be created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create a new table
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Execute query and check if table was created successfully
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection
$conn->close();
?>

