<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="busschedule.css">
  <title>Bus Details</title>
  <script>
    // JavaScript code goes here
    document.addEventListener('DOMContentLoaded', function() {
      // Execute code after the DOM is fully loaded
      // You can add your JavaScript logic here
    });
  </script>
</head>
<body>
<section class="header">
        <nav>
            <a href="busschedule.php"><img src="images/logo.png" /></a>
          
            <div class="nav-links">
                <ul>
                    <li><a href="Homepage.php">HOME</a></li>
                    <li><a href="busschedule.php">BOOKINGS</a></li>
                    <li><a href="aboutUs.html">ABOUT US</a></li>
                    <li><a href="search.php">USER PROFILE</a></li>
                    <li><a href="LOGIN"></a></li>
                    <li><a href="adminlogin.php">ADMINLOGIN</a></li>
                </ul>
            </div>
        </nav>
    </section>
  <h1><center>Bus Details</center></h1>

  <?php
  
    $connection = mysqli_connect("localhost", "root", "", "bus_shcheduling_booking_system");

    
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }

    
function updateData($connection, $pId, $busId, $time, $date) {
  $query = "UPDATE booking2 SET p_id = '$pId', bus_id = '$busId', time = '$time', date = '$date' WHERE p_id = '$pId' AND bus_id = '$busId'";
  $result = mysqli_query($connection, $query);

  
  if ($result) {
    echo "Data updated successfully.";
  } else {
    echo "Error updating data: " . mysqli_error($connection);
  }
}


    
function deleteData($connection, $pId, $busId) {
  $query = "DELETE FROM booking2 WHERE p_id = '$pId' AND bus_id = '$busId'";
  $result = mysqli_query($connection, $query);

  
  if ($result) {
    echo "Data deleted successfully.";
  } else {
    echo "Error deleting data: " . mysqli_error($connection);
  }
}


    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $pId = $_POST["p_id"];
      $busId = $_POST["bus_id"];

      
      if (isset($_POST["update"])) {
        $time = $_POST["time"];
        $date = $_POST["date"];
        updateData($connection, $pId, $busId, $time, $date);
      }

      
if (isset($_POST["delete"])) {
  deleteData($connection, $pId, $busId);
}
    }

    
    $query = "SELECT * FROM booking2";
    $result = mysqli_query($connection, $query);

    
    if (mysqli_num_rows($result) > 0) {
      
      echo "<table>";
      echo "<tr><th>Passenger ID</th><th>Bus ID</th><th>Time</th><th>Date</th><th>Actions</th></tr>";

      
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['p_id'] . "</td>";
        echo "<td>" . $row['bus_id'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>
        <form method='post' action='update page.php'>
        <input type='text' name='p_id' value='" . $row['p_id'] . "' required>
        <input type='text' name='bus_id' value='" . $row['bus_id'] . "' required>
        <input type='time' name='time' value='" . $row['time'] . "' required>
        <input type='date' name='date' value='" . $row['date'] . "' required>
        <button type='submit' name='update'>Update</button>
        <input type='submit' name='delete' value='Delete'>
      </form>
      
            
              </td>";
        echo "</tr>";
      }

      echo "</table>";
    } else {
      echo "No data found.";
    }

    
    mysqli_close($connection);
  ?>
  <br>
  

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
