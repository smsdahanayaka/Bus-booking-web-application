<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="busschedule.css">
    <title>Bus Scheduling and Booking System</title>
    
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
                    <li><a href="signup.php">SIGN UP</a></li>
                    <li><a href="login2.php">LOGIN</a></li>
                    <li><a href="adminlogin.php">ADMINLOGIN</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <h1>User Table</h1>

    <br>

    <table>
        <tr>
            <th>Bus ID</th>
            <th>Route</th>
            <th>Available Buses</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        
        <?php 
        include 'bustable.php';
         ?>

        
    </table>
    


    <div class="booking-form">
        <center><h2><b><u>Reserve a Bus Seat</u></b></h2></center>
        <br/>
        <form action="busbooking.php" method="post"><center>

            <label for="p_id">Enter Passenger ID:</label>
            <input type="text" id="passenger id" name="passenger id" placeholder="pXXXX" required><br><br>

            <label for="route">Enter Bus ID:</label>
            <input type="text" id="route" name="route" placeholder="XXXX" required><br><br>
            
            <label for="time">Enter Time:</label>
            <input type="time" id="time" name="time" placeholder="00:00" required><br><br>
            
            <label for="date">Enter Date:</label>
            <input type="date" id="date" name="date" placeholder="enter data" required><br><br>
            
            <input type="submit" value="BOOK NOW">
       </center>
    </form>
    </div>
    <br>
    
    <script>
      // JavaScript code goes here
      document.addEventListener('DOMContentLoaded', function() {
        // Get the form element
        const form = document.querySelector('form');

        // Attach an event listener to the form submission
        form.addEventListener('submit', function(event) {
          event.preventDefault(); // Prevent the form from submitting normally

          // Get the input field values
          const passengerId = document.getElementById('passenger_id').value;
          const busId = document.getElementById('route').value;
          const time = document.getElementById('time').value;
          const date = document.getElementById('date').value;

          // Perform any necessary validation
          if (passengerId && busId && time && date) {
            // Submit the form using AJAX or perform any other logic
            console.log('Form submitted successfully');
            // You can make an AJAX request here to send the form data to the server
          } else {
            // Display an error message if any field is missing
            console.log('Please fill in all the fields');
          }
        });
      });
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
</html
