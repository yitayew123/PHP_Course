<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Using Form</title>
</head>
<body>

    <!-- HTML FORM TO COLLECT DATA -->
    <h2>Submit Your Information</h2>
    <form action="" method="post">
        <label for="firstname">First Name:</label><br>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="lastname">Last Name:</label><br>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    // PHP Script to handle form submission and insert data into MySQL database

    // MySQL server connection credentials
    $servername = "localhost"; // Server name (change if necessary)
    $username = "root";        // Username (default is 'root')
    $password = "";            // Password (leave empty if not set)
    $dbname = "myNewDatabase"; // Name of the database

    // Create a connection to the MySQL database
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check if the connection was successful
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Prepare the SQL statement with placeholders to avoid SQL injection
        $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $firstname, $lastname, $email);
        // Get the form data and sanitize it to prevent XSS attacks
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $email = htmlspecialchars($_POST['email']);
        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "<p>New record created successfully!</p>";
        } else { 
            echo "<p>Error: " . $stmt->error . "</p>";
        }
        // Close the statement
        $stmt->close();
    }
    // Close the database connection
    $conn->close();
    ?>
</body>
</html>

