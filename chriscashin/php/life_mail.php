<?php
$firstName = $lastName = $date = $married = $sex = $email = $phone = $updates = $coverage = $tobacco = "";

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
  $married = test_input($_POST["married"]);
  $sex = test_input($_POST["sex"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $updates = test_input($_POST["updates"]);
  $coverage = test_input($_POST["coverage"]);
  $tobacco = test_input($_POST["tobacco"]);

  if (empty($firstName)  ) { 
  		echo "firstName form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

  if ( empty($lastName)  ) { 
  		echo "lastName form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

  if (  empty($email) ) { 
  		echo "email form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

  if (empty($phone)) { 
  		echo "phone form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

  if (empty($date)) { 
  		echo "date form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

  if (empty($sex)) { 
  		echo "sex form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

  if (empty($coverage)) { 
  		echo "coverage form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

  if (empty($tobacco)) { 
  		echo "tobacco form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }
	$to = 'kautif@gmail.com';
	$subject = "Life Insurance Inquiry";				
	$txt = "First Name: {$_POST['firstName']}<br> Last Name: {$_POST['lastName']} <br> Date of Birth: {$_POST['date']} <br> Marital Status: {$_POST['married']} <br> Sex: {$_POST['sex']} <br> Email: {$_POST['email']} <br> Email Updates: {$_POST['updates']} <br> Phone: {$_POST['phone']} <br> Coverage amount: {$_POST['coverage']} <br> Tobacco or Nicotine: {$_POST['tobacco']}";
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