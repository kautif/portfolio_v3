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
				                    <li><a class="main">Life</a></li>
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
							<a href="flood.php">Flood</a>
							<a class="main">Life</a>
							<a href="business.php">Business</a>
					    </div>
					  </div> 
					  <a href="../pages/contact.php">Contact Us</a>
					  <a href="about.html">About Us</a>
					  <a class="quote" href="quote.html">Quote</a>
					</div>

					<div class="auto-heading">
						<h1>Life Insurance</h1>
					</div>

					<div class="ins-flex">
						<div class="what card">
							<h2 style="text-align: center;">What is Life Insurance?</h2>
							<ol>
								<li>In the unfortunate event of your death, your family is financially supported for your financial obligations.</li>
								<li>Term Life Insurance: The most affordable premium payments with a comparable payout. As long as premiums are paid policy lasts for selected term</li>
									<ul>
										<li>10, 15, 20, or 30 years.</li>
									</ul>
								<li>Permanent Life Insurance: Guaranteed payout as long as you pay your premiums</li>
									<ul>
										<li>Funds may be withdrawn from your policy. This is the cash value of your life policy.</li>
									</ul>
								<li>Final Expense Insurance: Has more affordable premium payments, but a lower payout.</li>
									<ul>
										<li>For paying off your final bills: Medical expenses, credit card debt, funeral and burial costs, etc.</li>
									</ul>						
							</ol>
						</div>

						<div class="coverage card">
							<h2 style="text-align: center;">What Does it Cover?</h2>
							<ol>
								<li>Can help your family pay for funeral expenses, housing costs, medical bills not covered by your health insurance (ask your agent for details), your children's college, debts, and just about anything else that they may need.</li>
							</ol>

							<h2 style="text-align: center;">Why is Life Insurance Necessary?</h2>
							<ol>
								<li>Everyone will die at some point. But, that doesn't mean that the family you leave behind must suffer as well. They can be financially protected.</li>
							</ol>
						</div>

						<!-- <div class="why card">

						</div> -->
					</div>


					<div class="form-all"> 
						<form class="form-first" method="POST" action="<?=getUrl('php/life_mail.php');?>">
							<h3 id="life-form">Request a <br>Life Insurance Quote</h3>
							<p><span>*</span> Indicates a required field</p>
							<p><span>*</span> First Name: <br><input required type="text" name="firstName" placeholder="Type first name"></p>
							<p><span>*</span> Last Name: <br><input required type="text" name="lastName" placeholder="Type last name"></p>
							<p><span>*</span> Date of Birth:<br><input required type="date" name="date"></p>
							<p><span>*</span> Marital Status: <br>
							<select>
								<option>Single</option>
								<option>Married</option>
								<option>Widowed</option>
							</select></p>
							<p><span>*</span> Sex: <br><input type="radio" name="sex" value="male"> Male
							<input type="radio" name="sex" value="female"> Female</p>
							<p><span>*</span> Email: <br><input required type="email" name="email" placeholder="Type email address"></p>
							<p>	 <input type="checkbox" name="updates" value="Yes"> Check to receive updates</p>
							<p><span>*</span> Phone: <br><input required type="tel" name="phone" placeholder="Enter your phone number"></p>
							<p><span>*</span> Coverage Amount: <br><input required type="number" name="coverage" placeholder="Enter amount desired"></p>
							<p><span>*</span> Using Tobacco/Nicotine?" <br><input type="radio" name="tobacco" value="yes"> Yes
							<input type="radio" name="tobacco" value="no"> No</p>
							<input class="life1-submit" type="submit" value="Submit">
						</form>


						<form class="form-second" method="POST" action="<?=getUrl('php/life-business_mail.php');?>">
							<h3>Life Insurance <br>for Your Business</h3>
							<p><span>*</span> Business Name: <br><input required type="text" name="business" placeholder="Enter business name"></p>
							<p><span>*</span> Business Contact Name: <br><input required type="text" name="business_contact" placeholder="Enter business contact"></p>
							<p><span>*</span> Email: <br><input required type="email" name="email" placeholder="Enter email address"></p>
							<p><span>*</span> Type of Business: <br><input required type="text" name="business_type" placeholder="Enter business type"></p>
							<p>Gross Sales: <br><input type="number" name="business_gross" placeholder="Enter gross sales amount"></p>
						<input type="submit" value="Submit">
						</form>
					</div>

					<div class="footer">
						<ul>
							<div class="pages">
								<li><strong><a href="../index.html">MAIN</a></strong></li>
								<li><strong><a href="contact.php">CONTACT US</a></strong></li>
								<li><strong><a href="about.html">ABOUT US</a></strong></li>
							</div>
						<div class="footer-svcs">
							<li><strong>INSURANCE</strong></li>
							<li class="footer-item"><a href="auto.php">Auto</a></li>
							<li class="footer-item"><a href="home.php">Home</a></li>
							<li class="footer-item"><a href="flood.php">Flood</a></li>
							<li class="footer-item"><a>Life</a></li>
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