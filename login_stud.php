<?php
include("config.php");


// if($_SERVER["REQUEST_METHOD"] == "POST")
// {
    // username and password sent from Form 
$myun = addslashes($_POST['univid']); 
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
    $sql="SELECT * FROM student WHERE BINARY univ_id='$myun' and BINARY password='$mypassword'";
     $result=mysqli_query($dbC, $sql);
     $count=mysqli_num_rows($result);
    if($count==1){
        // Register $myusername, $mypassword and redirect to file "admin.php"
        //session_register("admin_user_name");
        //session_register("admin_password");

        session_start();       
        $_SESSION['univid']= $myusername;
        include("stud_home.php");
    }

    else {
        $msg = "Wrong University Id or Password. Please retry";
        header("location:studlogin.php?msg=$msg");
        }
          ob_end_flush();
}
else {
    header("location:studlogin.php?msg=Please enter University Id and password");
}
?>









<!-- 
// include("config.php");

// if($_SERVER["REQUEST_METHOD"] == "POST")
// {
    // username and password sent from Form 
    // $myun = addslashes($_POST['univid']); 
    // $mypassword = addslashes($_POST['password']); 
       
    //     $sql="SELECT * FROM student WHERE univ_id='$myun' and password='$mypassword'";
    //     $result=mysql_query($sql);
    //     $row=mysql_fetch_array($result);
    //     $count=mysql_num_rows($result);
    

// If result matched $myusername and $mypassword, table row must be 1 row
// if($count==1)
// {
    //$_SESSION['loggedin'] = 1;
    //echo "Successfully  loggedin";
   // session_start(); 
   //  $_SESSION['univid']=$myun;
    
   //  header("Location: studaccount.php");
    //exit;
    
    
    //echo("count is one 3");
    //session_register("myusername");
    //$_SESSION['login_user']=$myusername;
    //header("Location: employeelogin.php");
    
// }
// else 
// {
    //$error="Your Login Name or Password is invalid";
    //echo '<span style="color:red;text-align:center;">Invalid username or password</span>';
//     echo '<script language="javascript">';
//     echo 'alert("Invalid university id or password")';
//     echo '</script>';


// }
// } -->