<?php  
session_start();  
$username=$_SESSION['username'];
echo "welcome ".$username;
  

 
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
<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" /> -->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" />  -->
<!-- <link href="css/style.css" rel="stylesheet" /> -->
<link rel="stylesheet" href="logincss/style.css">
 
<style>
body  {
    background-image: url("img/slides/2.jpg");
    /*background-color: #cccccc;*/
}
</style>
</head>
<body>
<div id="wrapper"> 
	

	<section id="content">
	<div class="form">
    <div class="thumbnail"><img src="img/hat.svg"/></div>
    
	<center><form method="post"  action="comdetails.php"  enctype="multipart/form-data" id="myid">
		<input type="hidden" name="username" value="<?php echo $username;?>"> 
 <!-- echo -->
    <!-- <input type="text" name="name"id="input-name" placeholder="Name"></br></br> -->
    <!-- onsubmit="return validateForm(this)" -->
    Stream<input type="text" name ="stream1" placeholder="Stream" required="required">
    Visiting Date<input type="date" class="form-control form-select"  name="date" id="myDate" ></br></br>
    Criteria<input type="number" name="criteria" onchange="setTwoNumberDecimal" min="1" max="100" step="0.01" placeholder="Criteria" required="required"></br></br>
    CTC<input type="number" name="ctc" min="300000" placeholder="CTC" required="required"></br></br>
    Job Description<input type="text" name="job_desc" placeholder="Job Description" required="required"></br></br>
    <button type="submit">submit</button>
    
    </form></center>
	</div>
	<script>
	function setTwoNumberDecimal(event) {
    this.value = parseFloat(this.value).toFixed(2);
}
</script>
	<!-- </section>
	<script Language="javascript" Type="text/javascript">
	function validateForm(this)
	{
		if(criteria <0 || criteria==0)
		{
			return (false);
		}
		return (true);
	}
	</script>
 -->
	<!-- <footer>
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
				<div class="clerafix">
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