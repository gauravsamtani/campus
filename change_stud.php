<?php
// Create connection
$link = mysqli_connect("mysql.hostinger.in", "u321707978_campu", "gaurav1994", "u321707978_campu");
if($link === false){
    die("ERROR: could not connect. " . mysqli_connect_error());
}
$id=$_GET['id'];
$name=mysqli_real_escape_string($link, $_POST['name']);
$univ_id=mysqli_real_escape_string($link, $_POST['univid']);
$password=mysqli_real_escape_string($link, $_POST['password']);
$email_id=mysqli_real_escape_string($link, $_POST['email']);
$phno=mysqli_real_escape_string($link, $_POST['number']);
$address=mysqli_real_escape_string($link, $_POST['address']);
$curr_degree=mysqli_real_escape_string($link, $_POST['degree']);
$sem=mysqli_real_escape_string($link, $_POST['sem']);
$branch=mysqli_real_escape_string($link, $_POST['branch']);


$sql = "UPDATE student SET name='$name', email_id='$email_id', address ='$address', phno='$phno', univ_id='$univ_id', password='$password', curr_degree='$curr_degree',branch='$branch',sem='$sem'  WHERE stud_id=$id";
if (mysqli_query($link, $sql)) 
	{
   		echo "You Updated successfully";
   		echo '<a href="student_profile.php">Home</a>';
		}
else
	{
		echo "your email id or username already exist ";
	}
	mysqli_close($link);		
?>