<?php

include 'config.php';

// Retrieve form data
$passenger_id = $_POST['passenger_id'];
$route = $_POST['route'];
$time = $_POST['time'];
$date = $_POST['date'];

// Prepare and execute SQL statement to insert data into the table
$sql = "INSERT INTO booking2 (p_id, bus_id, time, date) VALUES ('$passenger_id', '$route', '$time', '$date')";

if ($con->query($sql) === TRUE) {
    echo "Data inserted successfully.";
} else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$con->close();
?>
