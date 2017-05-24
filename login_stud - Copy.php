<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // username and password sent from Form 
    $myun = addslashes($_POST['univid']); 
    $mypassword = addslashes($_POST['password']); 
       
        $sql="SELECT * FROM student WHERE univ_id='$myun' and password='$mypassword'";
        $result=mysql_query($sql);
        $row=mysql_fetch_array($result);
        $count=mysql_num_rows($result);
    

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
    //$_SESSION['loggedin'] = 1;
    //echo "Successfully  loggedin";
   session_start(); 
    $_SESSION['univid']=$myun;
    
    header("Location: studaccount.php");
    //exit;
    
    
    //echo("count is one 3");
    //session_register("myusername");
    //$_SESSION['login_user']=$myusername;
    //header("Location: employeelogin.php");
    
}
else 
{
    //$error="Your Login Name or Password is invalid";
    //echo '<span style="color:red;text-align:center;">Invalid username or password</span>';
    echo '<script language="javascript">';
    echo 'alert("Invalid university id or password")';
    echo '</script>';


}
}
?>