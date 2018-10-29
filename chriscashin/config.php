<?php

function is_localhost() {
		
		// set the array for testing the local environment
		$whitelist = array( '127.0.0.1', '::1' );
		
		// check if the server is in the array
		if ( in_array( $_SERVER['REMOTE_ADDR'], $whitelist ) ) {
			
			// this is a local environment
			return true;
			
		}
		return false;
	}

function getUrl($path)
{
	$baseUrl = "http://localhost/Web_Projects/chriscashin/";
	if(is_localhost() == false)
	{
	$baseUrl = "http://kautif.com/chriscashin/";
	}
	return $baseUrl . $path;
}

?>


