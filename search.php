<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="body_container">
     
            <div class="header">
                <nav>
                    <div class="logo navbar">
                        <a href="user profile.php"><img src="images/logo.png"></a>
                    </div>
                    <!-- nav bar -->

                    <div class="nav-links navbar">
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

                
            </div>
            <hr>
        
        
                <div class="container-body-1">
                    
                        
                            <div class="img1">
                                <img class="img-profile " src="https://img.freepik.com/premium-vector/people-saving-money_24908-51569.jpg?w=740" alt="profile pic">
                            </div>
                            
                            <div class="img-search">
                                    
                                <form action="searchById.php" method="post">
                                    <input type="text" name="key" placeholder="enter user name">
                                    <input class="btn-primary"  type="submit" value="Search by person">
                                
                                </form>
                            </div>
                    
                
                </div>
        
             <div class="footer">
                
                <div class="footer-col footer-col-1">

                    <div class="footer-links">
                        <ul>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">T&C</a></li>
                        </ul>
                    </div>

                </div>

                <div class="footer-col footer-col-2">
                    <p>Made of Payment</p>
                    <img src="images/payments.png">
                </div>


                <div  class="footer-col footer-col-3">
                    <h4>Follow Us</h4>
                    <img src="images/socialmedia.png">
                </div>
                
            
            </div>
    </div>
</body>
</html>
