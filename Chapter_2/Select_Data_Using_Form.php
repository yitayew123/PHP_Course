<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Database</title>
</head>
<body>

    <h2>Search Guest Information</h2>

    <!-- HTML Form to take user input -->
    <form action="" method="POST">
        <label for="firstname">Enter First Name:</label><br>
        <input type="text" id="firstname" name="firstname" required><br><br>
        
        <input type="submit" value="Search">
    </form>

    <?php
    // PHP code to handle form submission and search database

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
        $firstname = htmlspecialchars($_POST['firstname']);  // Sanitize input to prevent XSS

        // SQL query to search for records by first name
        $stmt = $conn->prepare("SELECT id, firstname, lastname, email, reg_date FROM MyGuests WHERE firstname = ?");
        $stmt->bind_param("s", $firstname);  // Bind the input to the prepared statement
        
        // Execute the query
        $stmt->execute();
        
        // Get the result of the query
        $result = $stmt->get_result();

        // Check if any results are found
        if ($result->num_rows > 0) {
            // Display the results in an HTML table
            echo "<h3>Results Found:</h3>";
            echo "<table border='1' cellpadding='10'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Registration Date</th></tr>";
            
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
            // Display a message if no results are found
            echo "<p>No results found for the name '" . $firstname . "'</p>";
        }
        
        // Close the statement
        $stmt->close();
    }

    // Close the connection
    $conn->close();
    ?>

</body>
</html>