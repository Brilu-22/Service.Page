<?php
// calendar.php
// Google Calendar API integration (this example assumes the Google API PHP Client is installed via Composer)
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig('credentials.json');
$client->addScope(Google_Service_Calendar::CALENDAR);

// Redirect to Google Calendar
$authUrl = $client->createAuthUrl();
header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
exit;
?>
