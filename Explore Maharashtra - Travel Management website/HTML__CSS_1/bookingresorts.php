<?php

$con=mysqli_connect('localhost','root','','travelmanagment');

$resortname = $_POST['resort_name'];
$country = $_POST['resort_country'];
$state = $_POST['resort_state'];
$city = $_POST['resort_city'];
$pincode = $_POST['resort_pincode'];
$firstname = $_POST['cus_fname'];
$lastname = $_POST['cus_lname'];
$email = $_POST['cus_email']; // This will be the common attribute
$phone = $_POST['cus_phone'];




// Modify SQL query to include booking_date column with NOW() function
$sql = "INSERT INTO `bookingresorts` (`resort_id`, `resort_name`, `resort_country`, `resort_state`, `resort_city`, `resort_pincode`, `cus_fname`, `cus_lname`, `cus_email`, `cus_phone`) 
        VALUES (0, '$resortname', '$country', '$state', '$city', '$pincode', '$firstname', '$lastname', '$email', '$phone')";

$result = mysqli_query($con, $sql);

if($result){
    header('location:bookingresorts.html');
} else {
    echo "Error: " . mysqli_error($con);
}

?>
