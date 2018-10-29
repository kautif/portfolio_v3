<?php
$firstName = $lastName = $address = $suite = $city = $state = $zip = $phone = $email = $updates = "";


function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}
	  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// print_r($_POST);
  $firstName = test_input($_POST["firstName"]);
  $lastName = test_input($_POST["lastName"]);
  $address = test_input($_POST["address"]);
  $suite = test_input($_POST["suite"]);
  $city = test_input($_POST["city"]);
  $state = test_input($_POST["state"]);
  $zip = test_input($_POST["zip"]);
  $phone = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $updates = test_input($_POST["updates"]);

  if (empty($firstName) || empty($lastName) || empty($address) || empty($city) || empty($state) || empty($zip) || empty($email) || empty($phone)) { 
  		echo "Some form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

	$to = 'kautif@gmail.com';
	$subject = "Flood Insurance Inquiry";				
	$txt = "First Name: {$_POST['firstName']}<br> Last Name: {$_POST['lastName']}<br> Address: {$_POST['address']} <br> Suite/Unit: {$_POST['suite']} <br> City: {$_POST['city']} <br> State: {$_POST['state']} <br> Zip Code: {$_POST['zip']} <br> Email: {$_POST['email']} <br> Email Updates: {$_POST['updates']} <br> Phone: {$_POST['phone']}";
	$headers = "From: Kirk Sims <noreply@cighouston.com'>\r\n";
	$headers .= "Reply-To: Kirk Sims <noreply@cighouston.com> noreply@cighouston.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	$success=mail($to,$subject,$txt,$headers);
	if ($success) {
		$BASE_URL = '//kautif.com/chriscashin';
		header("Location: $BASE_URL/pages/phpreceive.html"); // Use to make a confirmation page
		echo htmlspecialchars($_SERVER["PHP_SELF"]);
	} else {
		echo "Sending mail failed. Please try again. Contact us directly if it still doesn't work. Sorry for the inconvenience. Thank you.";
		exit;
	}
}
?>