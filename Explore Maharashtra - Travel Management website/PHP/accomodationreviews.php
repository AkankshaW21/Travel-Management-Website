<?php

$con = mysqli_connect('localhost', 'root', '', 'travelmanagment');


$firstname = $_POST['cus_fname'];
$lastname = $_POST['cus_lname'];
$youremail = $_POST['cus_email'];
$accomodationtype = $_POST['acco_type'];
$accomodationname = $_POST['acco_name'];
$accomodationcity = $_POST['acco_city'];
$comments = $_POST['acco_feedbk'];
$rating = $_POST['acco_rating'];
$ratingtype = $_POST['acco_rtype'];
$ratingstatus = $_POST['acco_rstatus'];






$que="INSERT INTO `reviewsaccomodation` (`cus_id`,`acco_rating_id`,`cus_fname`,`cus_lname`,`cus_email`,`acco_type`,`acco_name`,`acco_rname`,`acco_feedbk`,`acco_rating`,`acco_rtype`,`acco_rstatus`) 
VALUES (0,0,'$firstname','$lastname','$youremail','$accomodationtype','$accomodationname','$accomodationcity','$comments','$rating','$ratingtype','$ratingstatus')";

$result = mysqli_query($con, $que);

if (isset($_POST['submit'])) {
	header('location:accomodationreviews.html');
}

?>