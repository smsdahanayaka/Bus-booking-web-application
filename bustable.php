<?php
include 'config.php';

// Fetch data from the "route_details" table
$sql = "SELECT * FROM route_details";
$result = $con->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Loop through each row and display the data in table rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        
        echo "<td>" . $row["bus_id"] . "</td>";
        echo "<td>" . $row["route"] . "</td>";
        echo "<td>" . $row["available buses"] . "</td>";
        echo "<td>" . $row["date"] . "</td>";
        echo "<td>" . $row["time"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No data available</td></tr>";
}

// Close the database connection
$con->close();
?>

