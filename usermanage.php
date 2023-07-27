<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Easy Way Tours | Admin section - Users</title>
   <link rel="stylesheet" href="usermanage.css">
</head>
<body>
<!--header-->
   <section class="sub-header">
     <nav>
        <a href="Home page.html"><img src="images/logo.png"></a>
		<!-- nav bar -->
		<div class="nav-links" >
		    <ul>

				<li><a href="Admin manage users.php">MANAGE USERS</a></li>
				
			</ul>	
		</div>		
	 </nav>
	 <h1>Manage User Accounts</h1>
   </section>

<!--- Manage staff user account page content ---> 
        
   <section class="admin-content">
   
     <!--- Admin buttons --->	 
     <div class="booking-btn">
		<a href="Admin user accounts-staff.php" class="admin-btn"> Manage Staff Accounts </a>
     </div>

     <div class="content">
	 
	<!--- staff user accounts table --->
		
	<?php      
        $sql = "SELECT * 
                FROM  userdetails";
                
                
        $result = $connection ->query($sql);
        if($result)
        {
		    echo '<table>
			      <thead>
			            <th> p_id </th>
				        <th> name </th>
				        <th> email </th>
                    <th> mobile</th>
				        <th> action </th>
			      </thead>
				  <tbody>';
            while($row =mysqli_fetch_assoc($result))
            {
              $p_id = $row['p_id'];
              $name = $row['name'];
              $email = $row['email'];
              $mobile=$row['mobile'];
              
              echo '<tr>
                        <td>'.$p_id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$mobile.'</td>
					    <td><a href="" class="delete">Delete</a></td>
                    </tr>';                       
            }
			echo '</tbody>
			      </table>';
        }
    ?>
     </div>	 
   </section>
   
</body>
</html>