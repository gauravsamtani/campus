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
                <div class="navbar-collapse collapse">
                   <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="com_home.php">Home</a></li> 
						<li class="active"><a class="waves-effect waves-dark" href="com_about.php">About us</a></li>
                       <!-- <li><a class="waves-effect waves-dark" href="services.php">Services</a></li>
                       <li><a class="waves-effect waves-dark" href="portfolio.php">Portfolio</a></li> -->
                       <li><a class="waves-effect waves-dark" href="comaccount.php">Details</a></li>
                       <li><a class="waves-effect waves-dark" href="company_profile.php">Profile</a></li>
                        <!-- <li><a class="waves-effect waves-dark" href="com_information.php">Information</a></li> -->
                        <!-- <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">PROFILE <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="#"><b>View</b></a></li>
                            <li><a class="waves-effect waves-dark" href="edit_profile_company.php"><b>Update</b></a></li>
                            <!-- <li><a class="waves-effect waves-dark" href="adminlogin.php">Admin</a></li>
                        </ul>
                    </li> -->
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
				<h2 class="pageTitle">About Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
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
	</section>

						<br>
						<!-- Our Team starts -->
				
						<!-- Heading -->
						<div class="block-heading-six">
							<h4 class="bg-color"></h4>
						</div>
						<br>
						
						<!-- Our team starts -->


						<!-- <div class="cmpslider_wrap">
							<div class="cmpslidder_innr">
							<div class="cmpslider_ul clearfix" style="margin-left: 0px;">
                    		<img src="img/google.png" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="img/intel.png" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="img/accenture.jpg" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="img/microsoft.jpg" class="cmpslider_item pull-left" width="135" height="50">
                    		 <img src="http://media4.monstercollege.in/images/logos/logo_CORP_389.jpg" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="http://media4.monstercollege.in/images/logos/logo_CORP_390.png" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="http://media4.monstercollege.in/images/logos/logo_CORP_391.jpg" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="http://media4.monstercollege.in/images/logos/logo_CORP_392.png" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="http://media4.monstercollege.in/images/logos/logo_CORP_393.gif" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="http://media4.monstercollege.in/images/logos/logo_CORP_394.png" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="http://media4.monstercollege.in/images/logos/logo_CORP_395.jpg" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="http://media4.monstercollege.in/images/logos/logo_CORP_407.png" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="http://media4.monstercollege.in/images/logos/logo_CORP_408.png" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="http://media4.monstercollege.in/images/logos/logo_CORP_385.jpg" class="cmpslider_item pull-left" width="135" height="50">
                    		<img src="http://media4.monstercollege.in/images/logos/logo_CORP_386.png" class="cmp slider_item pull-left" width="135" height="50">
                    		</div>
							<<pseudo:before>></<pseudo:before>>
							<img src="http://media4.monstercollege.in/images/logos/logo_CORP_137.png" class="cmpslider_item pull-left" width="135" height="50">
							<img src="http://media4.monstercollege.in/images/logos/logo_CORP_238.jpg" class="cmpslider_item pull-left" width="135" height="50">
							<img src="http://media4.monstercollege.in/images/logos/logo_CORP_275.jpg" class="cmpslider_item pull-left" width="135" height="50">
							<<pseudo:after>></<pseudo:after>>
							<<pseudo:after>></<pseudo:after>>
							</div>
						</div> -->
							<a href="#" class="cmpslidenav lft" data-direction="lt"></a>
							<a href="#" class="cmpslidenav rgt" data-direction="rt"></a>
						</div>
						
						<div class="team-six">
							<div class="row">
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="img/google.png" alt="">
										<!-- Name -->
										<h4></h4>
										<span class="deg"></span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="img/microsoft.png" alt="">
										<!-- Name -->
										<h4></h4>
										<span class="deg"></span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="img/intel.png" alt="">
										<!-- Name -->
										<h4></h4>
										<span class="deg"></span>
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<!-- Team Member -->
									<div class="team-member">
										<!-- Image -->
										<img class="img-responsive" src="img/accenture.jpg" alt="">
										<!-- Name -->
										<h4></h4>
										<span class="deg"></span>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Our team ends -->
					  
						
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