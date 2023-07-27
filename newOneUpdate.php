<?php
include 'config.php';

$firstName = $_POST['fName'];
$lastName = $_POST['lName'];
$address = $_POST['address'];
$nic = $_POST['nicNum'];
$dob = $_POST['bDay'];
$age = $_POST['age'];
$email = $_POST['email'];
$pWord = $_POST['Password'];
$userName = $_POST['key'];

// Prepare the statement
$sql = "UPDATE Passenger SET F_Name=?, L_Name=?, Address=?, NIC=?, DOB=?, Age=?, Email=?, Password=? WHERE P_Id=?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssssssiss", $firstName, $lastName, $address, $nic, $dob, $age, $email, $pWord, $userName);

// Execute the statement
if ($stmt->execute()) {
    echo "Record updated successfully";
    echo'<script>alert("successfully"); window.location.href = "search.php"</script>';
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$connection->close();
?>
