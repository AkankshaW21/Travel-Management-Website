<?php
// Database connection
$servername = "your_database_server";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // SQL query to check the user's credentials
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Authentication successful, redirect to a welcome page
        header("Location: welcome.php");
        exit();
    } else {
        // Authentication failed, display an error message
        $error = "Invalid login credentials. Please try again.";
    }
}

$conn->close();
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <h1> Login</h1>
    <div class="textBoxdiv">
        <input type="text" placeholder="Username">
     </div>
     <div class="textBoxdiv">
     <input type="password" placeholder="password">
     </div>
     <input type="submit" value="Login" class="loginBtn">
     <div class="signup">
Dont's have an account ?
     </br>
     <a href="a">Sign up</a>
     </div>
    
    </form>
</body>
<body>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
       margin: 0;
       padding: 0;
       text-decoration: none;
       box-sizing: border-box;
        }

body {
    min-height: 100vh;
    background: linear-gradient(to right top,#a1a1a1,#84b4d7,#00d1e3,#00e7a2,#a8eb12 );
}
form {
    background: #989898ce;
    width: 350px;
    height: 500px;
    padding: 75px 50px;
    position: absolute;
    left: 50%;
    right: 50%;
    margin-top: 350px;
    transform: translate(-50%,-50%);
}
h1 {
    text-align: center;
    margin-bottom: 45px;
    color: white;

}
.textBoxdiv {
    border-bottom: 2px solid white;;
position: relative;
margin: 35px 0;

}
.textBoxdiv input  {
background: none;
border: none;
outline: none;
width: 100%;
color: white;
height: 30px;
font-size: 20px;

}
.loginBtn {
    transition: 0.5s;
    height: 45px;
    width: 100%;
    border: none;
    outline: none;
    background: linear-gradient(to right top,#a1a1a1,#84b4d7,#00d1e3,#00e7a2,#a8eb12 );
color: white;
background-size: 200%;
font-size: 16px;
}
.loginBtn:hover {
    background-position: right;
    font-size: 17px;
}
.signup {
    color: white;
    margin-top: 45px;
    text-align: center;
}
.signup a {
    color: black;
}
</style>

</body>
</html>