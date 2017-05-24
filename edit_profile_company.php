<?php
session_start();
 $username=$_SESSION['username'];
if(!isset($_SESSION['username']))  
{  
  
    header("Location: comlogin.php");//redirect to login page to secure the welcome page without login access.  
}  
else{
    echo "welcome " . $_SESSION['username'];
} 

include"config.php";

$sql1="select com_id from company where username='$username'";
 $result=$dbC->query($sql1);
 if($result->num_rows>0)
 {
    
    while($row=$result->fetch_assoc())
    {
        $id=$row["com_id"];
    }
}
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
    
    <form method="POST"  action="change_com.php?id='<?php echo $id;?>'" >
        <input type="hidden" value="<?php echo $id;?>" name ="name" placeholder="Name" required="required">
        <input type="text" name ="name" placeholder="Name" required="required">
        <input type="text" name ="username" placeholder="Username" required="required">
        <input type="password" name ="password" placeholder="Password" pattern=".{8,}" required="required">
        <input type="email" name ="email" placeholder="email address" required="required">
        <input type="text" name ="number" placeholder="Mobile number" pattern="[7-9]{1}[0-9]{9}" required="required">
        <input type="text" name ="website" placeholder="website" required="required">
        <button type="submit">Update</button>
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

