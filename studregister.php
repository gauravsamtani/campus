<?php

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

<style>
body  {
    background-image: url("img/slides/2.jpg");
    /*background-color: #cccccc;*/
}
</style>
</head>

<body>


<div class="container">
    <div class="info">

    </div>
</div>
<div class="form">
    <div class="thumbnail"><img src="img/hat.svg"/></div>
    <form method="POST"  action="trycomp.php" >

        <input type="email" name ="email" placeholder="email address" required="required">
        <input type="text" name ="usn" placeholder="USN" required="required">
        <select name="Gender"  style="outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;">
        <option value="West campus">Male</option>
        <option value="South campus">Female</option> 
        </select>
        <select name="Degree"  style="outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;">
        <option value="West">MBA</option>
        <option value="West campus">MCA</option>
        <option value="South campus">Computer Science</option>
        </select>
        <input type="text" name ="10th %" placeholder="10th %" required="required">
        <input type="text" name ="12th/Diploma%" placeholder="12th %" pattern=".{8,}" required="required">
        <input type="text" name ="UG CGPA/%" placeholder="UG %" pattern="[7-9]{1}[0-9]{9}" required="required">
        <input type="text" name ="PG CGPA/%" placeholder="PG %" required="required">
        <input type="text" name ="number" placeholder="Mobile number" required="required">
        <select name="Campus Name"  style="outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
  box-sizing: border-box;
  font-size: 14px;">
        <option value="West">PESIT West Campus</option>
        <option value="West campus">PESIT South Campus</option>
        </select>

        <button type="submit">create</button>
        <!-- <p class="message">Already registered? <a href="comlogin.php">Sign In</a></p> -->
    </form>

</div>
<video id="video" autoplay="autoplay" loop="loop" poster="polina.jpg">
    <source src="http://andytran.me/A%20peaceful%20nature%20timelapse%20video.mp4" type="video/mp4"/>
</video>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="logincss/index.js"></script>

</body>
</html>

