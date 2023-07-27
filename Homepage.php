<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Easy Way Tours| Homepage</title>
    <link rel="stylesheet" href="Homepage.css" />
</head>

<body>
    <!--header-->
    <section class="header">
        <nav>
            <a href="Homepage.html"><img src="images/logo.png" /></a>
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

        <div class="easywaytours-heading">
            <h1>WELCOME TO EASY WAY TOURS</h1>
            <a href="aboutUs.html" class="about-us-btn"> Visit us to know more</a>
        </div>
    </section>

    <!-- home page content -->

    <section class="homepage-desc">
        <h1>Facilities</h1>
        <div class="row">
            <div class="desc-col">
                <img src="images/hours.png" />
                <h3>24-Hrs Available</h3>
            </div>
            <div class="desc-col">
                <img src="images/tracking1.png" />
                <h3>Tracking System</h3>
            </div>
            <div class="desc-col">
                <img src="images/payment.png" />
                <h3>Payment Security</h3>
            </div>
            <div class="desc-col">
                <img src="images/booking.png" />
                <h4>100% successful live booking</h4>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <section class="footer">
        <div class="row">
            <div class="footer-col">

                <div class="footer-links">
                    <ul>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">T&C</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-col">
                <p>Made of Payment</p>
                <img src="images/payments.png">
            </div>
            <div class="footer-col">
                <h4>Follow Us</h4>
                <img src="images/socialmedia.png">
            </div>
    </section>
    <script>
        // JavaScript code...
        document.addEventListener("DOMContentLoaded", function() {
            var bookingStatus = document.getElementById("bookingStatus");
            
            // Modify the text dynamically
            bookingStatus.textContent = "Book with us for a guaranteed successful live booking!";
        });
    </script>
</body>

</html>