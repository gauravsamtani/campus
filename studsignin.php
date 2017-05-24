<?php
?>
<html>
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
    <form method="POST" class="register-form" action="trystud.php" >
        <input type="text" name ="name" placeholder="Name">
        <input type="text" name ="univid" placeholder="univid">
        <input type="password" name ="password" placeholder="Password">
        <input type="text" name ="email" placeholder="Email address">
        <input type="text" name ="number" placeholder="Mobile number">
        <input type="text" name ="address" placeholder="Address">
        <input type="text" name ="degree" placeholder="Current Degree">
        <input type="text" name ="sem" placeholder="Sem">
        <input type="text" name ="branch" placeholder="Branch">
        <button type="submit">create</button>
        <p class="message">Already registered? <a href="studlogin.php">Sign In</a></p>
    </form>
    <form class="login-form">
        <input type="text" placeholder="username"/>
        <input type="password" placeholder="password"/>
        <button>login</button>
        
    </form>
</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
    <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="logincss/index.js"></script>

</body>
</html>