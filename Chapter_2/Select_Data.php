<!DOCTYPE html>
<html lang="en">
<head>
    <title>Select Data from MySQL Database</title>
</head>
<body>
<h2>List of Guests</h2>

<?php
// MySQL server connection credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myNewDatabase"; // Ensure the database exists

// Create connection to the MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// SQL SELECT query to retrieve data from MyGuests table
$sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
$result = $conn->query($sql);

// Check if there are any results returned
if ($result->num_rows > 0) {
    // Output the data of each row
    echo "<table border='1' cellpadding='10'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Registration Date</th></tr>";
    
    // Loop through the results and display each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["firstname"] . "</td>
                <td>" . $row["lastname"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["reg_date"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results found.";
}
// Close the database connection
$conn->close();
?>
</body>
</html>

