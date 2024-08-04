<?php

$con=mysqli_connect('localhost','root','','travelmanagment');

$busname=$_POST['bus_name'];
$source=$_POST['bussource_name'];
$destination=$_POST['busdestination_name'];
$seatnumber=$_POST['busseat_number'];
$firstname=$_POST['cus_fname'];
$lastname=$_POST['cus_flast'];
$email=$_POST['cus_email'];
$phone=$_POST['cus_phone'];

// Modify SQL query to include booking_date column with NOW() function
$sql="INSERT INTO `bookingbus`(`bus_id`,`bus_name`,`bussource_name`,`busdestination_name`,`busseat_number`,`cus_fname`,`cus_flast`,`cus_email`,`cus_phone`) 
      VALUES (0,'$busname','$source','$destination','$seatnumber','$firstname','$lastname','$email','$phone')";

$result = mysqli_query($con, $sql);

if($result){
    header('location:busbooking.html');
} else {
    echo "Error: " . mysqli_error($con);
}

?>
