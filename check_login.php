<?php
include("config.php");

// if($_SERVER["REQUEST_METHOD"] == "POST")
// {
    // username and password sent from Form 
$myun = addslashes($_POST['username']); 
$mypassword = addslashes($_POST['password']);
$msg =''; 
   if(isset($myun, $mypassword)) {
    ob_start();
    include('config.php'); //Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($myun);
    $mypassword = stripslashes($mypassword);
    $myusername = mysqli_real_escape_string($dbC, $myusername);
    $mypassword = mysqli_real_escape_string($dbC, $mypassword);
    $sql="SELECT * FROM admin WHERE BINARY username='$myusername' and BINARY password='$mypassword'";
     $result=mysqli_query($dbC, $sql);
     $count=mysqli_num_rows($result);
    if($count==1){
        // Register $myusername, $mypassword and redirect to file "admin.php"
        //session_register("admin_user_name");
        //session_register("admin_password");     
        session_start();       
        $_SESSION['username']= $myusername;
        include("admin_home.php");
    }

    else {
        $msg = "Wrong Username or Password. Please retry";
        header("location:adminlogin.php?msg=$msg");
        }
          ob_end_flush();
}
else {
    header("location:adminlogin.php?msg=Please enter username and password");
}
?>