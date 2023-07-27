<?php
session_start();
require_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email= $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "SELECT * FROM adminlogin WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

    
        if ($password == $row['password']) {
            
            $_SESSION['email'] = $row['Email'];
            $_SESSION['password'] = $row['Password'];
            header("Location:adminlogin.php?id=" . $row['Email']);
            exit;
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Invalid Email";
    }
}

if ($password == $row['password']) {
    
    $_SESSION['email'] = $row['Email'];
    $_SESSION['password'] = $row['Password'];
    header("Location:adminlogin.php?id=" . $row['Email']);
    exit;
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet"  href="adminlogin.css">
  <title> Admin Login</title>
</head>
<body>
  <section class="header">
    <nav>
        <a href="adminlogin.php"><img src="images/logo.png" /></a>
      
        <div class="nav-links">
            <ul>
            <li><a href="Homepage.html">HOME</a></li>
                    <li><a href="busschedule.php">BOOKINGS</a></li>
                    <li><a href="aboutUs.html">ABOUT US</a></li>
                    <li><a href="searchById.php">USER PROFILE</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                    <li><a href="login2.php">LOGIN</a></li>
                    <li><a href="adminlogin.php">ADMINLOGIN</a></li>
            </ul>
        </div>
    </nav>
</section>

  <div class="container">
    <h2>Admin Login</h2>
    <form  method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
    </form>
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

</body>
