<?php
// Connection of libraries
require 'vendor/autoload.php';

// Initialize the Google client
$client = new Google_Client();
$client->setClientId('ClientId');
$client->setClientSecret('ClientSecret');
$client->setRedirectUri('RedirectUri');
$client->addScope("email");
$client->addScope("profile");

// Create a Google authentication URL and send it to the frontend
$authUrl = $client->createAuthUrl();
echo json_encode(['success' => true, 'authUrl' => $authUrl]);
exit;
?>

