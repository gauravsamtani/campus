 <?php
 include"config.php";
 session_start();  
$univid=$_SESSION['univid'];
echo "welcome ".$univid;
    
if(!$_SESSION['univid'])  
{  
  
    header("Location: studlogin.php");//redirect to login page to secure the welcome page without login access.  
} 


$sql1 = "SELECT stud_id from student where univ_id='$univid'";
$result=$dbC->query($sql1);
if ($result->num_rows>0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$u=$row["stud_id"];
		echo $u;
		echo $u;
	}
}

$sql2 = "SELECT stud_det_id from student_details where stud_id='$u'";
$result=$dbC->query($sql2);
if ($result->num_rows>0) 
{
	while($row = $result->fetch_assoc()) 
	{
		$w=$row["stud_det_id"];
			}
}


$sql="SELECT j.com_name,s.name,s.tenth,s.stream,s.twelth,s.ug,s.pg, s.status FROM job_details j, student_details s WHERE j.com_id=s.com_id and s.stud_id=$u";
// $sql = "SELECT r.reg_id,j.com_name,s.name,s.tenth,s.stream,s.twelth,s.ug,s.pg, s.status FROM registration r,job_details j, student_details s 
// WHERE r.job_id=j.job_id and r.stud_det_id=s.stud_det_id and s.stud_id=$u";
// $sql = "SELECT * FROM job_details";
// $query = mysqli_query("SELECT * FROM job_details");
// echo ". mysql_num_rows($query) ." ;
// $result = $bdC->query($sql);

$result=$dbC->query($sql);
// $count=mysqli_num_rows($result);

	error_reporting(E_ERROR | E_PARSE);
		
?>







<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Campus Recruitment</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	<!-- start header -->
		<!-- <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="index.php"><img src="img/cap.png" height="150px" width="200px" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                   <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="com_home.php">Home</a></li> 
						<li class=""><a class="waves-effect waves-dark" href="com_about.php">About us</a></li>
                       
                        <li><a class="waves-effect waves-dark" href="com_information.php">Information</a></li>	
                        <li class="dropdown">
                        	
                        	<li><a class="waves-effect waves-dark" href="com_logout.php">logout</a></li>
                       
                              </ul> 
                    </li
                     </ul> 
                </div>
            </div>
        </div>
	</header> --><!-- end header -->

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">DETAILS</h2>
			</div>
		</div>
	</div>
	</section>

<?php
			$msg = $_GET['msg'];  //GET the message
if($msg!='') echo '<h2>'.$msg.'</h2>'; //If message is set echo it
			?>
			
</br>
<style>
table, th, td {
    border: 3px solid black;
    border-collapse: collapse;
}
td,th {
    padding: 10px;
    text-align: center;    
}
th {
	height: 50%;
}
th {
	height: 80px;
}
</style>
<table style="width:75%" align="center">
<tr>
<!-- <td><h3>#&emsp;&emsp;</h3></td> -->
<!-- <td><h3>Name &emsp;&emsp;</h3></td> -->
<td><h3>Stream &emsp;&emsp;</h3></td>
<td><h3>10th % &emsp;&emsp;</h3></td>
<!-- <td><h4>Passyear &emsp;&emsp;</h4></td> -->
<!-- <td><h3>10th Board &emsp;&emsp;</h3></td> -->
<td><h3>12th % &emsp;&emsp;</h3></td>
<!-- <td><h3>12th Passyear &emsp;</h3></td> -->
<!-- <td><h3>12th Board &emsp;</h3></td> -->
<td><h3>UG % &emsp;</h3></td>
<!-- <td><h3>UG Passyear &emsp;</h3></td> -->
<!-- <td><h3>UG University &emsp;</h3></td> -->
<td><h3>PG % &emsp;</h3></td>
<td><h3>Company &emsp;</h3></td>

<!-- <td><h3>PG Passyear &emsp;</h3></td> -->
<!-- <td><h3>Accept &emsp;</h3></td> -->
<!-- <td><h3>Reject &emsp;</h3></td> -->
<td><h3>Status &emsp;</h3></td>

</tr>
<?php
$i=1;
// while($row = mysql_fetch_array($query)){
while($row = $result->fetch_assoc()) {
?> 

<tr>
<!-- <td><?php echo $i;?></td> -->
<!-- <td><?php echo $row["name"];?></td> -->
<td><?php echo $row["stream"];?></td>
<td><?php echo $row["tenth"];?></td>
<!-- <td><?php echo $row["tenth_passyear"];?></td> -->
<!-- <td><?php echo $row["tenth_board"];?></td> -->
<td><?php echo $row["twelth"];?></td>
<!-- <td><?php echo $row["twelth_passyear"];?></td> -->
<!-- <td><?php echo $row["twelth_board"];?></td> -->
<td><?php echo $row["ug"];?></td>
<!-- <td><?php echo $row["ug_passyear"];?></td> -->
<!-- <td><?php echo $row["ug_university"];?></td> -->
<td><?php echo $row["pg"];?></td>
<!-- <td><?php echo $row["pg_passyear"];?></td> -->
<td><?php echo $row["com_name"];?></td>
<td><?php if($row["status"]==0)
{
	echo "pending";
}
else{
	echo "accepted";
}

?></td>


</tr>

<?php
$i=$i+1;
}
	?>
	</table></br></br>
	<center>
	<a href="studaccount.php"  align="center" class="btn btn-primary waves-effect waves-dark">BACK</a>
	</center>
	</br></br>
	</br></br>
	</br></br>
	</br>

	
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy;CAMPUS RECRUITMENT SOLUTIONS PRIVATE LIMITED  </span><a href="http://webthemez.com/free-bootstrap-templates/" target="_blank"></a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="materialize/js/materialize.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>

<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script> 
<script src="js/custom.js"></script>

</body>
</html>