 <?php

// include "adminaccount.php";
//  session_start();  
// $username=$_SESSION['username'];
// echo "welcome ".$username;

// if(!$_SESSION['username'] )  
// {  
  
//     header("Location: adminlogin.php");//redirect to login page to secure the welcome page without login access.  
// } 

include"config.php";
// $sql = "SELECT * FROM Company";
$sql = "SELECT * FROM job_details";
// $query = mysqli_query("SELECT * FROM job_details");
// echo ". mysql_num_rows($query) ." ;
// $result = $bdC->query($sql);
$result=mysqli_query($dbC, $sql);
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
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="admin_home.php"><img src="img/cap.png" height="150px" width="200px" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                   <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="admin_home.php">Home</a></li> 
						<li class=""><a class="waves-effect waves-dark" href="admin_about.php">About us</a></li>
						<li class="active"><a class="waves-effect waves-dark" href="adminaccount.php">Details</a></li>
                       
                        <li><a class="waves-effect waves-dark" href="admin_information.php">Information</a></li>	
                        <li class="dropdown">
                        	
                        	<li><a class="waves-effect waves-dark" href="com_logout.php">logout</a></li>
                       
                              </ul> 
                    </li
                     </ul> 
                </div>
            </div>
        </div>
	</header><!-- end header -->

<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">ADMIN</h2>
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
<td><h3>Company Name &emsp;&emsp;</h3></td>
<td><h3>Stream &emsp;&emsp;</h3></td>
<td><h3>Visiting date &emsp;&emsp;</h3></td>
<td><h3>criteria &emsp;&emsp;</h3></td>
<td><h3>CTC &emsp;&emsp;</h3></td>
<td><h3>Job Description &emsp;</h3></td>

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


<!-- <td>&emsp;&emsp;<a href="admin_itemupdate.php?id=<?php echo $row['job_id'];?>" onclick="return confirm('Sure you want to Accept !'); "><img src="img/accept1.jpg" width="80px" height="60px" title="Accept"></a></td>
<td>&emsp;&emsp;<a href="admin_itemdelete.php?id=<?php echo $row['stream1_id'];?>" onclick="return confirm('Sure to delete !'); "><img src="img/delete1.png" width="60px" height="60px" align="center" title="Delete"></a>&emsp;&emsp;</td>
 -->
</tr>

<?php
$i=$i+1;
}
	?>
	</table>
	<br/><br/>
	<center>
	<a href="adminaccount.php"  align="center" class="btn btn-primary waves-effect waves-dark">BACK</a>
	</center>
	<br/><br/>
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