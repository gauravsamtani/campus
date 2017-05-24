<?php  
session_start();  
$univid=$_SESSION['univid'];
echo "welcome ".$univid;
    
if(!$_SESSION['univid'])  
{  
  
    header("Location: studlogin.php");//redirect to login page to secure the welcome page without login access.  
}  

$com_id=$_GET['id'];
 
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
	<center><form method="POST"  action="studetails.php" enctype="multipart/form-data" id="myid">
		<input type="hidden" name="univid" value="<?php echo $univid;?>"> 
		<!-- form method="post"  action="studetails.php" enctype="multipart/form-data" id="myid">
		<input type="hidden" name="username" value="<?php  $username;?>"> 
 -->
 <!-- echo -->
 <!-- pattern="[2]{1}[0]{1}[1-2]{1}[0-9]{1}" -->
    <!-- <input type="text" name="name"id="input-name" placeholder="Name"></br></br> -->
    <input type="hidden" name="com_id" value="<?php echo $com_id;?>">
    Name<input type="text" name ="name" placeholder="Name" pattern="[a-zA-Z][a-zA-Z\s]*" required="required">
    Stream <input type="text" name="stream" placeholder="Stream" pattern="[a-zA-Z][a-zA-Z\s]*" required="required"></br></br>
    10 % Percentage<input type="number" name="10th" onchange="change" min="1" max="100" step="0.01" placeholder="10 %"  required="required"></br></br>
    Pass Year<input type="text" id="passyear" name="10th_passyear" onkeyup="generate()" placeholder="10 Pass year"  required="required"></br></br>
      
    <!-- Board Name<input type="text" name="10th_board"  placeholder="Board Name" required="required"></br></br> -->
    12 %<input type="number" name="12th" onchange="change" min="1" max="100" step="0.01" placeholder="12 %" required="required"></br></br>
    Pass Year<input type="text" id="enteryr" name="12th_passyear" onclick="generate2()" placeholder="12 Pass year"  required="required"></br></br>
     
    <input type="hidden" id="add" value="2">
    <!-- Board Name<input type="text" name="12th_board" placeholder="Board Name"required="required"></br></br> -->
    UG %<input type="number" name="ug" onchange="change" min="1" max="100" step="0.01" placeholder="UG %" required="required"></br></br>
    Pass Year<input type="number" id="yearenter" name="ug_passyear" onclick="generate3()" placeholder="UG Pass year"  required="required"></br></br>
     
    <input type="hidden" id="add2" value="3">
    <!-- University Name<input type="text" name="ug_university" placeholder="university Name" required="required"></br></br> -->
    PG %<input type="number" name="pg" onchange="change" min="1" max="100" step="0.01" placeholder="PG %" required="required"></br></br>
    Pass Year<input type="number" id="yrenter" name="pg_passyear"  placeholder="PG Pass year" required="required"></br></br>
    <input type="hidden" id="add3" value="2">
    <!-- University Name<input type="text" name="pg_university" placeholder="University Name" required="required"></br></br> -->
    <button type="submit">submit</button>

    <p class="message"><a href="studaccount.php"><b>HOME</b><a></p>
    <script type="text/javascript">
    function generate (){
        hs = parseInt(document.getElementById("passyear").value);
        value = parseInt(document.getElementById("add").value);
        result = hs + value;
        document.getElementById("enteryr").value = result;
    }

    function generate2()
    {
        value2 = parseInt(document.getElementById("add2").value);
        im = parseInt(document.getElementById("enteryr").value);
        result2 = im + value2;
        document.getElementById("yearenter").value = result2;
    }

    function generate3()
    {
        value3 = parseInt(document.getElementById("add3").value);
        ug = parseInt(document.getElementById("yearenter").value);
        result3 = ug + value3;
        document.getElementById("yrenter").value = result3;
    }
    function change(event) {
    this.value = parseFloat(this.value).toFixed(2);
}
    </script>
    <!-- <p class="message"><a href="studaccount.php">HOME</a></p> -->
    </form></center>
	</div>
	</section>
<!-- 
	<div id="sub-footer">

value2 = parseInt(document.getElementById("enter
yr        value2 = parseInt(document.getElementById("add2").value);").value);		<div class="container">
imv class="row">
				<div class="col-lg-6">
					<div class="copyright">im + value2;
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
	</footer> -->
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