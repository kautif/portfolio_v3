<?php

$firstName = $lastName = $date = $married = $email = $phone = $address = $suite = $city = $state = $zip = $prev_ins = $ins_amount = $VIN = $year = $maker = $model = $tickets = $SR22 = "";

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
  $date = test_input($_POST["date"]);
  $married = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $address = test_input($_POST["address"]);
  $city = test_input($_POST["city"]);
  $state = test_input($_POST["state"]);
  $zip = test_input($_POST["zip"]);
  $ins_amount = test_input($_POST["ins_amount"]);
  $VIN = test_input($_POST["VIN"]);
  $year = test_input($_POST["year"]);
  $maker = test_input($_POST["maker"]);
  $model = test_input($_POST["model"]);
  $tickets = test_input($_POST["tickets"]);
  $SR22 = test_input($_POST["SR22"]);

  if (empty($firstName) || empty($lastName) || empty($date) || empty($married) || empty($email) || empty($phone)|| empty($address) || empty($city) || empty($state) || empty($zip) || empty($ins_amount) || empty($VIN) || empty($year) || empty($maker) || empty($model) || empty($tickets) || empty($SR22)) {
  		echo "Some form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }



	$to = 'kautif@gmail.com';
	$subject = "Auto Insurance Inquiry";				
	$txt = "First Name: {$_POST['firstName']}<br> Last Name: {$_POST['lastName']}<br> Date: {$_POST['date']}<br> Married: {$_POST['married']} <br> Email: {$_POST['email']} <br> Phone: {$_POST['phone']} <br> Address: {$_POST['address']} <br> Suite/Unit: {$_POST['suite']} <br> City: {$_POST['city']} <br> State: {$_POST['state']} <br> Zip Code: {$_POST['zip']} <br> Previous Ins Company: {$_POST['prev_ins']} <br> Previous Ins Amounts: {$_POST['ins_amount']} <br> VIN: {$_POST['VIN']} <br> Vehicle Year: {$_POST['year']} <br> Vehicle Maker: {$_POST['maker']} <br> Vehicle Model: {$_POST['model']} <br> Tickets or Accidents in last 59 months: {$_POST['tickets']} <br> SR22 Filing: {$_POST['SR22']}";
	$headers = "From: Autif Kamal <noreply@gmail.com'>\r\n";
	$headers .= "Reply-To: Kirk Sims <noreply@cighouston.com> noreply@cighouston.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	$success=mail($to,$subject,$txt,$headers);
	if ($success) {
		$BASE_URL = '//kautif.com/chriscashin';
		header("Location: $BASE_URL/pages/phpreceive.html"); // Use to make a confirmation page
		echo htmlspecialchars($_SERVER["PHP_SELF"]);
	} else {
		echo "Sending mail failed, please contact us directly.";
		exit;
	}
}
?>