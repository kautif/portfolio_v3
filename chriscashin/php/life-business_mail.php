<?php
$business = $business_contact = $email = $business_type = $business_gross = "";

function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}
	  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//print_r($_POST);
  $business = test_input($_POST["business"]);
  $business_contact = test_input($_POST["business_contact"]);
  $email = test_input($_POST["email"]);
  $business_type = test_input($_POST["business_type"]);
  $business_gross = test_input($_POST["business_gross"]);

  if (empty($business) || empty($business_contact) || empty($business_type) ||  empty($business_gross)) { 
  		echo "Some form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

	$to = 'kautif@gmail.com';
	$subject = "Life Insurance for Employees Inquiry";				
	$txt = "Business Name: {$_POST['business']}<br> Business Contact: {$_POST['business_contact']} <br> Email: {$_POST['email']} <br> Business Type: {$_POST['business_type']} <br> Gross Sales: {$_POST['business_gross']}";
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