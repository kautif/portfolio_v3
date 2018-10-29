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
				                    <li><a class="main">Flood</a></li>
				                    <li><a href="life.php">Life</a></li>
				                    <li><a href="business.php">Business</a></li>
				                </ul>
				            </li>
				            <li><a href="../pages/contact.php">Contact Us</a></li>
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
					  <div class="dropdowns_svcs">
					    <button class="dropbtn">Services</button>
					    <div class="dropdown-content">
							<a href="auto.php">Auto</a>
							<a href="home.php">Home</a>
							<a class="main">Flood</a>
							<a href="life.php">Life</a>
							<a href="business.php">Business</a>
					    </div>
					  </div> 
					  <a href="../pages/contact.php">Contact Us</a>
					  <a href="about.html">About Us</a>
					  <a class="quote" href="quote.html">Quote</a>
					</div>

					<div class="auto-heading">
						<h1>Flood Insurance</h1>
					</div>

					<div class="ins-flex">
						<div class="what card">
							<h2 style="text-align: center;">What is Flood Insurance?</h2>
							<ol>
								<li>Financially protects your property from <u>flood damage</u>.</li>
								<li><u>Most property insurance excludes floods</u></li>
								<li><b>In Harris County alone, more than <a href="http://www.click2houston.com/news/more-than-1700-flooded-homes-in-harris-county" target="_blank">3,600 homes</a> were flooded in 2016.</b></li>						
							</ol>
						</div>

						<div class="ins-img">
							<img src="../img/flood_overhead.jpg" alt="Overhead view of flooded city">
						</div>

						<div class="coverage card">
							<h2 style="text-align: center;">What Does it Cover?</h2>
							<ol>
								<li>According to NFIP: up to <u>$250,000</u> for your <u>home</u>.</li>
								<li>Up to <u>$100,000</u> for your <u>personal belongings</u>.</li>
							</ol>

						</div>


						<div class="why card">
							<h2 style="text-align: center;">Why is Flood Insurance Necessary?</h2>
							<ol>
								<li><u>Regardless of where you live</u>, you don't know when to expect a flood.</li>
								<li>But, all it takes is <u>flood insurance</u> to be <u>ready</u> for the <u>unexpected</u>.</li>
							</ol>

						</div>

						<div class="ins-img">
							<img src="../img/flood_street.jpg" alt="Street view of a flooded city">
						</div>
					</div>

					<h2 style="text-align: center;" id="flood-form">Request a Flood Insurance Quote</h2>

					<form class="form-all" method="POST" action="<?=getUrl('php/flood_mail.php');?>"> 
						<div class="form-first">
							<p><span>*</span> Indicates a required field</p>
							<p><span>*</span> First Name: <br><input type="text" name="firstName" placeholder="Type first name"></p>
							<p><span>*</span> Last Name: <br><input type="text" name="lastName" placeholder="Type last name"></p>
							<p><span>*</span> Marital Status:<br> 
							<select>
								<option>Single</option>
								<option>Married</option>
								<option>Widowed</option>
							</select></p>
							<p><span>*</span> Email: <br><input type="email" name="email" placeholder="Type email address"></p>
							<p><input type="checkbox" name="updates"> Chere to receive updates</p>
							<p><span>*</span> Phone: <br><input type="tel" name="phone" placeholder="Enter your phone number"></p>
						</div>

						<div class ="form-second">
							<p><span>*</span> Address: <br><input type="text" name="address" placeholder="Type street address"></p>
							<p>Unit/Suite: <br><input type="text" name="unit" placeholder="Unit or suite number"></p>
							<p><span>*</span> City: <br><input type="text" name="city" placeholder="Type city name"></p>
							<p><span>*</span> State:<br><input type="text" name="state" placeholder="Type state name"> <!-- Waiting on Kirk to decide whether he wants a drop down for this --></p>
							<p><span>*</span> Zip Code: <br><input type="number" name="zip" placeholder="Type your zip code"></p>
						<input type="submit" value="Submit">
						</div>
					</form>

					<div class="footer">
						<ul>
							<div class="pages">
								<li><strong><a href="../index.html">MAIN</a></strong></li>
								<li><strong><a href="contact.php">CONTACT US</a></strong></li>
								<li><strong><a href="about.html">ABOUT US</a></strong></li>
							</div>							<a href="https://www.linkedin.com/in/chris-cashin-a38a1bb3/"><img src="../img/linkedin.svg" alt="LinkedIn"></a>

						<div class="footer-svcs">
							<li><strong>INSURANCE</strong></li>
							<li class="footer-item"><a href="auto.php">Auto</a></li>
							<li class="footer-item"><a href="home.php">Home</a></li>
							<li class="footer-item"><a>Flood</a></li>
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