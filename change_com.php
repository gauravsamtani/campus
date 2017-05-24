<?php
// Create connection
$link = mysqli_connect("mysql.hostinger.in", "u321707978_campu", "gaurav1994", "u321707978_campu");
if($link === false){
    die("ERROR: could not connect. " . mysqli_connect_error());
}
$id=$_GET['id'];
$name=mysqli_real_escape_string($link, $_POST['name']);
$phno=mysqli_real_escape_string($link, $_POST['number']);
$email_id=mysqli_real_escape_string($link, $_POST['email']);
$username=mysqli_real_escape_string($link, $_POST['username']);
$password=mysqli_real_escape_string($link, $_POST['password']);
$website=mysqli_real_escape_string($link, $_POST['website']);

		



		$sql = "UPDATE company SET name='$name', website ='$website',username='$username',password='$password', email_id='$email_id',phno='$phno' WHERE com_id=$id";
		if (mysqli_query($link, $sql)) {
    	echo "You Updated successfully";
    	echo '<a href="company_profile.php">Home</a>';
		} else {
    				echo "your email id or username already exist ";
				}

		mysqli_close($link);		
		
?>