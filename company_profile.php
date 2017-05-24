
<?php  
session_start();  
$username=$_SESSION['username'];
if(!isset($_SESSION['username']))  
{  
  
    header("Location: comlogin.php");//redirect to login page to secure the welcome page without login access.  
}  

include"config.php";
// $sql = "SELECT * FROM Company";



$sql1 = "SELECT com_id,name from company where username='$username'";
$result=mysqli_query($dbC, $sql1);
if ($result->num_rows>0) 
{
    while($row = $result->fetch_assoc()) 
    {
        $u=$row["com_id"];
        $w=$row["name"];
        
        
    }
}

$sql = "SELECT * FROM company WHERE com_id=$u";

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
<script type="text/javascript" src="paging.js"></script>
 
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
            <li><a class="waves-effect waves-dark" href="com_about.php">About us</a></li>
                       <!-- <li><a class="waves-effect waves-dark" href="services.php">Services</a></li>
                       <li><a class="waves-effect waves-dark" href="portfolio.php">Portfolio</a></li> -->
                       <li><a class="waves-effect waves-dark" href="comaccount.php">Details</a></li>
                       <li class="active"><a class="waves-effect waves-dark" href="company_profile.php">Profile</a></li>
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
        <h2 class="pageTitle">Profile</h2>
      </div>
    </div>
  </div>
  </section>


  <section id="content">
  <section class="section-padding">
    <div class="container">
  <div class="row">
    <!-- <div class="col-sm-4 col-md-4 user-details"> -->
     <center><form action="edit_profile_company.php" >
  <button type="submit" class="fa fa-pencil-square-o" aria-hidden="true" value="Submit">Edit Profile</button>
</form>
      <div class="user-image"></br>

        <img src="img/avatar.png" alt="<?php echo "$w";?>" title="<?php echo $row["$w"];?>" class="img-circle"></center>  
      </div>
      <center>
      
<!--       <div class="user-info-block">
        <div class="user-heading"></br> -->
          <h3><?php echo "$w";?></h3></br></center>
               <center> 
               <!-- <div class="user-body"> -->
                <!-- <div class="tab-content"> -->
                  <div id="information" class="tab-pane active">
                  <?php
			            $msg = $_GET['msg'];  //GET the message
                  if($msg!='') echo '<h2>'.$msg.'</h2>';		?>
                  <style>
table, th, td {
    border: 3px solid black;
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
                    <table class="table table-user-information" style="width:30%">
                      <tbody>
                          <tr>
                              <td><b>Name: &nbsp</td>
                              <?php
			                 				$i=1;
			                     		while($row = $result->fetch_assoc()) {?> 
                              <td><?php echo $row["name"];?></td>
                            </tr>
                            <tr>
                                <td><b>Username: &nbsp</br></td>
                                <td><?php echo $row["username"];?></td>
                            </tr></br>
                            <tr>
                                <td><b>Password: &nbsp</td>
                                <td><?php echo $row["password"];?></td>
                            </tr>
                            <tr>
                                <td><b>Phone No: &nbsp</td>
                                <td><?php echo $row["phno"];?></td>
                            </tr>
                            <tr>
                                <td><b>Website: &nbsp&nbsp</td>
                                <td><?php echo $row["website"];?></td>
                            </tr>
                      </tbody>

						                  <?php
						                  $i=$i+1;
						                  }
						                  ?>
                    </table>
                  </div>     
                  </div></center>
                </div>
                </section>
                </section>
                <!-- </div> -->
            <!-- </div>
        </div> -->
  </div>
  </body>
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
  </html>

