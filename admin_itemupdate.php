<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("location:404.html");
} else {
	$username= $_SESSION['username'];
    
}

$link = mysqli_connect("mysql.hostinger.in", "u321707978_campu", "gaurav1994", "u321707978_campu");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 $job_id=$_GET['id'];
    
$sql = "UPDATE job_details SET status=1 WHERE job_id='$job_id'";
if (mysqli_query($link, $sql)){
    $msg = "Update complete";
        header("location:adminaccount.php?msg=$msg");
} else {
	$msg = "Check your information.";
    header("location:adminaccount.php?msg=$msg");
	}

mysqli_close($link);

?>