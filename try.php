<?php

$dbC = mysqli_connect("mysql.hostinger.in", "u321707978_campu", "gaurav1994", "u321707978_campu");
if(!$dbC)
{
    die('Error Connecting to MySQL DataBase');
}
$_POST['name'];
$_POST['username'];
$_POST['password'];
$_POST[''];
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Campus Recruitment</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="logincss/style.css">


</head>

<body>


<div class="container">
    <div class="info">

    </div>
</div>
<div class="form">
    <div class="thumbnail"><img src="img/hat.svg"/></div>
    <form class="register-form" action="" method="post">
        <input type="text" name ="name" placeholder="Name"/>
        <input type="username" name ="username" placeholder="Username"/>
        <input type="password" name ="password" placeholder="Password"/>
        <input type="text" name ="email" placeholder="email address"/>
        <input type="text" name ="mobienumber" placeholder="Mobile number"/>
        <input type="text" name ="website" placeholder="website"/>
        <button>create</button>
        <p class="message">Already registered? <a href="login.php">Sign In</a></p>
    </form>
    <form class="login-form">
        <input type="text" placeholder="username"/>
        <input type="password" placeholder="password"/>
        <button>login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
    <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="logincss/index.js"></script>

</body>
</html>

