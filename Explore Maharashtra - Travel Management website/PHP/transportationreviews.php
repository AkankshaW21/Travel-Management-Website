<?php

$con = mysqli_connect('localhost', 'root', '', 'travelmanagment');


$firstname = $_POST['cus_fname'];
$lastname = $_POST['cus_lname'];
$youremail = $_POST['cus_email'];
$transportationtype = $_POST['tar_type'];
$Transportationname = $_POST['tar_name'];
$Transportationroute = $_POST['tar_rname'];
$comments = $_POST['tar_feedbk'];
$rating = $_POST['tar_rating'];
$ratingtype = $_POST['tar_rtype'];
$ratingstatus = $_POST['tar_rstatus'];






$que="INSERT INTO `reviewstransportation` (`cus_id`,`tar_id`,`tar_rating_id`,`cus_fname`,`cus_lname`,`cus_email`,`tar_type`,`tar_name`,`tar_rname`,`tar_feedbk`,`tar_rating`,`tar_rtype`,`tar_rstatus`) 
VALUES (0,0,0,'$firstname','$lastname','$youremail','$transportationtype','$Transportationname','$Transportationroute','$comments','$rating','$ratingtype','$ratingstatus')";

$result = mysqli_query($con, $que);

if (isset($_POST['submit'])) {
	header('location:Trasportaion reviews.html');
}

?>