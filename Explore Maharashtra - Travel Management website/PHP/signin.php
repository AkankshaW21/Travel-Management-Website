<?php

$db = mysqli_connect('localhost','root','','travelmanagment');

$username = $_POST["cus_fname"];
$password = $_POST["cus_password"];
$d = date("Y-m-d h:i:sa");
$i=0;
$usern = "";
$passd = "";

$que="INSERT INTO `login` (`cus_fname`,`cus_password`,`date_time`) VALUES ('$username','$password','$d')";

$sql="SELECT cus_fname, cus_password FROM `customer` WHERE cus_fname='$username' and cus_password='$password'";
$result2 = mysqli_query($db, $sql);

if(isset($_POST['submit'])){
	if($username == 'admin' and $password == 'ad123'){
		$result = mysqli_query($db, $que);
		header('location:admin.php');
	}
	elseif($result2) {
		while($rows = mysqli_fetch_assoc($result2) and $i==0)
		{

			$usern = $rows['cus_fname'];
			$passd = $rows['cus_password'];
			$i= $i+1;
		}
		if ($usern==$username and $passd==$password) {
			$result = mysqli_query($db, $que);
			header("location:travel home page.html");
		}
		else{
			?>
			<script>
				alert("Invalid username or password");
			</script>
			<?php
		}
	}
}

?>