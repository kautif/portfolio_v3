<?php
$firstName = $lastName = $email = $updates = $subject = $msg = "";

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
  $email = test_input($_POST["email"]);
  $updates = test_input($_POST["updates"]);
  $subject = test_input($_POST["subject"]);
  $msg = test_input($_POST["msg"]);

  if (empty($firstName)) { 
  		echo "firstName form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

  if (empty($lastName)) { 
  		echo "lastName form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

  if (empty($email)) { 
  		echo "email form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

  if (empty($subject)) { 
  		echo "subject form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

  if (empty($msg)) { 
  		echo "msg form details were submitted blank. Return to the previous page and submit form with all required details. Sorry for any inconvenience. Thank you.";
  		exit;	
  }

	$to = 'kautif@gmail.com';
	$subject = "General Inquiry";				
	$txt = "First Name: {$_POST['firstName']}<br> Last Name: {$_POST['lastName']} <br> Email: {$_POST['email']} <br> Updates: {$_POST['updates']} <br> Subject: {$_POST['subject']} <br> Message: {$_POST['msg']}";
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