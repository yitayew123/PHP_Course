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

// Table name
$tableName = "MyGuests";

// Check if the table already exists
$tableExists = $conn->query("SHOW TABLES LIKE '$tableName'");

if ($tableExists->num_rows > 0) {
    echo "Table '$tableName' already exists!";
} else {
    // SQL query to create a new table
    $sql = "CREATE TABLE $tableName (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    // Execute query and check if the table was created successfully
    if ($conn->query($sql) === TRUE) {
        echo "Table '$tableName' created successfully!";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>