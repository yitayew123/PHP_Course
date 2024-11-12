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

// Define the new values to update in the table (hardcoded for this example)
$id = 1;  // The ID of the record to update
$new_firstname = "Solomon";
$new_lastname = "Yitayew";
$new_email = "yitayews@gmail.com";

// Prepare the SQL UPDATE statement
$sql = "UPDATE MyGuests SET firstname = ?, lastname = ?, email = ? WHERE id = ?";

// Prepare the statement to avoid SQL injection
$stmt = $conn->prepare($sql);

// Bind the parameters (s = string, i = integer)
$stmt->bind_param("sssi", $new_firstname, $new_lastname, $new_email, $id);

// Execute the query
if ($stmt->execute()) {
    echo "Record updated successfully!";
} else {
    echo "Error updating record: " . $conn->error;
}

// Close the statement
$stmt->close();

// Close the connection
$conn->close();
?>

