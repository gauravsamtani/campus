
<?php
include("config.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // username and password sent from Form 
    $myemail = addslashes($_POST['email']); 
    $mypassword = addslashes($_POST['password']); 
    //echo($myusername)
    
        $sql="SELECT * FROM signparent WHERE email='$myemail' and password='$mypassword'";
        $result=mysql_query($sql);
        $row=mysql_fetch_array($result);
        $count=mysql_num_rows($result);
    

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
    //$_SESSION['loggedin'] = 1;
    echo "Successfully  loggedin";
    //header("Location: employeelogin.php");
    //exit;
    
    
    //echo("count is one 3");
    //session_register("myusername");
    //$_SESSION['login_user']=$myusername;
    //header("Location: employeelogin.php");
    
}
else 
{
    //$error="Your Login Name or Password is invalid";
    //echo '<span style="color:red;text-align:center;">Invalid username or password</span>';
    echo '<script language="javascript">';
    echo 'alert("Invalid username or password")';
    echo '</script>';


}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type='text/javascript'>
        $(document).ready(function(){
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $('#scroll').fadeIn();
                } else {
                    $('#scroll').fadeOut();
                }
            });
            $('#scroll').click(function(){
                $("html, body").animate({ scrollTop: 0 }, 600);
                return false;
            });
        });
    </script>
    <style type="text/css">
        /* BackToTop button css */
        #scroll {
            position:fixed;
            right:10px;
            bottom:10px;
            cursor:pointer;
            width:50px;
            height:50px;
            background-color:#3498db;
            text-indent:-9999px;
            display:none;
            -webkit-border-radius:60px;
            -moz-border-radius:60px;
            border-radius:60px
        }
        #scroll span {
            position:absolute;
            top:50%;
            left:50%;
            margin-left:-8px;
            margin-top:-12px;
            height:0;
            width:0;
            border:8px solid transparent;
            border-bottom-color:#ffffff
        }
        #scroll:hover {
            background-color:#e74c3c;
            opacity:1;filter:"alpha(opacity=100)";
            -ms-filter:"alpha(opacity=100)";
        }
    </style>
	<style>
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login|Parents</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/lightbox.css" rel="stylesheet"> 
    <link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <style>
        p {
            font-family: 'Indie Flower', cursive;
            font-size: 20px;
        }
    </style>

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="index.php">
                        <h1><img src="images/Schoolpix.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="#">Schools</i></a>
                        </li>                    
                        <li><a href="blog.html">Compare</i></a>
                        </li>
                        <li ><a href="#">Login <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="loginparents.php">Parents</a></li>
                                <li><a href="loginschools.php">Schools</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                           
                            <p style='font-size:35px;' class="text-center">Login For Parents</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

  
  <div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form  method="post" action="">
			<fieldset>
				<h2>Please Sign In</h2>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
				</div>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="registerparent.php" class="btn btn-lg btn-primary btn-block">Register</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>
</br>

     <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-10">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                           
                            <div class="media-body">
                                <blockquote>Best Website for Searching Schools and comparing between them.</blockquote>
                                <h3><a href="#">- Rahul</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            
                            <div class="media-body">
                                <blockquote>Easy way to find best school in the city with various aspects.</blockquote>
                                <h3><a href="">- Santhosh</a></h3>
                            </div>
                        </div>   
                    </div> 
                </div>
                <div class="col-md-4 col-sm-12" >
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">Schoolpix@email.com</a> <br> 
                        Phone: +91 9876543210<br> 
                        Fax: +91 9876543211 <br> 
                        </address>
                    </div>
                </div>
               <div class="col-md-4 col-sm-12" >
                  <div class="contact-info bottom">
                  <h2>Address</h2>
                        <address>
                        Unit C2, St.Vincent's Trading Est., <br> 
                        Feeder Road, <br> 
                        Bangalore <br> 
                        India <br> 
                        </address>
						</div>
                </div>
				
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Schoolpix 2017. All Rights Reserved.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
	  <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
    <!--/#footer-->

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightbox.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>   
</body>
</html>
