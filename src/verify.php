<?php
error_reporting(E_ALL ^ E_WARNING); 
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require __DIR__ . './twilio-php-main/src/Twilio/autoload.php';

use Twilio\Rest\Client;

// Find your Account Sid and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = "ENTER YOUR ACCOUNT SID";
$token = "ENTER YOUR AUTH TOKEN";
$client = new Client($sid, $token);

$userPhone =  $_POST['pName'];
$rand = mt_rand(100000, 999999);
// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    $userPhone,
    [
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+14243226106',
        // the body of the text message you'd like to send
        'body' => "Your verification code is "+ $rand
    ]
);
  
?>
<html>
<form method="post" action="codeCheck.php">
  <p>Code:</p>	
  <input type="text"  name="userCode"><br><br> 
  <input type="hidden" name="code" value="<?php echo $rand;?>">
  <p><input type="submit" value="Validate"/></p>
</form>
</html>
