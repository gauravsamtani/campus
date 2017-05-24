<?php
// Create connection
$link = mysqli_connect("mysql.hostinger.in", "u321707978_campu", "gaurav1994", "u321707978_campu");
if($link === false){
    die("ERROR: could not connect. " . mysqli_connect_error());
}
//$id=$_GET['id'];
$stream1=mysqli_real_escape_string($link, $_POST['stream1']);
$id=mysqli_real_escape_string($link, $_POST['username']);
// $stream2=mysqli_real_escape_string($link, $_POST['stream2']);
$visiting_date=mysqli_real_escape_string($link, $_POST['date']);
$criteria=mysqli_real_escape_string($link, $_POST['criteria']);
$ctc=mysqli_real_escape_string($link, $_POST['ctc']);
$job_desc=mysqli_real_escape_string($link, $_POST['job_desc']);
// echo "$stream1";
// echo $id;
$sql1="select * from company where username='$id'";
 $result=$link->query($sql1);
 if($result->num_rows>0)
 {
 	
	while($row=$result->fetch_assoc())
	{
		$u=$row["com_id"];
		$n=$row["name"];
	}
}

echo $n;

		$sql="INSERT INTO `job_details`(`job_id`, `com_id`, `com_name`, `stream1`, `visiting_date`, `criteria`, `ctc`, `job_desc`) VALUES
		 -- (NULL,'$u','$n',$stream1','$visiting_date', '$criteria', '$ctc', '$job_desc')
(NULL,'$u','$n','$stream1','$visiting_date', '$criteria', '$ctc', '$job_desc')";

		
		if (mysqli_query($link, $sql)) {
    	echo "Posted Successfully</br>    click on HOME";
    	// echo '<a href="comaccount.php">HOME</a>';
		 } else {
    	echo "error ";
				}

		mysqli_close($link);		
		
?>