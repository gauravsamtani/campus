<?php
// Create connection
$link = mysqli_connect("mysql.hostinger.in", "u321707978_campu", "gaurav1994", "u321707978_campu");
if($link === false){
    die("ERROR: could not connect. " . mysqli_connect_error());
}

$name=mysqli_real_escape_string($link, $_POST['name']);
$phno=mysqli_real_escape_string($link, $_POST['number']);
$email_id=mysqli_real_escape_string($link, $_POST['email']);
$username=mysqli_real_escape_string($link, $_POST['username']);
$password=mysqli_real_escape_string($link, $_POST['password']);
$website=mysqli_real_escape_string($link, $_POST['website']);

		
		$sql = "INSERT INTO company (name, website,username,password, email_id,phno) VALUES ('$name','$website', '$username','$password', '$email_id','$phno')";

		if (mysqli_query($link, $sql)) {
    	echo "New record created successfully";
    	echo '<a href="comlogin.php">Log in</a>';
		} else {
    				echo "your email id or username already exist ";
				}

		mysqli_close($link);		
		
?>