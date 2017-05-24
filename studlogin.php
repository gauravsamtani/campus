<?php
include("config.php");

// if($_SERVER["REQUEST_METHOD"] == "POST")
// {
//     // username and password sent from Form 
//     $myun = addslashes($_POST['univid']); 
//     $mypassword = addslashes($_POST['password']); 
       
//         $sql="SELECT * FROM student WHERE univ_id='$myun' and password='$mypassword'";
//         $result=mysql_query($sql);
//         $row=mysql_fetch_array($result);
//         $count=mysql_num_rows($result);
    

// // If result matched $myusername and $mypassword, table row must be 1 row
// if($count==1)
// {
//     //$_SESSION['loggedin'] = 1;
//     //echo "Successfully  loggedin";
//     header("Location: notification.php");
//     //exit;
    
    
//     //echo("count is one 3");
//     //session_register("myusername");
//     //$_SESSION['login_user']=$myusername;
//     //header("Location: employeelogin.php");
    
// }
// else 
// {
//     //$error="Your Login Name or Password is invalid";
//     //echo '<span style="color:red;text-align:center;">Invalid username or password</span>';
//     echo '<script language="javascript">';
//     echo 'alert("Invalid university id or password")';
//     echo '</script>';


// }
// }
?>
<!DOCTYPE html>
<html>
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
    <form class="login-form" method="post" action="login_stud.php">
        <input type="text" placeholder="SRN" name="univid"/>
        <input type="password" placeholder="password" name="password"/>
        <input type="submit" class="btn btn-lg btn-success btn-block"  value="Login" style="background-color: #ff5722;">
        <p class="message">Not registered? <a href="creatstudlog.php">Create an account</a></p>
        <p class="message"><a href="index.php">HOME<a></p>
    </form>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="logincss/index.js"></script>

</body>
</html>