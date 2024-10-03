<?php

session_start();
require __DIR__ . "/../vendor/autoload.php";

$client = new Google_Client();
$client->setApplicationName('Lab4');

$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAuthConfig(__DIR__.'/credentials.json');
$client->setAccessType("offline");
$client->useApplicationDefaultCredentials();
