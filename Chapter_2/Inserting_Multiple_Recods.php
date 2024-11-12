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

// SQL queries to insert multiple records
$sql1 = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Haileab', 'Solomon', 'haileabsolomon@gmail.com')";
$sql2 = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Yared', 'Solomon', 'yaredsolomon@gmail.com')";

// Execute first query
if ($conn->query($sql1) === TRUE) {
    echo "First record inserted successfully!";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

// Execute second query
if ($conn->query($sql2) === TRUE) {
    echo "Second record inserted successfully!";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>

