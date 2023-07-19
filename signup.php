<?php
error_reporting(0);
include("connection.php");

if (isset($_POST["submit"])){
  $userName = $_POST['userName'];
  $password = $_POST['password'];
  if(!empty($userName)&&!empty($password)){
    $query = "insert into users (userName,password) values ('$userName','$password')";
    mysqli_query($conn, $query);
    header("LOCATION: login.php");
    die;
  }else
  {
    echo"enter your information";
  }  
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="design.css">
  <title>signup</title>
</head>

<body>
  <nav>
    <a href="login.php">back</a>
  </nav>
  <div id="box">
    <form method="post" action="">
    <div style="font-size: 20px;margin: 10px;">Signup</div>
      <input id="text" type="text" name="userName" placeholder="USERNAME"></input></br></br>
      <input id="text" type="password" name="password" placeholder="PASSWORD"></input></br></br>
      <input id="button" type="submit" name="submit" value="signup"></input>
  
  </form>
  <p>registered?....go to
            <a href="login.php">Login</a>
        </p>
        </div>


</body>

</html>