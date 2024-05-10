<?php 
    // Include the connection file
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Details</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Staff Details</h2>
    <?php
include "aside.php";
    // Fetch data from the Staff table
    $query = "SELECT * FROM Staff";
    $result = mysqli_query($con, $query);

    // Check if data was retrieved successfully
    if ($result) {
        // Display the data in a table format
        echo "<table>
        <tr>
            <th>Staff ID</th>
            <th>Name</th>
            <th>Contact Information</th>
            <th>Work Schedule</th>
            <th>Commission Rate</th>
        </tr>";

        // Loop through each row of the result set
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['staff_id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['contact_information'] . "</td>";
            echo "<td>" . $row['work_schedule'] . "</td>";
            echo "<td>" . $row['commission_rate'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

        // Free result set
        mysqli_free_result($result);
    } else {
        // Display an error message if data retrieval fails
        echo "Error: " . mysqli_error($con);
    }

    // Close the connection
    mysqli_close($con);
    ?>
</body>
</html>
