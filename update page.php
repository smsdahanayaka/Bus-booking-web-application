<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bus schedule.css">
<link rel="stylesheet" href="payment.css">
  <title>Update Form</title>
</head>
<body>
<?php
include 'config.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $passenger_id = $_POST['p_id'];
  $route = $_POST['bus_id'];
  $time = $_POST['time'];
  $date = $_POST['date'];

  
  $sql = "UPDATE booking2 SET bus_id = '$route', time = '$time', date = '$date' WHERE p_id = '$passenger_id'";

  if (mysqli_query($con, $sql)) {
    echo "Data updated successfully.";
  } else {
    $error_message = "Error updating data: " . mysqli_error($conn);
    error_log($error_message); 
    echo "An error occurred. Please try again later.";
  }


  mysqli_close($con);
}
?>
<section class="header">
        <nav>
            <a href="bus_schedule.php"><img src="images/logo.png" /></a>
            <!-- nav bar -->
            <div class="nav-links">
                <ul>
                    <li><a href="Homepage.html">HOME</a></li>
                    <li><a href="bus_schedule.php">BOOKINGS</a></li>
                    <li><a href="aboutUs.html">ABOUT US</a></li>
                    <li><a href="searchById.php">USER PROFILE</a></li>
                    <li><a href="LOGIN"></a></li>
                    <li> <a href="adminlogin.php">ADMIN LOGIN</a></li>

                </ul>
            </div>
        </nav>
    </section>
  <h1><center>Update Form</center></h1>

  <form action="" method="post" onsubmit="return validateForm()">
  <label for="passenger_id">Passenger ID:</label>
  <input type="text" id="passenger_id" name="passenger_id" required><br><br>

  <label for="bus_id">Bus ID:</label>
  <input type="text" id="bus_id" name="bus_id" required><br><br>

  <label for="time">Time:</label>
  <input type="time" id="time" name="time" required><br><br>

  <label for="date">Date:</label>
  <input type="date" id="date" name="date" required><br><br>

  <input type="submit" value="Update">
</form>
<br>


  <script>
    function validateForm() {
    }
  </script>
  <section class="footer">
            <div class="row">
                <div class="footer-col">
    
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="FAQ.html">FAQ</a></li>
                            <li><a href="#">T&C</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-col">
                    <p>Made of Payment</p>
                    <img src="images/payments.png">
                </div>
                <div  class="footer-col">
                    <h4>Follow Us</h4>
                    <img src="images/socialmedia.png">
                </div>
            </div>
        </section>
</body>
</html>
