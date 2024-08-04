<?php

$con=mysqli_connect('localhost','root','','travel');

$firstname=$_POST['ffirst'];
$lastname=$_POST['flast'];
$email=$_POST['femail'];
$phone=$_POST['fphone'];
$hname=$_POST['hname'];
$city=$_POST['city'];



$sql="INSERT INTO `bookinghotels`(`id`,`ffirst`,`flast`,`femail`,`fphone`,`hname`,`city`) VALUES (0,'$firstname','$lastname','$email','$phone','$hname','$city')";
$result = mysqli_query($con,$sql);

if(isset($_POST['submit'])){
	header('location:bookinghotelshomepage.html');
}


?>