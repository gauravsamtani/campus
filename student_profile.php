
<?php  
session_start();  
$univid=$_SESSION['univid'];
if(!isset($_SESSION['univid']))  
{  
  
    header("Location: studlogin.php");//redirect to login page to secure the welcome page without login access.  
}  
else{
    echo "welcome" . $_SESSION['univid'];
}  

 include"config.php";
// $sql = "SELECT * FROM Company";



$sql1 = "SELECT stud_id,name,univ_id from student where univ_id='$univid'";
$result=$dbC->query($sql1);
if ($result->num_rows>0) 
{
    while($row = $result->fetch_assoc()) 
    {
        $u=$row["stud_id"];
        $w=$row["name"];
        $r=$row["univ_id"];
        
    }
}

$sql = "SELECT * FROM student WHERE stud_id=$u";

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
</head>

<body>
<div id="wrapper"> 
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
           <div class="navbar-collapse collapse ">
                   <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="stud_home.php">Home</a></li> 
            <li ><a class="waves-effect waves-dark" href="stud_about.php">About us</a></li>
                       <!-- <li><a class="waves-effect waves-dark" href="services.php">Services</a></li> -->
                       <li><a class="waves-effect waves-dark" href="studaccount.php">Placement</a></li>
                        <li class="active"><a class="waves-effect waves-dark" href="student_profile.php">Profile</a></li> 
                        <!-- <li><a class="waves-effect waves-dark" href="stud_information.php">Information</a></li> -->
                        
                    <li><a class="waves-effect waves-dark" href="stud_logout.php">logout</a></li>
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
    <center>
           <form action="edit_profile_student.php" style="width:30%" >
  <button type="submit" class="fa fa-pencil-square-o" aria-hidden="true" value="Submit">Edit Profile</button>
</form>
            <div class="user-image"></br>
              <!-- <a href="information.php"  align="left" class="btn btn-primary waves-effect waves-dark">Edit</a></br> -->
<img src="img/avatar.png" alt="<?php echo "$r";?>" title="<?php echo $row["$r"];?>" class="img-circle">
</div></center>
<center><h3><?php echo "$w";?></h3>
     
</div></center>              
 <center>
<div id="information" class="tab-pane active">
                            <!-- <h4>Account Information</h4> -->
<?php
$msg = $_GET['msg'];  //GET the message
if($msg!='') echo '<h2>'.$msg.'</h2>'; //If message is set echo it
?>
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
  height: 80%;
}
th {
  height: 50px;
}
</style>
<table class="table table-user-information" style="width:30%">

<tr>
<td><b>Name: &nbsp&nbsp</td>
 <?php
$i=1;
while($row = $result->fetch_assoc()) {
?> 
<td><?php echo $row["name"];?></td>
</tr>
<tr>
<td><b>SRN: &nbsp&nbsp</br></td>
<td><?php echo $row["univ_id"];?></td>
<tr></br>
<tr>
<td><b>Password: &nbsp&nbsp</td>
<td><?php echo $row["password"];?></td>
</tr>
<tr>
<td><b>Email-id: &nbsp&nbsp</td>
<td><?php echo $row["email_id"];?></td>
</tr>
<tr>
<td><b>Phone No: &nbsp&nbsp</td>
<td><?php echo $row["phno"];?></td>
</tr>

<?php
$i=$i+1;
}
?>
</table>
</div>
</center></section>
                </section>
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