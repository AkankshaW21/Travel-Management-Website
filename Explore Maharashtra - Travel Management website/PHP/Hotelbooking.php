<?php

$con=mysqli_connect('localhost','root','','travelmanagment');

$Hotelname = $_POST['hotel_name'];
$country = $_POST['hotel_country'];
$state = $_POST['hotel_state'];
$city = $_POST['hotel_city'];
$pincode = $_POST['hotel_pincode'];
$firstname = $_POST['cus_fname'];
$lastname = $_POST['cus_lname'];
$email = $_POST['cus_email']; // This will be the common attribute
$phone = $_POST['cus_phone'];




// Modify SQL query to include booking_date column with NOW() function
$sql="INSERT INTO `bookinghotel`(`hotel_id`,`hotel_name`,`hotel_country`,`hotel_state`,`hotel_city`,`hotel_pincode`,`cus_fname`,`cus_flast`,`cus_email`,`cus_phone`) 
      VALUES (0,'$Hotelname','$country','$state','$city','$pincode','$firstname''$lastname','$email','$phone')";

$result = mysqli_query($con, $sql);

if($result){
    header('location:Hotelbooking.html');
} else {
    echo "Error: " . mysqli_error($con);
}

?>
