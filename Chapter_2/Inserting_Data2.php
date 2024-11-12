<?php
// MySQL server connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myNewDatabase"; // Ensure this database exists

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create the table with a UNIQUE constraint on the email column
$tableName = "MyGuests";
$sql = "CREATE TABLE IF NOT EXISTS $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE,  -- Add UNIQUE constraint here
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$conn->query($sql);  // Execute table creation query

// SQL query to insert data into the MyGuests table
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('yitayew', 'Solomon', 'yitayewsolomon3@gmail.com')";

// Execute query and handle duplicate record errors
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    // Check if the error is due to a duplicate entry
    if ($conn->errno == 1062) { // Error code 1062 is for duplicate entry in MySQL
        echo "Error: A record with this email already exists.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>