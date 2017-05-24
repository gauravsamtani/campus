<?php  
session_start();  
$univid=$_SESSION['univid'];
if(!isset($_SESSION['univid']))  
{  
  
    header("Location: studlogin.php");//redirect to login page to secure the welcome page without login access.  
}  
else{
    echo "welcome:--" . $_SESSION['univid'];
} 

// $univid=$_SESSION['univid'];
// echo "welcome ".$univid;
    
// if(!$_SESSION['univid'])  
// {  
  
//     header("Location: studlogin.php");//redirect to login page to secure the welcome page without login access.  
// }  
 include"config.php";
$sql = "SELECT * FROM job_details where status=1";
$result=mysqli_query($dbC, $sql);
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
<div id="wrapper"> 
	<!-- start header -->
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="stud_home.php"><img src="img/cap.png" height="150px" width="200px" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                   <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="stud_home.php">Home</a></li> 
						<li><a class="waves-effect waves-dark" href="stud_about.php">About us</a></li>
                       <!-- <li><a class="waves-effect waves-dark" href="services.php">Services</a></li> -->
                       <li class="active"><a class="waves-effect waves-dark" href="studaccount.php">Placement</a></li>
                        <li><a class="waves-effect waves-dark" href="student_profile.php">Profile</a></li> 
                        <!-- <li><a class="waves-effect waves-dark" href="stud_information.php">Information</a></li> -->
                        
                    <li><a class="waves-effect waves-dark" href="stud_logout.php">logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Student</h2>
			</div>
		</div>
	</div>
	</section>


<section>
        <div>   
        </br>
        <center><h1>Check the Details </h1></center>
            <center><a href="stud_request.php"  class="btn btn-primary waves-effect waves-dark">check</a></center>
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


<table class="table order-table table-striped" style="width:80%" align="center">
<tr >
<!-- <td><h3>#&emsp;&emsp;</h3></td> -->
<td style="width:15%"><h3>Company </h3></td>
<td style="width:13%"><h3>Stream </h3></td>
<td style="width:16%"><h3>Visiting date </h3></td>
<td style="width:10%"><h3>criteria </h3></td>
<td style="width:12%"><h3>CTC </h3></td>
<td style="width:18%"><h3>Job Description </h3></td>
<td style="width:20%"><h3>Registration </h3></td>


</tr>
<?php
$i=1;
// while($row = mysql_fetch_array($query)){
while($row = $result->fetch_assoc()) {
?> 

<tr>
<!-- <td><?php echo $i;?></td> -->
<td><?php echo $row["com_name"];?></td>
<td><?php echo $row["stream1"];?></td>
<td><?php echo $row["visiting_date"];?></td>
<td><?php echo $row["criteria"];?></td>
<td><?php echo $row["ctc"];?></td>
<td><?php echo $row["job_desc"];?></td>

<td>&emsp;&emsp;<a href="studentacc.php?id=<?php echo $row['com_id']?>"><img src="img/registers.png" width="100px" height="50px" title="Register"></a></td>
</tr>

<?php
$i=$i+1;
}
	?>
	</table>
<!-- <button img src="img/register.jpg" width="100px" height="50px" title="Register" onclick="location.href = 'studentacc.php';" >Register</button> -->
<!-- <form action="studentacc.php">
  
  <input type="image" src="submit.gif" alt="Submit" align="right" width="48" height="48">
</form> -->

	<!-- <section id="content">
	<div class="container">
		<div class="col-lg-2">
	<center><form method="POST"  action="studetails.php?id='$univid'"> -->

 <!-- echo -->
    <!-- <input type="text" name="name"id="input-name" placeholder="Name"></br></br> -->
  <!--   <input type="text" name="10th" placeholder="10 %" required="required"></br></br>
    <input type="text" name="10th_passyear" placeholder="10 Pass year" required="required"></br></br>
    <input type="text" name="10th_board"  placeholder="Board Name" required="required"></br></br>
	<input type="text" name="12th" placeholder="12 %" required="required"></br></br>
    <input type="text" name="12th_passyear" placeholder="12 Pass year" required="required"></br></br>
    <input type="text" name="12th_board" placeholder="Board Name"required="required"></br></br>
	<input type="text" name="ug" placeholder="UG %" required="required"></br></br>
    <input type="text" name="ug_passyear" placeholder="UG Pass year" required="required"></br></br>
    <input type="text" name="ug_university" placeholder="university Name" required="required"></br></br>
    <input type="text" name="pg" placeholder="PG %" required="required"></br></br>
    <input type="text" name="pg_passyear" placeholder="PG Pass year" required="required"></br></br>
    <input type="text" name="pg_university" placeholder="University Name" required="required"></br></br>
    <button type="submit">submit</button>
    </form></center>
	</div>
	</section>
 -->


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
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>