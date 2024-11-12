<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Guest Information</title>
</head>
<body>
<h2>Update Guest Information</h2>
<!-- HTML form to take the ID and updated information -->
<form action="" method="POST">
    <label for="id">Enter Guest ID:</label><br>
    <input type="text" id="id" name="id" required><br><br>
    
    <label for="firstname">New First Name:</label><br>
    <input type="text" id="firstname" name="firstname" required><br><br>
    
    <label for="lastname">New Last Name:</label><br>
    <input type="text" id="lastname" name="lastname" required><br><br>
    
    <label for="email">New Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <input type="submit" value="Update">
</form>

<?php
// MySQL server connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myNewDatabase";  // Your database name

// Create a connection to the MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $id = htmlspecialchars($_POST['id']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);

    // SQL UPDATE query to update the guest's information based on the provided ID
    $stmt = $conn->prepare("UPDATE MyGuests SET firstname = ?, lastname = ?, email = ? WHERE id = ?");
    $stmt->bind_param("sssi", $firstname, $lastname, $email, $id);  // Bind parameters (firstname, lastname, email, id)

    // Execute the query
    if ($stmt->execute()) {
        echo "<p>Record updated successfully!</p>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>

</body>
</html>

