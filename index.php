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
?>

<!DOCTYPE html>
<html lang="FR-fr"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <title>CDSGroupe Gamification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <main role="main">

      <section class="jumbotron text-left">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img src="img/Logo_CDS.jpg" alt="">
                </div>
                <h1 class="col-md-10">CDS Rewards</h1>
            </div>
        </div>
      </section>

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

    <footer class="text-muted">
      
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>


<svg xmlns="http://www.w3.org/2000/svg" width="208" height="225" viewBox="0 0 208 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="11" style="font-weight:bold;font-size:11pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg></body></html>
