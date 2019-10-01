<?php
ini_set("xdebug.var_display_max_children", -1);
ini_set("xdebug.var_display_max_data", -1);
ini_set("xdebug.var_display_max_depth", -1);

require_once 'library/Requests.php';
Requests::register_autoloader();

// AUTHENTICATION

$headers = array('Content-Type' => 'application/json');
$data = array(
    'Username' => 'SEKSEK',
    'Password' => 'XZdAUq7b'
);

$endpoint = 'https://bookings.cdsgroupe.com/hackathon/v1';
$tokenRequest = Requests::post($endpoint . '/Authenticate', $headers, json_encode($data));

$token = json_decode($tokenRequest->body);
$agentDutyCode = $token->AgentDutyCode;
$token = $token->Token;

// HOTELS AVAILABLE

$headers['Authorization'] = 'Bearer ' . $token;

$hotelsRequest = Requests::get($endpoint . '/HotelAvail?agentDutyCode=' . $agentDutyCode . '&checkin=2019-12-15&checkout=2019-12-16&chainCode=NN&hotelCode=AMDYXPARACV&guest=1&room=1', $headers);

$hotels = json_decode($hotelsRequest->body);

var_dump($hotels);die;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
    
</body>
</html>