<?php

$con=mysqli_connect('localhost','root','','travelmanagment');

$trainname=$_POST['train_name'];
$source=$_POST['trainsource_name'];
$destination=$_POST['traindestination_name'];
$seatnumber=$_POST['trainseat_number'];
$firstname=$_POST['cus_fname'];
$lastname=$_POST['cus_flast'];
$email=$_POST['cus_email'];
$phone=$_POST['cus_phone'];

// Modify SQL query to include booking_date column with NOW() function
$sql="INSERT INTO `bookingtrain`(`train_id`,`train_name`,`trainsource_name`,`traindestination_name`,`trainseat_number`,`cus_fname`,`cus_flast`,`cus_email`,`cus_phone`) 
      VALUES (0,'$trainname','$source','$destination','$seatnumber','$firstname','$lastname','$email','$phone')";

$result = mysqli_query($con, $sql);

if($result){
    header('location:trainbooking.html');
} else {
    echo "Error: " . mysqli_error($con);
}

?>
