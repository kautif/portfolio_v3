
<?php 

require($_SERVER['DOCUMENT_ROOT'].'/chriscashin/config.php');
?>

<!DOCTYPE html>

<head>
	<link rel="stylesheet" type="text/css" href="../styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="	sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="../jquery/phone_nav.js"></script>

</head>

<html>
	<body>

	<div class="body-quote">
		<p><a href="quote.html">Quote</a></p>

	</div>

		<div class="all-content">

			<div class="phone-nav">
				<span class="toggle-button">
				     <div class="menu-bar menu-bar-top"></div>
				     <div class="menu-bar menu-bar-middle"></div>
				     <div class="menu-bar menu-bar-bottom"></div>
				</span>
				<div class="menu-wrap">
				    <div class="menu-sidebar">
				        <ul class="menu">
				            <li><a href="../index.html">Main</a></li>
				            <li class="menu-item-has-children"><a href="#">Services</a>
				                <span class="sidebar-menu-arrow"></span>
				                <ul class="sub-menu">
				                    <li><a href="auto.php">Auto</a></li>
				                    <li><a href="home.php">Home</a></li>
				                    <li><a href="flood.php">Flood</a></li>
				                    <li><a href="life.php">Life</a></li>
				                    <li><a href="business.php">Business</a></li>
				                </ul>
				            </li>
				            <li><a class="main">Contact Us</a></li>
				            <li><a href="about.html">About Us</a></li>
				            <li><a class="quote" href="quote.html">Quote</a></li>
				        </ul>           
				    </div>
				</div>
				<div class="phone-dir">
					<a target="_blank" href="https://www.google.com/maps/place/6319+Coachwood+Dr,+Houston,+TX+77035/@29.652382,-95.5039169,17z/data=!3m1!4b1!4m5!3m4!1s0x8640e9c08425e395:0xe60cab5e5471cfea!8m2!3d29.652382!4d-95.5017282"><img class="location-sym" src="../img/location.png" alt="location symbol"></a>
					<a target="_blank" href="tel:713-568-9467"><img class="phone-sym" src="../img/phone.png" alt="phone symbol"></a>
				</div>

			</div>

			<div class="top">
				<div class="logo">
					<img src="../img/cashin_ins_logo2.png" alt="Cashin Insurance Logo">
				</div>

				<div class="hook-phone">
					<div class="hook-content">
						<p>Call now to find out how we can customize a quote for you:</p>
						<p class="customer-number">Toll Free:(888)844-5264</p>
						<p class="customer-number">Phone:(713)568-9467</p>
						<p class="customer-number">Fax:(713)993-7309</p>

					</div>


				</div>
			</div>

					<div class="container-nav">
					  <a href="../index.html">Main</a>
					  <div class="dropdowns">
					    <button class="dropbtn">Services</button>
					    <div class="dropdown-content">
							<a href="auto.php">Auto</a>
							<a href="home.php">Home</a>
							<a href="flood.php">Flood</a>
							<a href="life.php">Life</a>
							<a href="business.php">Business</a>
					    </div>
					  </div> 
					  <a class="main">Contact Us</a>
					  <a href="about.html">About Us</a>
					  <a class="quote" href="quote.html">Quote</a>
					</div>

					<h1 style="text-align: center;">Have any questions?</h1>
					<form class="form-all" method="POST" action="<?=getUrl('php/contact_mail.php');?>"> 
						<div class="form-first">
							<p><span>*</span> Indicates a required field</p>
							<p><span>*</span> First Name: <br><input required type="text" name="firstName" placeholder="Type first name"></p>
							<p><span>*</span> Last Name: <br><input required type="text" name="lastName" placeholder="Type last name"></p>
							<p><span>*</span> Email: <br><input required type="email" name="email" placeholder="Type email address"></p>
							<p><input type="checkbox" name="updates"> Check to receive updates</p>
						</div>

						<div class="form-second">
							<p><span>*</span> Subject: <br><input required type="tel" name="subject" placeholder="Enter subject"></p>
							<p><span>*</span> Message: <br><textarea required name="msg"></textarea></p>
							
						<input type="submit" value="Submit">
						</div>
					</form>

					<div class="chris-contact">
						<div class="chris-position">
							<img src="../img/chris_linkedin.jpg" alt="Chris">
							<p><b>Chris Cashin,</b></p>
							<p><b>Principal Agent</b></p>
						</div>
						<div class="chris-reach">
							<h3>Cashin Insurance Group</h3>
							<p>Toll Free: (888) 844 - 5264</p>
							<p>Local: (713) 568 - 9467 (Phone)<br>(713) 993 - 7309 (Fax)</p>
							<p>Email:chris@cighouston.com</p>
						</div>
					</div>


					</div>


					<div class="footer">
						<ul>
							<div class="pages">
								<li><strong><a href="../index.html">MAIN</a></strong></li>
								<li><strong><a>CONTACT US</a></strong></li>
								<li><strong><a href="about.html">ABOUT US</a></strong></li>
							</div>
						<div class="footer-svcs">
							<li><strong>INSURANCE</strong></li>
							<li class="footer-item"><a href="auto.php">Auto</a></li>
							<li class="footer-item"><a href="home.php">Home</a></li>
							<li class="footer-item"><a href="flood.php">Flood</a></li>
							<li class="footer-item"><a href="life.php">Life</a></li>
							<li class="footer-item"><a href="business.php">Business</a></li>
						</div>
						<div class="footer-social">
							<a href="https://www.linkedin.com/in/chris-cashin-a38a1bb3/"><img src="../img/linkedin.svg" alt="LinkedIn"></a>
							<p>Created by <a href="http://www.kautif.com">Autif Kamal</a></p>
						</div>
						</ul>

					</div>
					<div class="creator">
						<p>Created by <a href="http://www.kautif.com">Autif Kamal</a></p>
					</div>
		</div>
	</body>
	</html>