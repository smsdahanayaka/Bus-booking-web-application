<?php
session_start();
include 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $con_password = $_POST['con_password'];

    $sql = "INSERT INTO signupdetails (name, email, password, con_password) VALUES ('$name','$email','$password','$con_password')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $_SESSION['email'] = $email;
        echo "Data inserted successfully";
        // header('location:display.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <section class="header">
        <nav>
            <a href="bus_schedule.php"><img src="images/logo.png" /></a>
            <!-- nav bar -->
            <div class="nav-links">
                <ul>
                <li><a href="Homepage.html">HOME</a></li>
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
    <div class="theTitle">
        <h1><center>
            Online Bus Ticket
            </center>
        </h1>
    </div>
    <div class="container shadow-4">
       <center><form 
        onsubmit="return validate()" 
        id="signUp" 
        name="signUp"
        method="post"
        >
            <h2> Sign Up</h2>
            <label for="name">
                Name: <br>
                <input type="text" name="name" id="name" placeholder="Your name">
            </label> <br>
            <label for="email">
                Email:<br>
                <input type="email" id="email" name="email" placeholder="Your email">
            </label> <br>
            <label for="password">
                Password: <br>
                <input type="password" id="password" name="password" placeholder="Enter a password">
            </label> <br>
            <p id="error"></p>
            <label for="con_password">
                Confirm Password: <br>
                <input type="password" id="con_password" name="con_password" placeholder="Confirm password">
            </label>
            <p id="passwordConfirm"></p>
            <br><br>
            <button onclick="window.location.href='login2.php';" style="background-color: blue;" type="submit" name="submit"> Create account </button> <br> <br>
            <button onclick="goback()">Go Back </button>
            <br><br>
            <p id="login">
                Already have an account? <a href="login2.html"> log in instead </a>
                <p id="ifForiegn">
                    If you are a foreign person, Please click <a href="signup.html"> here </a> to register
                </p>
            </form></center>
            </p>

            
        </div>
    </div>
        <section class="footer">
            <div class="row">
                <div class="footer-col">
    
                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Contact us</a></li><br><br>
                            <li><a href="FAQ.html">FAQ</a></li><br><br>
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
    <script src="./validate.js"></script>
    <script>
        function goback(){
            history.back();
        }
    </script>
  </body>
</html>