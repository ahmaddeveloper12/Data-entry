<!DOCTYPE html>
<html>
<head>
    <title>Data Fetching from Database</title>
</head>
<body>
    <center>
<?php

    $conn = mysqli_connect("localhost", "root", "", "work");

   
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connection successful<br>";

  
    $sql = "SELECT * FROM apply";
    $result = $conn->query($sql);

    
    if ($result) {
        $n = mysqli_num_rows($result);
        echo "Total records: " . $n . "<br>";

       
        if ($n > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>father</th>
                        <th>mother</th>
                        <th>sister</th>
                        <th>sister2</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['father'] . "</td>
                        <td>" . $row['mother'] . "</td>
                        <td>" . $row['sister'] . "</td>
                          <td>" . $row['sister2'] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No records found.";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    mysqli_close($conn);
?>
    </center>
</body>
</html>
