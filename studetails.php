<?php
// Create connection
$link = mysqli_connect("mysql.hostinger.in", "u321707978_campu", "gaurav1994", "u321707978_campu");
if($link === false){
    die("ERROR: could not connect. " . mysqli_connect_error());
}
// $name=mysqli_real_escape_string($link, $_POST['name']);
// $id=$_GET['id'];
$com_id=mysqli_real_escape_string($link, $_POST['com_id']);
$id=mysqli_real_escape_string($link, $_POST['univid']);
$name=mysqli_real_escape_string($link, $_POST['name']);
$stream=mysqli_real_escape_string($link, $_POST['stream']);
$tenth=mysqli_real_escape_string($link, $_POST['10th']);
$tenth_passyear=mysqli_real_escape_string($link, $_POST['10th_passyear']);
// $tenth_board=mysqli_real_escape_string($link, $_POST['10th_board']);
$twelth=mysqli_real_escape_string($link, $_POST['12th']);
$twelth_passyear=mysqli_real_escape_string($link, $_POST['12th_passyear']);
// $twelth_board=mysqli_real_escape_string($link, $_POST['12th_board']);
$ug=mysqli_real_escape_string($link, $_POST['ug']);
$ug_passyear=mysqli_real_escape_string($link, $_POST['ug_passyear']);
// $ug_university=mysqli_real_escape_string($link, $_POST['ug_university']);
$pg=mysqli_real_escape_string($link, $_POST['pg']);
$pg_passyear=mysqli_real_escape_string($link, $_POST['pg_passyear']);
// $pg_university=mysqli_real_escape_string($link, $_POST['pg_university']);



$sql1="select stud_id from student where univ_id='$id'";
$result=$link->query($sql1);

if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
   
    $u=$row["stud_id"];
    // echo $id;
  }
}


    
    $sql = "INSERT INTO `student_details`(`stud_det_id`, `stud_id`, `name`,`stream`, `tenth`, `tenth_passyear`, `twelth`, `twelth_passyear`,  `ug`, `ug_passyear`,  `pg`, `pg_passyear`,`com_id`) 
    VALUES (NULL, '$u', '$name','$stream', '$tenth', '$tenth_passyear',  '$twelth', '$twelth_passyear',  '$ug', '$ug_passyear',  '$pg', '$pg_passyear','$com_id')";
     
 // echo $id;
// $sql="INSERT INTO `job_details`(`job_id`, `com_id`, `com_name`, `stream1`, `visiting_date`, `criteria`, `ctc`, `job_desc`) VALUES
//      -- (NULL,'$u','$n',$stream1','$visiting_date', '$criteria', '$ctc', '$job_desc')
// (NULL,'$u','$n','$stream1','$visiting_date', '$criteria', '$ctc', '$job_desc')";


    echo $id;
    if (mysqli_query($link, $sql)) {
      echo "You Applied successfully Now go to home</br>";
      echo '<a href="studaccount.php">HOME</a>';
     } else {
      echo "error ";
        }

    mysqli_close($link);    
    
?>