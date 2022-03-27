<?php

session_start();
require_once 'vendor/autoload.php';
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('554501388158-slfg9uvas48amt1olk9hj3o4ii981hqm.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/mvcPHP-master/View/form/signup.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 