<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

            <div class="container-body">

                <div class="container-inner-1">

                    <div class="inner-set " >    
                        <p class="inner-set-p">Profile Picture</p>
                    
                    </div>

                    <div class="inner-set" > 
                        <img class="img-profile " src="https://img.freepik.com/premium-vector/people-saving-money_24908-51569.jpg?w=740" alt="profile pic">
                            
                    </div>

                    <div class="inner-set" >
                         <p>JPG or PNG no larger than 5 MB</p> 
                    
                    </div>

                    <div class="inner-set" >
                        <button class="btn btn-primary" type="button">Upload new image</button>
                    
                    </div>
                       
                </div>

                <div class="container-inner-2">
                    
                        <div class="card-header">Account Details</div>

                        <div class="card-body-in">
                            <form method="post" action="newOneUpdate.php">
                        
                                    <!-- (username)-->
                                    <div class="card-body-inner">
                                        <label class="small" for="inputUsername">Username</label>
                                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" name="key" required>
                                    </div>
            
                                    <!-- Form Row-->
                                    <div class="card-body-inner">
                                        <!-- (first name)-->
                                        <div class="card-body-inner-1">
                                            <label class="small" for="inputFirstName">First name</label>
                                            <input class="form-control" id="inputFirstName" type="text" name="fName" placeholder="Enter your first name" required>
                                        </div>
                                        <!-- (last name)-->
                                        <div class="card-body-inner-1">
                                            <label class="small" for="inputLastName">Last name</label>
                                            <input class="form-control" id="inputLastName" type="text" name="lName"  placeholder="Enter your last name" required>
                                        </div>
                                    </div>
            
            
                                    <!-- Form Row -->
                                    <div class="card-body-inner">
                                        <!-- (Phone number)-->
                                        <div class="card-body-inner-1">
                                            <label class="small" for="inputPhone">NIC number</label>
                                            <input class="form-control" id="inputPhone" type="tel" name="nicNum"  placeholder="Enter your phone number" required>
                                        </div>
                                        <!--(Address)-->
                                        <div class="card-body-inner-1">
                                            <label class="small" for="inputAddress">Address</label>
                                            <input class="form-control" id="inputAddress" type="text" name="address"  placeholder="Enter your Address" required>
                                        </div>
                                    </div>
            
                                    <!-- (email address)-->
                                    <div class="card-body-inner">
                                        <label class="small" for="inputEmailAddress">Email address</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" name="email"  placeholder="Enter your email address">
                                    </div>

                                    <div class="card-body-inner">
                                        <label class="small" for="inputDateOfBirth">Date of Birth</label>
                                        <input class="form-control" id="inputDateOfBirth" type="text" name="bDay"  placeholder="Enter your birth day" >
                                    </div>
                                    <div class="card-body-inner">
                                        <label class="small" for="inputage">Age</label>
                                        <input class="form-control" id="inputage" type="text" name="age"  placeholder="Enter age">
                                    </div>
            
                                    <!-- Form Row-->
                                    <div class="card-body-inner">
                                        <!-- (password)-->
                                        <div class="card-body-inner-1">
                                            <label class="small" for="inputPassword"> Password</label>
                                            <input class="form-control" id="inputPassword" type="text" name="Password" name="pWord"  placeholder="Enter your Password" required>
                                        </div>
                                        <!-- (Confirm Password)-->
                                        <div class="card-body-inner-1">
                                            <label class="small" for="inputPassword">Confirm Password</label>
                                            <input class="form-control" id="inputPassword" type="text" name="Password" placeholder="Enter your Password" required>
                                        </div>
                                    </div>
                                    <!-- Save changes button-->
                                    <div class="card-body-inner card-body-inner-btn">
                                            
                                        <button onclick="submit()" class="btn-submit" type="submit" value='insert data'>Submit</button>
                                        <button class="btn-cancel" role="button" href="/myfirstproject/index.php">Cancle</button>
                                    </div>
                                </form>
                        </div>
                    
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