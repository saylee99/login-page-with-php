<?php 
$host="localhost";
$user="root";
$password="";
$db="demo";
$con = mysqli_connect("localhost","root","","demo");

$txtEmail = $_POST['email'];
$txtPass = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `loginform` (`Id`, `User`, `Pass`) VALUES ('0', '$txtEmail', '$txtPass')";

// insert in database 
$rs = mysqli_query($con, $sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Login Page</title>
</head>
<body>
  

    <form method="POST" action="#">
        <h2>Secret Diary</h2>
        <h4>Store your thoughts permanently and securely.</h4>
        <br><br>
        <h4>Log in using your username and password.</h4>
        <input type="email" name="email"placeholder="Your Email ">
        <br>
        <input type="password" name="password" placeholder="Password">
        <div id="check">
        <input type="checkbox"  name="signup">
    <label for="signup"> Stay logged in.</label><br>
</div>
      <button class="btns"> Log in</button>
      <br>
      <a href="index.php">Sign up</a>

      
    </form>
</body>
</html>