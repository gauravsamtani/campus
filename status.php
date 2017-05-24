<?php
include "adminaccount.php";
include"config.php";
$sql = "SELECT * FROM job_details";
$result = $dbC->query($sql);

	error_reporting(E_ERROR | E_PARSE);
		
?>








<?php
$msg = $_GET['msg'];  //GET the message
if($msg!='') echo '<h2>'.$msg.'</h2>'; //If message is set echo it
			?>
			
</br>
<table>
<tr>
<td><h3>#&emsp;&emsp;</h3></td>
<td><h3>job id  &emsp;&emsp;</h3></td>
<td><h3>Sender name &emsp;&emsp;</h3></td>
<td><h3>Email &emsp;&emsp;</h3></td>
<td><h3>Phone &emsp;&emsp;</h3></td>
<td><h3>Courier_deatil &emsp;&emsp;</h3></td>
<td><h3>Address &emsp;</h3></td>
<td><h3>City &emsp;&emsp;</h3></td>
<td><h3>Pickup Time &emsp;&emsp;</h3></td>
<td><h3>Pin Code &emsp;&emsp;</h3></td>
<td><h3>State &emsp;&emsp;</h3></td>
<td><h3>Service &emsp;&emsp;</h3></td>
<td><h3>Product Type &emsp;&emsp;</h3></td>
<td><h3>Booking Date &emsp;</h3></td>
<td><h3>Recevier Name &emsp;&emsp;</h3></td>
<td><h3>Recevier Phone &emsp;&emsp;</h3></td>
<td><h3>Recevier Address &emsp;&emsp;</h3></td>
<td><h3>Recevier Deatils &emsp;&emsp;</h3></td>
<td><h3>Recevier City &emsp;&emsp;</h3></td>
<td><h3>Recevier State &emsp;&emsp;</h3></td>
<td><h3>Recevier Pincode &emsp;&emsp;</h3></td>
<td><h3>Status &emsp;&emsp;</h3></td>
<td></td>
<td></td> -->
</tr>
<?php
$i=1;
while($row = $result->fetch_assoc()) {
?> 

<tr>
<td><?php echo $i;?></td>
<td><?php echo $row["job_id"];?></td>

{
	echo "pending";
}
else{
	echo"dispachted";
}
?>&emsp;&emsp;</td>


</tr>

<?php
$i=$i+1;
}
	?>
	</table>
	</div>
	</div>
	</section>











<!-- footer section -->
<section class="footer-agileits">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>More Info</h3>
			<ul class="info-links">
				<li><a href="about.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="icons.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Icons</a></li>
				<li><a href="privacy.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Privacy Policy</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Our Links</h3>
			<ul class="footer-links">
				<li><a href="service.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Our Services</a></li>
				<li><a href="work.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Our Work</a></li>
				<li><a href="process.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Process</a></li>
				<li><a href="typo.php"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Typography</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Contact Info</h3>
			<div class="contact-info">
				<div class="address">	
					<i class="glyphicon glyphicon-globe"></i>
					<p class="p3">#53 1st Street</p>
					<p class="p4">Bangalore, India</p>
				</div>
				<div class="phone">
					<i class="glyphicon glyphicon-phone-alt"></i>
					<p class="p3">8861459698</p>
					<p class="p4">9414732056</p>
				</div>
				<div class="email-info">
					<i class="glyphicon glyphicon-envelope"></i>
					<p class="p6"><a href="mailto:myemail1@example.com">durgeshsinghn70@gmail.com</a></p>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Subscribe Us</h3>
			<div class="subscribe">
				<form action="#" method="post">
					<div class="form-group">
						<input type="email" name="email2" class="form-control" id="inputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="text" name="user" class="form-control" id="text1" placeholder="Your Name">
					</div>
					<div class="form-group">
						<button type="submit" class="btn-outline">Subscribe</button>
					</div>
				</form>
			</div>	
			<ul class="social-icons2">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		
		
		
		
		
		
		
		<div class="clearfix"></div>
		<hr>
		<p class="copyright">© 2017 SLPD. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">Durgesh Singh</a></p>
	</div>
</section>
<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/index.js"></script>
<script src="js/top.js"></script> 
<script src="js/bgfader.js"></script>
<script>
var myBgFader = $('.header').bgfader([
  'images/banner1-1.jpg',
  'images/banner1-2.jpg',
  'images/img.jpg',
  'images/banner1-4.jpg',
], {
  'timeout': 2000,
  'speed': 3000,
  'opacity': 0.4
})

myBgFader.start()
</script>
<!-- /js files -->
</body>
</html>
		