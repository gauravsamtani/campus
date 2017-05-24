<?php  

 include"config.php";
// $sql = "SELECT * FROM Company";
$sql = "SELECT * FROM internship";

$result=mysqli_query($dbC, $sql);

$sql1 = "SELECT * FROM registration";
$result1=mysqli_query($dbC, $sql1);

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
                    <a class="navbar-brand" href="index.php"><img src="img/cap.png" height="150px" width="200px" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    
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





<style>

#myInput {
  background-image: url('img/search1.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 3px solid #ddd;
  margin-bottom: 12px;
}

</style>







		<section id="content">
			<div class="container">
			<center><h1>Students Got internship in 2016-2017</h1>
	<!-- <a href="information.php"  align="right" class="btn btn-primary waves-effect waves-dark">BACK</a> -->
	
				<input type="text" class="light-table-filter" data-table="order-table" id="myInput" onkeyup="myFunction()"  placeholder="&nbsp &nbsp &nbsp &nbsp Search intern student name wise" title="TYPE TIER WISE"></center>				
			<?php
			$msg = $_GET['msg'];  //GET the message
if($msg!='') echo '<h2>'.$msg.'</h2>'; //If message is set echo it
			?>
			
</br>
<style>
table, th, td {
    border: 30px solid black;
    border-collapse: collapse;
}
td,th {
    padding: 70px;
    text-align: center;    
}
th {
	height: 50%;
}
th {
	height: 80px;
}
</style>
<table class="order-table table table-striped " id="myTable" style="width:80%" align="center">
<tr class="header">
<!-- <td><h3>#&emsp;&emsp;</h3></td> -->
<!-- <td><h3><b>Visiting Date &emsp;</h3></td> -->
<!-- <td><h3><b>Tier &emsp;</h3></td> -->
<td><h3><b>Stipend &emsp;&emsp;</h3></td>
<th><h3><b>Student Name &emsp;&emsp;</h3></th>
<th><h3><b>Company &emsp;&emsp;</h3></th>
<!-- <td><h3>Visiting date &emsp;&emsp;</h3></td> -->
<!-- <td><h3>criteria &emsp;&emsp;</h3></td> -->



</tr>
<?php
$i=1;
// while($row = mysql_fetch_array($query)){
while($row = $result->fetch_assoc()) {
?> 

<tr>
<!-- <td><?php echo $i;?></td> -->
<!-- <td><b><?php echo $row["visiting_date"];?></td> -->
<!-- <td><b><?php echo $row["tier"];?></td>-->
<td><b><?php echo $row["stipend"];?></td>
<td><b><?php echo $row["name"];?></td>
<td><b><?php echo $row["company"];?></td>
<!--<td><?php echo $row["visiting_date"];?></td>
// <td><?php echo $row["criteria"];?></td>-->





</tr>

<?php
$i=$i+1;
}
	?>
	</table>

	<script>
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>

	</div>
		</section></br></br>
			



		
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
							<span>&copy;  CAMPUS RECRUITMENT SOLUTIONS PRIVATE LIMITED </span>
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