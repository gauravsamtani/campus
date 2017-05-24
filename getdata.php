<?php
$link = mysqli_connect("mysql.hostinger.in", "u321707978_campu", "gaurav1994", "u321707978_campu");
if($link === false){
    die("ERROR: could not connect. " . mysqli_connect_error());
}
$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
$image_name = addslashes($_FILES['image']['name']);
$sql = "INSERT INTO `pic` (`idpic`, `caption`, `img`) VALUES (NULL, '{$image}', '{$image_name}')";
if (!mysqli_query($link, $sql)) { // Error handling
    echo "Something went wrong! :("; 
}
?>

<!-- php
// Create connection
// $link = mysqli_connect("localhost","root","","campus");
// if($link === false){
//     die("ERROR: could not connect. " . mysqli_connect_error());
// }

// $name=mysqli_real_escape_string($link, $_POST['name']);
// $univ_id=mysqli_real_escape_string($link, $_POST['univid']);
// $password=mysqli_real_escape_string($link, $_POST['password']);
// $email_id=mysqli_real_escape_string($link, $_POST['email']);
// $phno=mysqli_real_escape_string($link, $_POST['number']);
// $address=mysqli_real_escape_string($link, $_POST['address']);
// $curr_degree=mysqli_real_escape_string($link, $_POST['degree']);
// $sem=mysqli_real_escape_string($link, $_POST['sem']);
// $branch=mysqli_real_escape_string($link, $_POST['branch']);

// $sql = "INSERT INTO student (name, univ_id, password, email_id, phno, address, curr_degree, sem, branch) VALUES ('$name', '$univ_id','$password', '$email_id','$phno', '$address', '$curr_degree', '$sem', '$branch')";

// if (mysqli_query($link, $sql)) {
//     echo "New record created successfully";
//     echo '<a href="studlogin.php">Log in</a>';
// } else {
//     echo "Username or Email id already exist ";
// }

// mysqli_close($link);
// ?>	 -->