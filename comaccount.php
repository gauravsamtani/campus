<?php  

      session_start(); 
 //        $_SESSION['username']= $myusername; 
 // $username=$_SESSION['username'];
// session_start();  
 // $_SESSION['username']= $myusername; 
 $username=$_SESSION['username'];
if(!isset($_SESSION['username']))  
{  
  
    header("Location: comlogin.php");//redirect to login page to secure the welcome page without login access.  
}  
else{
	echo "welcome " . $_SESSION['username'];
} 

include"config.php";

$sql1="select com_id from company where username='$username'";
 $result=$dbC->query($sql1);
 if($result->num_rows>0)
 {
 	
	while($row=$result->fetch_assoc())
	{
		$u=$row["com_id"];
	}
}

$sql2="select job_id from job_details where com_id='$u'";
 $result=$dbC->query($sql2);
 if($result->num_rows>0)
 {
 	
	while($row=$result->fetch_assoc())
	{
		$w=$row["job_id"];
	}
}


$sql = "SELECT s.stud_det_id,s.name,s.stream,s.tenth,s.tenth_passyear,s.twelth,s.twelth_passyear,s.ug,s.ug_passyear,s.pg,s.pg_passyear, j.com_name 
 from student_details s, job_details j where s.com_id=j.com_id and j.com_id=$u and s.status=0";

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




<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"> -->

    <!-- <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'> -->
    <!-- <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Montserrat:400,700'> -->
    <!-- <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'> -->

    <!-- <link rel="stylesheet" href="logincss/style.css"> -->
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
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
                  <a class="navbar-brand" href="com_home.php"><img src="img/cap.png" height="150px" width="200px" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                   <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="com_home.php">Home</a></li> 
						<li class=""><a class="waves-effect waves-dark" href="com_about.php">About us</a></li>
                       <li><a class="waves-effect waves-dark" href="companyacc.php">POST</a></li>
                       <li><a class="waves-effect waves-dark" href="company_profile.php">Profile</a></li>
                       <!-- <li><a class="waves-effect waves-dark" href="portfolio.php">Portfolio</a></li> -->

                        <!-- <li><a class="waves-effect waves-dark" href="com_information.php">Information</a></li>	 -->
                        <!-- <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">PROFILE <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="#"><b>View</b></a></li>
                            <li><a class="waves-effect waves-dark" href="edit_profile_company.php"><b>Update</b></a></li> -->
                            <!-- <li><a class="waves-effect waves-dark" href="adminlogin.php">Admin</a></li> 
                        </ul>
                    </li>-->
                    <li><a class="waves-effect waves-dark" href="com_logout.php"><b>logout</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">company</h2>
			</div>
		</div>
	</div>
	</section>
	<section>
		<div>	
		</br>
		<center><h1>Check the Details </h1></center>
			<center><a href="com_request.php"  class="btn btn-primary waves-effect waves-dark">check</a></center>
		</div>
	</section>

	<?php
			$msg = $_GET['msg'];  //GET the message
if($msg!='') echo '<h2>'.$msg.'</h2>'; //If message is set echo it
			?>
</br>
<!--<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>-->
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

<table style="width:50%" align="center">
<tr>
<!-- <td><h3>#&emsp;&emsp;</h3></td> -->
<td><h3>Name &emsp;&emsp;</h3></td>
<td><h3>Stream &emsp;&emsp;</h3></td>
<td><h3>10th% &emsp;</h3></td>
<td><h3>Passyear &emsp;&emsp;</h3></td>
<!-- <td><h3>10th Board &emsp;&emsp;</h3></td> -->
<td><h3>12th% &emsp;&emsp;</h3></td>
<td><h3>Passyear &emsp;</h3></td>
<!-- <td><h3>12th Board &emsp;</h3></td> -->
<td><h3>UG% &emsp;</h3></td>
<td><h3>Passyear &emsp;</h3></td>
<!-- <td><h3>UG University &emsp;</h3></td> -->
<td><h3>PG% &emsp;</h3></td>
<td><h3>Passyear &emsp;</h3></td>
<td><h3>Accept &emsp;</h3></td>
<td><h3>Reject &emsp;</h3></td>
<!-- <td><h3>PG University &emsp;</h3></td> -->


</tr>
<?php
$i=1;
// while($row = mysql_fetch_array($query)){
while($row = $result->fetch_assoc()) {
?> 

<tr>
<!-- <td><?php echo $i;?></td> -->
<td><?php echo $row["name"];?></td>
<td><?php echo $row["stream"];?></td>
<td><?php echo $row["tenth"];?></td>
<td><?php echo $row["tenth_passyear"];?></td>
<!-- <td><?php echo $row["tenth_board"];?></td> -->
<td><?php echo $row["twelth"];?></td>
<td><?php echo $row["twelth_passyear"];?></td>
<!-- <td><?php echo $row["twelth_board"];?></td> -->
<td><?php echo $row["ug"];?></td>
<td><?php echo $row["ug_passyear"];?></td>
<!-- <td><?php echo $row["ug_university"];?></td> -->
<td><?php echo $row["pg"];?></td>
<td><?php echo $row["pg_passyear"];?></td>
<!-- <td><?php echo $row["pg_university"];?></td> -->
<td>
<form method="POST" action="company_itemupdate.php?id=<?php echo $row['stud_det_id'];?>" >
<input type="hidden" name="job_id" value="<?php echo $w; ?>">
<button type="submit" onclick="return confirm('Sure you want to Accept !'); "><img src="img/accept1.jpg" width="80px" height="60px" title="Accept"></button>
</form></td>
<td>&emsp;&emsp;<a href="company_itemdelete.php?id=<?php echo $row['stud_det_id'];?>" onclick="return confirm('Sure to delete !'); "><img src="img/delete1.png" width="60px" height="60px" title="Delete"></a>&emsp;&emsp;</td>
</tr>

<?php
$i=$i+1;
}
	?>
	</table>




	<!-- <div class="form">
    <div class="thumbnail"> -->
    	<!-- <img src="img/hat.svg"/> -->
    <!-- <div class="col-lg-2">
    </div>
    <form method="POST"  action="comdetails.php?id='$username'">

        <input type="text" name ="stream1" placeholder="stream1" required="required">
        <input type="text" name ="stream2" placeholder="stream2" required="required">
        <input type="datetime-local" name="date" id="myDate" value="2014-02-09"></br></br>
        <input type="text" name="criteria" placeholder="criteria"></br></br>
    	<input type="text" name="ctc" placeholder="ctc"></br></br>
    	<input type="text" name="job_desc" placeholder="job_desc"></br></br>
        <button type="submit">submit</button>
    </form>
	</div> -->

	<!-- <section id="content">
	<div class="container">
		<div class="col-lg-2">
	<form method="post"  action="comdetails.php"> -->
		<!-- ?id='<?php  $username; ?>' -->  
    <!-- <input type="text" name="stream1" placeholder="stream1" required="required"></br></br>
    <input type="text" name="stream2" placeholder="stream2" required="required"></br></br>
    <input type="datetime-local" name="date" id="myDate" value="2014-02-09" required="required"></br></br>
    <input type="text" name="criteria" placeholder="criteria"  required="required"></br></br>
    <input type="text" name="ctc" placeholder="ctc" required="required"></br></br>
    <input type="text" name="job_desc" placeholder="job_desc" required="required"></br></br>
    <button type="submit">submit</button> -->
    <!-- <input type="submit" value="Submit" id="input-submit"> -->
    <!-- </div></div>
</form>
</section> -->
	<!-- <section id="content">
	<section class="section-padding">
		<div class="container">
			<div class="row showcase-section">
				<div class="col-md-6">
					<img class="mySlides" src="img/about3.jpg" height="330" width="530">
					<img class="mySlides" src="img/about4.jpg" height="330" width="530">
				</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>



				<div class="col-md-6">
					<div class="about-text">
						<h3> <span class="color"></span></h3>
						<p>If PES has placement records then it is because of PES placement centrel. Not only does this function as the working body to facilitate smooth working of the placement activities in the campus but also works to facilitate the training activities of the students and makes sure they get placed in the best of companies</p>
						 <p>To prepare students to face campus interviews by arranging training in Aptitude tests, group discussions, preparing for Technical and HR interviews through professional trainers and PES alumni.</p>
					</div>
				</div>
			</div>
		</div>
	</section>-->
						<!-- <br>
						Our Team starts -->
				
						<!-- Heading -->
						<!-- <div class="block-heading-six"> -->
							<!-- <h4 class="bg-color"></h4> -->
						<!-- </div> -->
						<!-- <br> -->
						
						<!-- Our team starts -->
						
						<!-- <!-- <div class="team-six">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
				<!-- 					<div class="team-member">
										Image
										<img class="img-responsive" src="img/google.png" alt="">
										Name
										<h4></h4>
										<span class="deg"></span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									Team Member
									<div class="team-member">
										Image
										<img class="img-responsive" src="img/microsoft.png" alt="">
										Name
										<h4></h4>
										<span class="deg"></span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									Team Member
									<div class="team-member">
										Image
										<img class="img-responsive" src="img/intel.png" alt="">
										Name
										<h4></h4>
										<span class="deg"></span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									Team Member
									<div class="team-member">
										Image
										<img class="img-responsive" src="img/accenture.jpg" alt="">
										Name
										<h4></h4>
										<span class="deg"></span>
									</div>
								</div>
							</div>
						</div>
						
						Our team ends
					  
						
					</div>
									
				</div>
	</section>  -->
	
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