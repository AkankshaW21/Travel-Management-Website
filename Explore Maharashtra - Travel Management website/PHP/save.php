<?php

$con = mysqli_connect('localhost', 'root', '', 'travelmanagment');

$firstname = $_POST['cus_fname'];
$middlename = $_POST['cus_mname'];
$lastname = $_POST['cus_lname'];
$gender = $_POST['cus_gender'];
$password = $_POST['cus_password'];
$email = $_POST['cus_email']; // This will be the common attribute
$phone = $_POST['cus_phone'];
$dob = $_POST['cus_dob']; // Date of Birth
$country = $_POST['cus_country'];
$state = $_POST['cus_state'];
$city = $_POST['cus_city'];
$pincode = $_POST['cus_pincode'];

// Calculate age from date of birth
$dob_timestamp = strtotime($dob);
$now_timestamp = time();
$age = date('Y', $now_timestamp) - date('Y', $dob_timestamp);
if (date('md', $now_timestamp) < date('md', $dob_timestamp)) {
    $age--;
}

$sql = "INSERT INTO `customer`(`cus_fname`,`cus_mname`,`cus_lname`,`cus_gender`,`cus_password`,`cus_email`,`cus_phone`,`cus_dob`,`cus_country`,`cus_state`,`cus_city`,`cus_pincode`) VALUES ('$firstname','$middlename','$lastname','$gender','$password','$email','$phone','$dob','$country','$state','$city','$pincode')";
$result = mysqli_query($con, $sql);

if ($result) {
    if ($firstname == "" && $password == "") {
        header("location:admin.php");
    } else {
        header("location:travel home page.html");
    }
} else {
    $que = "SELECT `cus_fname` FROM `customer` WHERE cus_fname='$firstname'";
    $result = mysqli_query($con, $que);
    if ($result) {
        ?>
        <script type="text/javascript">
            alert("Username already taken")
        </script>
<?php
    }
}
?>
