<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Bus_Shcheduling_Booking_System";

$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo "Connection successful\n";
}
?>
