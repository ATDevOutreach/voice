<?php
// Be sure to include the file you've just downloaded
// Save this code in outGoing.php. Configure the callback URL for your phone number
// to point to the location of this script on the web
// e.g  http://YourSite.rhcloud.com/makeCall.php
require_once('AfricasTalkingGateway.php');

// Specify your login credentials
$username    = "YourAPIUserName";
$apiKey      = "YouAPIKey"; 

// Specify your Africa's Talking Phone number
$from = "+254711082300";

// Specify the number that you want to call
// Please ensure you include the country code (+254 for Kenya in this case)
$to = "+254787235065";

// Create a new instance of our awesome gateway class
$gateway  = new AfricaStalkingGateway($username, $apiKey);

// Thats it, make the call and we'll take care of the rest
if ( $gateway->call($from, $to) ) {
  // Call was made, time for song and dance
  echo "Success";
} else {
  echo "Oops, The call could not be made. Error: ".$gateway->getErrorMessage();
  error_log($e->getMessage());
}
// DONE!!!
?>