<?php

$con = mysqli_connect('localhost', 'root', '', 'travelmanagment');


$firstname = $_POST['cus_fname'];
$lastname = $_POST['cus_lname'];
$youremail = $_POST['cus_email'];
$Placestype = $_POST['place_type'];
$Placesname = $_POST['place_name'];
$Placescity = $_POST['place_city'];
$comments = $_POST['place_feedbk'];
$rating = $_POST['place_rating'];
$ratingtype = $_POST['place_rtype'];
$ratingstatus = $_POST['place_rstatus'];






$que="INSERT INTO `reviewsplaces` (`place_rating_id`,`cus_fname`,`cus_lname`,`cus_email`,`place_type`,`place_name`,`place_city`,`place_feedbk`,`place_rating`,`place_rtype`,`place_rstatus`) 
VALUES (0,'$firstname','$lastname','$youremail','$Placestype','$Placesname','$Placescity','$comments','$rating','$ratingtype','$ratingstatus')";

$result = mysqli_query($con, $que);

if (isset($_POST['submit'])) {
	header('location:PlacesReviews.html');
}

?>