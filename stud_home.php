<?php  
session_start();  
// $univid=$_SESSION['univid'];
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
<link href="css/agency.min.css" rel="stylesheet">
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page"> 
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
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a class="waves-effect waves-dark" href="stud_home.php">Home</a></li> 
						<li><a class="waves-effect waves-dark" href="stud_about.php">About us</a></li> 
						<!--<li><a class="waves-effect waves-dark" href="services.php">Services</a></li>-->
                        <li><a class="waves-effect waves-dark" href="studaccount.php">Placement</a></li>
                        <li><a class="waves-effect waves-dark" href="student_profile.php">Profile</a></li> 
                        <!-- <li><a class="waves-effect waves-dark" href="stud_information.php">Information</a></li> -->
                        
                    <li><a class="waves-effect waves-dark" href="stud_logout.php">logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	<section id="banner">
	 
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/st3.PNG" alt="" />
                <div class="flex-caption">
                    <!-- <h3>Campus Recruitment</h3>
					<p>We create the opportunities</p>  -->
					 
                </div>
              </li>
              <li>
                <img src="img/slides/st1.jpg" alt="" />
                <div class="flex-caption">
                    <!-- <h3> HIRE FRESH TALENT</h3> 
					<p>Success depends on originality</p>  -->
					 <!-- Get The Best Jobs & Internships -->
                </div>
              </li>
              <li>
                <img src="img/slides/st2.jpg" alt="" />
                <div class="flex-caption">
                    <!-- <h3> HIRE FRESH TALENT</h3> 
					<p>Success depends on originality</p>  -->
					 <!-- Get The Best Jobs & Internships -->
                </div>
              </li>
            </ul>
        </div>
	<!-- end slider --> 
	</section>  
	
<div class="row">
            <!-- <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons"></i>
                <div class="info-blocks-in">
                    <h3>HTML5/CSS3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons"></i>
                <div class="info-blocks-in">
                    <h3>Fully Responsive</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons"></i>
                <div class="info-blocks-in">
                    <h3>Mobile</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
                </div>
            </div> -->
        </div>
	</div>
	</section>
	
	<section class="section-padding gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>Our Campus</h2>
						<p>PES University is a private university in Bengaluru, India. <br>
						 Established in 1972, it is focused on four main educational areas: Engineering,
						  Medicine, Management and Life Science.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="about-text">
						<p>PES University, located in Bangalore, India is one of the country’s leading teaching and research universities. The University is committed to providing “education for the real world” that inspires students to realize their potential. Our students graduate with the ability to adapt to an intellectually and technologically changing environment. Over the years, we have accomplished this with the participative efforts of the management, staff, students and parents.</p>

						<ul class="withArrow">
							
							<li><span class="fa fa-angle-right"></span> Top 25 M.Tech College in India.</li>
							<li><span class="fa fa-angle-right"></span> PES University (formerly PES Institute of Technology), ranked #1 in Karnataka.</li>
							<li><span class="fa fa-angle-right"></span> PES University placed seventh on the list of INDIA'S MOST TRUSTED Educational Institutes.</li>
							<!-- <li><span class="fa fa-angle-right"></span> Donec sollicitudin molestie malesuada.</li> -->
						</ul>
						<a href="https://www.pes.edu" target="_blank" class="btn btn-primary waves-effect waves-dark">Learn More</a>
					</div>
				</div>
				


				<div class="col-md-6 col-sm-6" >
  					<img class="mySlides" src="img/west.jpg" height="350" width="500">
  					<img class="mySlides" src="img/south.jpg" height="350" width="500">
  					
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


<!-- 
				<div class="col-md-6 col-sm-6">
					<div class="about-image">
						<img src="img/about2.jpg" alt="About Images">
					</div>
				</div>
			</div>
		</div> -->
	</section>	  
	
<!-- 	<section id="placement">
	<div class="about home-about">
		<div class="container">
			<div class="row">
				<div class="col-md-4"> 
					<div class="block-heading-two">
						<h3><span>Tests</span></h3>
					</div>	
					<div class="tab-section">
						<div class="s12">
							<ul class="tabs">
							<li class="tab col s4"><a href="#test1" class="waves-effect waves-dark active">Test 1</a></li>
							<li class="tab col s4"><a href="#test2" class="waves-effect waves-dark ">Test 2</a></li>
							<li class="tab col s4"><a href="#test3" class="waves-effect waves-dark">Test 3</a></li> 
							</ul>
						</div>
						<div id="test1" class="col s12 container">Aptitude test for eligible students
						</div>
						<div id="test2" class="col s12 container">technical interview
						</div>
						<div id="test3" class="col s12 container">HR face to face
						</div> 
					</div>
				</div> -->
							<!-- <div class="col-md-4">
								<div class="block-heading-two">
									<h3><span>Latest News</span></h3>
								</div>		
								Accordion starts
							  <ul class="collapsible" id="accordionSection" data-collapsible="accordion">
								<li>
								  <div class="collapsible-header active"><i class="material-icons"></i>First</div>
								  <div class="collapsible-body"><p>Time Inc (T-2) is expected to visit campus.  Refer the details provided below, students who meeting the eligibility criteria are hereby informed to register through the link provided below on or before 17th Feb'17.</p></div>
								</li>
								<li>
								  <div class="collapsible-header"><i class="material-ions"></i>Second</div>
								  <div class="collapsible-body"><p>
Sonata Software (T-3) is expected to visit campus on 9th Feb'17 to conduct an online test.  Refer the details provided below, students who are eligible are hereby informed to register through the link provided below not later than tomorrow by 10.30AM.</p></div>
								</li>
								<li>
								  <div class="collapsible-header"><i class="material-icons"></i>Third</div>
								  <div class="collapsible-body"><p>Keep Works (T-3) is expected to visit campus during Jan'17 for Software Developer Role.  Refer the details provided below students who are interested are hereby informed to register through the link provided below on or before 23rd Dec'16.</p></div>
								</li>
							  </ul>
														 Accordion ends 
								
							</div>-->
							 <!-- 
				<div class="col-md-4">
					<div class="block-heading-two">
						<h3><span>Latest News</span></h3>
					</div>	
					<ul class="collapsible" id="accordionSection" data-collapsible="accordion">
					<li>
					<div class="collapsible-header "><i class="material-icons"></i>First
					</div>
					<div class="collapsible-body"><p>Time Inc (T-2) is expected to visit campus. 
								   Refer the details provided below, students who meeting the eligibility criteria are hereby
								    informed to register through the link provided below on or before 17th Feb'17.</p>
					</div>
								</li>
								<li>
					<div class="collapsible-header"><i class="material-ions"></i>Second
					</div>
					<div class="collapsible-body"><p>
Sonata Software (T-3) is expected to visit campus on 9th Feb'17 to conduct an online test. 
 Refer the details provided below, students who are eligible are hereby informed to register 
 through the link provided below not later than tomorrow by 10.30AM.</p></div>
								</li>
								<li>
								  <div class="collapsible-header"><i class="material-icons"></i>Third</div>
								  <div class="collapsible-body"><p>Keep Works (T-3) is expected to visit campus during Jan'17 for 
								  	Software Developer Role.  Refer the details provided below students who are interested are hereby 
								  	informed to register through the link provided below on or before 23rd Dec'16.</p></div>
								</li>
							  </ul> 
							</div>
							<div class="col-md-4">
								 <div class="block-heading-two">
									<h3><span>Testimonials</span></h3>
								</div>	
								     <div class="testimonials">
										<div class="active item">
										  <blockquote><p>Our experience with Campus Interaction has been a happy one.
										   Campus Interaction has customized the portal to our needs. Our team is pleased 
										   with the flexibility and the service quality. Campus Interaction is highly recommended
										    to manage high volume of students and where the requirements of recruiters vary from company
										     to company.</p></blockquote>
										  <div class="carousel-info">
											<img alt="" src="img/avatar.png" class="pull-left">
											<div class="pull-left">
											  <span class="testimonials-name">somshekar</span>
											  <span class="testimonials-post">Placement Head</span>
											</div>
										  </div>
										</div> 
									</div>
							</div>
							
						</div>
						</section> -->
						
	<section class="section-padding gray-bg" id="content">
	<div class="container">
	    	<div class="row">
				<div class="col-md-12">
					<div class="aligncenter"><h2 class="aligncenter">Our Services</h2>Our services listed below are focused on Employability
					</div>
						<br/>
				</div>
			</div>
			<div class="row">
            	<div class="col-sm-4 info-blocks"> 
					<i class="icon-info-blocks material-icons"></i>
               		<div class="info-blocks-in">
            	   	<h3>EMPLOYABILITY PORTAL THAT WORKS</h3>
               		<p>We provide Best Employability Portal in India. Don't take our word for that,
					check what our alumni say</p>
               		</div>
            	</div>
            	<div class="col-sm-4 info-blocks">
                		<i class="icon-info-blocks material-icons"></i>
               		<div class="info-blocks-in">
                    		<h3>COMPANY COLLABORATION</h3>
                    		<p>We work with 100s of companies to arrange Campus Interviews for your college. Click here for our Campus Interview stats</p>
               		</div>
            	</div>
            	<div class="col-sm-4 info-blocks">
                		<i class="icon-info-blocks material-icons"></i>
               		<div class="info-blocks-in">
               		    <h3>RESUME</h3>
                    		<p>Get a job-winning professional resume from our experts</p>
               		</div>
            	</div>
        	</div></br>
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
						<li><a class="waves-effect waves-dark" href="#">Lorem ipsum dolor met consectetur adipisicing. Aorem psum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</a></li>
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
							<span>&copy; CAMPUS RECRUITMENT SOLUTIONS PRIVATE LIMITED </span><a href="http://webthemez.com/free-bootstrap-templates/" target="_blank"></a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a class="waves-effect waves-dark" href="https://www.facebook.com" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a class="waves-effect waves-dark" href="https://www.twitter.com" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a class="waves-effect waves-dark" href="https://www.linkedin.com" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="waves-effect waves-dark" href="https://www.instagram.com" data-placement="top" title="instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a class="waves-effect waves-dark" href="https://www.googleplus.com" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
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
<script src="js/agency.min.js"></script>
</body>
</html>