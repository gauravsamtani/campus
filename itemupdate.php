<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("location:404.html");
} else {
	$username= $_SESSION['username'];
    
}

 
/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/

$link = mysqli_connect("mysql.hostinger.in", "u321707978_campu", "gaurav1994", "u321707978_campu");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 $job_id=$_GET['$id'];

// Escape user inputs for security
    
$sql = "UPDATE job_details SET status=1 WHERE job_id='$job_id'";
if (mysqli_query($link, $sql)){
    $msg = "Update complete";
        header("location:comaccount.php?msg=$msg");
} else {
	$msg = "Check your information.";
    header("location:comaccount.php?msg=$msg");
	}


 
 // close connection
mysqli_close($link);

?>