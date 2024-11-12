<?php
// MySQL server connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myNewDatabase"; // Change this to your database name

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the ID of the record to delete
$id_to_delete = 1;  // Change this to the ID of the record you want to delete

// Prepare the SQL DELETE statement
$sql = "DELETE FROM MyGuests WHERE id = ?";

// Prepare the statement to prevent SQL injection
$stmt = $conn->prepare($sql);

// Bind the parameters (i = integer)
$stmt->bind_param("i", $id_to_delete);

// Execute the query
if ($stmt->execute()) {
    echo "Record deleted successfully!";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close the statement
$stmt->close();

// Close the connection
$conn->close();
?>

