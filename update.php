
<?php
include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data and sanitize/validate if necessary
  $passenger_id = $_POST['passenger_id'];
  $route = $_POST['bus_id'];
  $time = $_POST['time'];
  $date = $_POST['date'];

  // Prepare and execute SQL statement to update data in the table
  $sql = "UPDATE booking2 SET bus_id = '$route', time = '$time', date = '$date' WHERE p_id = '$passenger_id'";

  if (mysqli_query($conn, $sql)) {
    echo "Data updated successfully.";
  } else {
    $error_message = "Error updating data: " . mysqli_error($conn);
    error_log($error_message); // Log the error
    echo "An error occurred. Please try again later.";
  }

  // Close the database connection
  mysqli_close($conn);
}
?>

