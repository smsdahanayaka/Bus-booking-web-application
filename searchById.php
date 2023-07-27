<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
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
                <table class="table" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>first Name</th>
                            <th>last Name</th>
                            <th>Address</th>
                            <th>Nic</th>
                            <th>DOB</th>
                            <th>Age</th>
                            <th>E mail</th>
                            <th>Password</th>
                            <th>click</th>
                        </tr>
                    </thead>
                <tbody>
                <?php
                        include 'config.php';
                        $key= $_POST['key'];
                        $sql = "SELECT * FROM Passenger WHERE P_Id='$key'";
                        $result=$connection->query($sql);
                    

                        while($row=$result->fetch_assoc()){
                                echo "
                                <tr>
                                <td>$row[P_Id]</td>
                                <td>$row[F_Name] </td>
                                <td>$row[L_Name] </td>
                                <td>$row[Address] </td>
                                <td>$row[NIC] </td>
                                <td>$row[DOB] </td>
                                <td>$row[Age] </td>
                                <td>$row[Email]</td>
                                <td>$row[Password] </td>
                                <td>
                                
                                    <a href='editProfile.php?$key' class='btn-submit'>Edit</a>
                                    
                                
                                        
                                    </td>
                
                            </tr>
                            <br>
                        
                                
                                ";

                        }
                        ?>
                        </tbody>
                </table>
                
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