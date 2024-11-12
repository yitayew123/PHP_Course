<?php
// MySQL server connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myNewDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// Set parameters and execute
$firstname = "Natanim";
$lastname = "Yitayew";
$email = "natanimyitayew@gmail.com";
$stmt->execute();

$firstname = "Dureti";
$lastname = "Guye";
$email = "duretiguye@gmail.com";
$stmt->execute();

echo "Records inserted successfully!";

// Close the statement and connection
$stmt->close();
$conn->close();
?>
