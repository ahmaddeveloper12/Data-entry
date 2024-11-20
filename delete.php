<html>
<head>
    <title>Delete Database</title>
</head>
<body>

<center>
    <form method="post" action="delete.php">
        <table border="1">
            <tr>
                <th>Employee Name</th>
            </tr>
            <tr>
                <td><input type="text" name="box"></td>
            </tr>
        </table>

        <input type="submit" value="Search" name="btn">
    </form>

    <?php
    if (isset($_POST['btn'])) {

        $id = $_POST['box'];

        // Sanitize the user input to prevent XSS
        $id = htmlspecialchars($id);

        // Establish a connection to the database
        $conn = mysqli_connect("localhost", "root", "", "work");

        // Check for database connection errors
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Prepare the SQL query using a parameterized query to prevent SQL injection
        $sql = "SELECT * FROM apply WHERE father = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $id); // Assuming 'father' is a string type, change "s" to "i" if it's an integer

        // Execute the statement
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Check if any records are found
        if ($result->num_rows > 0) {
            session_start();
            $_SESSION['father']=$id;
            echo "<table border='1'>
            <tr>
                <th>father</th>
                <th>mother</th>
                <th>sister</th>
                <th>sister2</th>
                <th>Action</th>
            </tr>";

            // Loop through the results and display the data
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['father'] . "</td>
                        <td>" . $row['mother'] . "</td>
                        <td>" . $row['sister'] . "</td>
                        <td>" . $row['sister2'] . "</td>
                        <td>
                            <form method='post' action='deletedata.php'>
                                <input type='hidden' name='father' value='" . $row['father'] . "'>
                                <input type='submit' value='Delete'>
                            </form>
                        </td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "<font color=red size=4>No record found</font>";
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
    ?>
</center>

</body>
</html>
