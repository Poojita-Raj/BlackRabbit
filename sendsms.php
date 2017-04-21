<?php
// Required if your envrionment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'AC42f3a07308819681f2c0243060e50ccb';
$token = '0f12863f90bde734a316253702488f65';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+919535242810',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+19382232700',
        // the body of the text message you'd like to send
        'body' => 'Hey Jenny! Good luck on the bar exam!'
    )
);