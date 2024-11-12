<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Record and Show Remaining Records</title>
    
    <!-- CSS Styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: lightgoldenrodyellow;
            margin: 0;
            padding: 0;
        }

        h2, h3 {
            text-align: center;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .message {
            text-align: center;
            color: #4CAF50;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Delete a Record</h2>

        <!-- PHP Code for Handling Form Submission, Deleting Record, and Displaying Table Data -->
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

        // Check if the form has been submitted to delete a record
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Capture the ID from the form input
            $id_to_delete = $_POST["id"];

            // Prepare the SQL DELETE statement
            $sql = "DELETE FROM MyGuests WHERE id = ?";

            // Prepare the statement to prevent SQL injection
            $stmt = $conn->prepare($sql);

            // Bind the parameter (i = integer)
            $stmt->bind_param("i", $id_to_delete);

            // Execute the query and check if it was successful
            if ($stmt->execute()) {
                echo "<p class='message'>Record with ID " . $id_to_delete . " deleted successfully!</p>";
            } else {
                echo "<p class='message'>Error deleting record: " . $conn->error . "</p>";
            }

            // Close the statement
            $stmt->close();
        }

        // Fetch all records from the database after deletion (or initial load)
        $sql = "SELECT id, firstname, lastname, email FROM MyGuests";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3>Current Records in the Database:</h3>";
            echo "<table>";
            echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["firstname"] . "</td>";
                echo "<td>" . $row["lastname"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p class='message'>No records found.</p>";
        }
        // Close the database connection
        $conn->close();
        ?>
        <!-- HTML Form for User to Enter the ID to Delete -->
        <h3>Delete a Record by ID</h3>
        <form method="post" action="">
            <label for="id">Enter ID of the Record to Delete:</label>
            <input type="number" name="id" id="id" required>
            <input type="submit" value="Delete Record">
        </form>
    </div>
</body>
</html>

