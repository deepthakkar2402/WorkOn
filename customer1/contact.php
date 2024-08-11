<?php 
include 'config.php';
session_start();
if(!isset($_SESSION['cost_logged_in']))
{
    header("location: signup_page.php");
} 
?>
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cleanfreshly a Home Maintenance & Service Category Bootstrap Responsive Web Template | Contact :: W3layouts
	</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:400,400i,500,600,700&display=swap"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,400i,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>
	<!--w3l-header-->
	<?php include 'header.php';?>
	<!--//top-header-content-->
	
	<!-- //w3l-header -->
	<!-- /contact-form -->
	<section class="w3l-contact-main">
		<div id="contacts4-block" class="contact-map">
			<div class="contact">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
					frameborder="0" style="border:0" allowfullscreen></iframe>
				<div class="cont-details">
					<h5>Opening hours</h5>

					<div class="opening-info-day">
						<span class="opening-left">Monday</span><span class="opening-right">8AM - 6AM</span>
					</div>
					<div class="opening-info-day">
						<span class="opening-left">Tuesday</span><span class="opening-right">8AM - 6AM</span>
					</div>
					<div class="opening-info-day">
						<span class="opening-left">Wednesday</span><span class="opening-right">8AM - 6AM</span>
					</div>
					<div class="opening-info-day">
						<span class="opening-left">Thursday </span><span class="opening-right">8AM - 6AM</span>
					</div>
					<div class="opening-info-day">
						<span class="opening-left">Friday</span><span class="opening-right">8AM - 6AM</span>
					</div>
					<div class="opening-info-day">
						<span class="opening-left">Saturday</span><span class="opening-right">8AM - 6AM</span>
					</div>
					<div class="opening-info-day">
						<span class="opening-left">Sunday</span><span class="opening-right">Closed</span>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- //contact-form -->
	<!-- /contact-form -->
	<section class="w3l-contact-main">
		<div class="contact-infhny py-5">
			<div class="container py-lg-5">
				<div class="grid contact-grids row">
					<div class="col-lg-6 contact-left">
						<div class="grid">
							<span class="fa fa-map-marker"></span>
							<div class="location-info">
								<span>Address</span>
								<p> Dolor sit, #PTH, 55080, 8800 Honey Street</p>
								<p>sed at ipsum, #9436 Apt Pro towers</p>
								<p>United kingdom, UK.</p>
							</div>
						</div>
						<div class="grid">
							<span class="fa fa-envelope-o"></span>
							<div class="email-info">
								<span>Have any Questions?</span>
								<a href="mailto:cleanfreshly@examplemail.com"> Cleanfreshly@examplemail.com</a>
							</div>
						</div>
						<div class="grid">
							<span class="fa fa-phone"></span>
							<div class="email-info">
								<span>Phone Number</span>
								<a href="tel:(123) 456-78-90"> (123) 456-78-90</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 contacts12-main">
						<form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
							<div class="input-grids">
								<input type="text" name="w3lName" placeholder="Full name" class="contact-input" />
								<input type="email" name="w3lSender" placeholder="Your email" class="contact-input" />
								<input type="text" name="w3lSubect" placeholder="Subject" class="contact-input" />
								<input type="number" name="w3lPhone" placeholder="Phone number" class="contact-input" />
							</div>
							<div>
								<textarea name="w3lMessage" placeholder="Type your message here" required=""></textarea>
							</div>
							<div class="text-right">
								<button class="btn submit">Send Message</button>
							</div>
						</form>
					</div>

				</div>
			</div>
	</section>
	<!-- //contact-form -->

	<!-- footer-66 -->
	<?php include 'footer.php';?>
	<!--//footer-66 -->
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!--/scroll-down-JS-->

<script src="assets/js/bootstrap.min.js"></script>