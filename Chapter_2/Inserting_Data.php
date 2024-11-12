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
// SQL query to insert data into the MyGuests table
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('yitayew', 'Solomon', 'yitayewsolomon3@gmail.com')";
// Execute query and check if data was inserted successfully
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close the connection
$conn->close();
?>




