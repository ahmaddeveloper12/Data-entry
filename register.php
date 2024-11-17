<html>
<head>
    <title>How to Write a Program</title>
</head>
<body>
    <?php
       // Collect form data from POST request
       $father = $_POST["father"];
       $mother = $_POST["mother"];
       $sister = $_POST["sister"];
       $sister2 = $_POST["sister2"];
      
       // Establish a connection to the MySQL database
       $conn = mysqli_connect("localhost", "root", "", "work");

       // Check if the connection was successful
       if ($conn->connect_error) {
           die('Connection failed: ' . $conn->connect_error);
       } else {
           // Prepare the SQL statement with placeholders
           $stmt = $conn->prepare("INSERT INTO apply (father, mother, sister, sister2) VALUES (?, ?, ?, ?)");

           // Bind the parameters to the prepared statement
           $stmt->bind_param("ssss", $father, $mother, $sister, $sister2);

           // Execute the statement
           if ($stmt->execute()) {
               echo "Registration successful!";
           } else {
               echo "Error: " . $stmt->error;
           }

           // Close the statement and connection
           $stmt->close();
           $conn->close();
       }
    ?>
</body>
</html>
