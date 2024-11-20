<html>
<head>
    <title>Delete from Database</title>
</head>
<body>

<?php
// Start session to retrieve session data
session_start();

// Check if 'father' session variable is set
if (isset($_SESSION['father'])) {
    // Get the 'father' value from the session
    $id = $_SESSION['father'];

    // Establish a connection to the database
    $conn = mysqli_connect("localhost", "root", "", "work");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL query to delete the record
    $sql = "DELETE FROM apply WHERE father = ?";
    $stmt = $conn->prepare($sql);  // Prepare the SQL query
    
    if ($stmt === false) {
        die("Error preparing the SQL query: " . $conn->error);
    }

    // Bind the parameter to the query (the value of 'father' from the session)
    $stmt->bind_param("s", $id);  // Assuming 'father' is a string type, use "i" if it's an integer

    // Execute the statement
    if ($stmt->execute()) {
        echo "Successfully deleted the record.";
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
} else {
    echo "No father session variable set.";
}
?>

</body>
</html>
