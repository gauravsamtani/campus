<?php  
session_start();  
 // $_SESSION['username']= $myusername; 
 // $username=$_SESSION['username'];
if(!isset($_SESSION['username']))  
{  
  
    header("Location: comlogin.php");//redirect to login page to secure the welcome page without login access.  
}  
else{
	echo "welcome" . $_SESSION['username'];
}
 
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
                    <a class="navbar-brand" href="index.php"><img src="img/cap.png" height="150px" width="200px" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="com_home.php">Home</a></li> 
						<li><a class="waves-effect waves-dark" href="com_about.php">About us</a></li>
                        <!--<li><a class="waves-effect waves-dark" href="services.php">Services</a></li>
                         <li><a class="waves-effect waves-dark" href="portfolio.php">Portfolio</a></li> -->
                         <li><a class="waves-effect waves-dark" href="comaccount.php">Details</a></li>
                        	<li class="active"><a class="waves-effect waves-dark" href="com_information.php">Information</a></li>
                        	<li class="dropdown">
                        	<li><a class="waves-effect waves-dark" href="com_logout.php">logout</a></li>
                    		</li>
                    	</li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
	
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">INFORMATION</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">	 
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3> <span class="color"></span></h3>
									<p>Opening up the Dream Offer option for students since the 2007-2008 batch has immensely helped them to bag the dream package they aspired to. All the placed students may get one more offer from a Core company or a Software company that offered a better package 
Software companies that offer more than 4 lakhs per annum are offered the ‘Dream status’.</p>
                                    	
								</div>  
							</div>
						</div></section>





		<section id="">
	<div class="container">
		<div class="row">
			<div class="col-lg-12"> 
			</div>
			<div class="col-lg-4">
				<div class="pricing-box-item">
					<div class="pricing-heading">
						<h3><strong>NUMBER OF </br>COMPANIES </br> 2016-2017</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6><?php 
 						include('connector.php');
 						$sql = "SELECT count(*) FROM `total_companies`"; 
 						$result = $db->prepare($sql); 
 						$result->execute(); 
 						$number_of_rows = $result->fetchColumn(); 
 						?><?php echo ($number_of_rows); ?></h6>
					</div>
					<div class="pricing-container">
						<ul>
							<li><i class="icon-ok"></i> </li>
							<!-- <li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li> -->
						</ul>
					</div>
					<div class="pricing-action">
						<a href="com_total_compnies.php" class="btn btn-medium"><i class="icon-bolt"></i> Know More</a>
					</div>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="pricing-box-item activeItem">
					<div class="pricing-heading">
						<h3><strong>STUDENTS </br> PLACED </strong></h3>
					</div>
					<div class="pricing-terms">	
						<h6></br><?php 
 						include('connector.php');
 						$sql = "SELECT count(*) FROM `report`"; 
 						$result = $db->prepare($sql); 
 						$result->execute(); 
 						$number_of_rows = $result->fetchColumn(); 
 						?><?php echo ($number_of_rows); ?></h6>
						
					</div>
					<div class="pricing-container">
						<ul>
							<li><i class="icon-ok"></i> </li>
							<!-- <li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li> -->
						</ul>
					</div>
					<div class="pricing-action">
						<a href="com_placed_student.php" class="btn btn-medium"><i class="icon-bolt"></i>Know More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="pricing-box-item">
					<div class="pricing-heading">
						<h3><strong>STUDENTS GOT INTERNSHIP </br> 2016-2017</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6><?php 
 						include('connector.php');
 						$sql = "SELECT count(*) FROM `internship`"; 
 						$result = $db->prepare($sql); 
 						$result->execute(); 
 						$number_of_rows = $result->fetchColumn(); 
 						?><?php echo ($number_of_rows); ?></h6>
					</div>
					<div class="pricing-container">
						<ul>
							<li><i class="icon-ok"></i> </li>
							<!-- <li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li> -->
						</ul>
					</div>
					<div class="pricing-action">
						<a href="com_intern_student.php" class="btn btn-medium"><i class="icon-bolt"></i> Know More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy;  CAMPUS RECRUITMENT SOLUTIONS PRIVATE LIMITED </span><a href="http://webthemez.com/free-bootstrap-templates/" target="_blank"></a>
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