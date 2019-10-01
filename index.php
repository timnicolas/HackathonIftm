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
$OneHotel = $hotels->Hotels[0];

// var_dump($hotels);die;
include 'inc/header.php';

?>
<main role="main">
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <?php
                foreach ($OneHotel->RoomRateList as $hotel) {
                    include 'inc/cards.php';
                }
                ?>
            </div>
        </div>
    </div>

</main>

<?php include 'inc/footer.php'; ?>