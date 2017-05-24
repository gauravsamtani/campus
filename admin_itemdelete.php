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

if (isset($_GET['id'])) {
$job_id=$_GET['id'];
echo "$job_id";
    $sql="DELETE FROM `job_details` WHERE job_id='$job_id'";
}
    $result = mysqli_query($link,$sql);
    if($result){
        header("location:adminaccount.php?msg=Deleted Successfully");
      }
	  else {
        header("location:adminaccount.php?msg=ERROR while deleting");
    }
?> 