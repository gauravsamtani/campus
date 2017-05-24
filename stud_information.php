<?php  
session_start();  
//     $univid=$_SESSION['univid'];
// echo "welcome ".$univid;
if(!isset($_SESSION['univid']))  
{  
  
    header("Location: studlogin.php");//redirect to login page to secure the welcome page without login access.  
}  
else{
    echo "welcome" . $_SESSION['univid'];
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
                        <li><a class="waves-effect waves-dark" href="stud_home.php">Home</a></li> 
						<li><a class="waves-effect waves-dark" href="stud_about.php">About us</a></li>
                        <li><a class="waves-effect waves-dark" href="studaccount.php">PLACEMENT</a></li>
                         <!-- <li><a class="waves-effect waves-dark" href="portfolio.php">Portfolio</a></li>  -->
                        	<li class="active"><a class="waves-effect waves-dark" href="stud_information.php">Information</a></li>
                        	<li class="dropdown">
                        	<li><a class="waves-effect waves-dark" href="stud_logout.php">logout</a></li>
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
                                    	<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
								</div>  
							</div>
						</div>
		<!-- end divider -->
		<div class="row">
			<div class="col-lg-12"> 
			</div>
			<div class="col-lg-3">
				<div class="pricing-box-item">
					<div class="pricing-heading">
						<h3><strong>OUR PLACEMENT STATS</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>3959</h6>
					</div>
					<div class="pricing-container">
						<ul>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="#" class="btn btn-medium"><i class="icon-bolt"></i> Get Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="pricing-box-item">
					<div class="pricing-heading">
						<h3><strong>STUDENTS SHORTLISTED</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>738</h6>
					</div>
					<div class="pricing-container">
						<ul>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="#" class="btn btn-medium"><i class="icon-bolt"></i> Get Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="pricing-box-item activeItem">
					<div class="pricing-heading">
						<h3><strong>STUDENTS </br>PLACED</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>67</h6>
					</div>
					<div class="pricing-container">
						<ul>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="#" class="btn btn-medium"><i class="icon-bolt"></i> Get Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="pricing-box-item">
					<div class="pricing-heading">
						<h3><strong>NUMBER OF COMPANIES</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>132</h6>
					</div>
					<div class="pricing-container">
						<ul>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
							<li><i class="icon-ok"></i> </li>
						</ul>
					</div>
					<div class="pricing-action">
						<a href="#" class="btn btn-medium"><i class="icon-bolt"></i> Get Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<!-- <footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>Bootstrap company Inc</strong><br>
					JC Main Road, Near Silnile tower<br>
					 Pin-21542 NewYork US.</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Latest Events</a></li>
						<li><a class="waves-effect waves-dark" href="#">Terms and conditions</a></li>
						<li><a class="waves-effect waves-dark" href="#">Privacy policy</a></li>
						<li><a class="waves-effect waves-dark" href="#">Career</a></li>
						<li><a class="waves-effect waves-dark" href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a class="waves-effect waves-dark" href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a class="waves-effect waves-dark" href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
					<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
						<li><a class="waves-effect waves-dark" href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
						<li><a class="waves-effect waves-dark" href="#">Natus error sit voluptatem accusantium doloremque</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->
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