
<?php  
session_start();  
     $univid=$_SESSION['univid'];
// echo "welcome ".$univid;
if(!isset($_SESSION['univid']))  
{  
  
    header("Location: studlogin.php");//redirect to login page to secure the welcome page without login access.  
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
<title></title>
</head>
<body>
	<link rel="stylesheet" href="stl.css">

<div class="container">
  <div class="row">
    <div class="col-sm-4 col-md-4 user-details">
            <div class="user-image"></br></br></br></br></br></br>
                <center><img src="" alt="<?php echo "$r";?>" title="<?php echo $row["$r"];?>" class="img-circle">
            </div>
            <div class="user-info-block">
                <div class="user-heading">
                    <center><h3><?php echo "$w";?></h3>
                    <span class="help-block">Chandigarh, IN</span></center>
                    
                </div></center>
                
                    
                        
              
			
</br>

<!-- <table class="order-table table table-striped " id="myTable" style="width:80%" height align="center"> -->

                   
                
               <center> <div class="user-body">
                    <div class="tab-content">
                        <div id="information" class="tab-pane active">
                            <h4>Account Information</h4>
                                  <?php
			$msg = $_GET['msg'];  //GET the message
if($msg!='') echo '<h2>'.$msg.'</h2>'; //If message is set echo it
			?>
                            <table class="table table-user-information">
                      <tbody>
                          <tr>
                              <td><b>Name:</td>
                              <?php
							$i=1;
					while($row = $result->fetch_assoc()) {
?> 
                              <td><?php echo $row["name"];?></td>
                            </tr>
                            <tr>
                                <td><b>SRN:</br></td>
                                <td><?php echo $row["univ_id"];?></td>
                            </tr></br>
                            <tr>
                                <td><b>Password:</td>
                                <td><?php echo $row["password"];?></td>
                            </tr>
                            <tr>
                                <td><b>Email-id:</td>
                                <td><?php echo $row["email_id"];?></td>
                            </tr>
                            <tr>
                                <td><b>Phone Number:</td>
                                <td><?php echo $row["phno"];?></td>
                            </tr>
                        </tbody>

						<?php
						$i=$i+1;
						}
						?>
                    </table>
                        </div>
                        
                    </div>
                    </center>
                </div>
            </div>
        </div>
  </div>
  </body>
  </html>
</div>