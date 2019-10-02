<?php

$rewards = array(

    'Comme à la maison' => array(
        'description' => 'Réservez 5 hotels différents',
        'progress'    => '100%',
        'icon'        => 'imgs/trophy.png'
    ),
    'Internationnal' => array(
        'description' => 'Voyagez dans 5 pays differents',
        'progress'    => '40%',
        'icon'        => 'imgs/medal.png'
    ),
    'Voyageur' => array(
        'description' => 'Faites 30 000 km',
        'progress'    => '5%',
        'icon'        => 'imgs/flight.png'
    ),
    'Parrain' => array(
        'description' => 'Parrainez 10 personnes',
        'progress'    => '0%',
        'icon'        => 'imgs/diamond.png'
    ),
);

$active = 1;

include 'inc/header.php'; ?>
<main role="main">
    <div class="album py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="card text-center bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Classement</h5>
                            <p class="card-text">150 / 30000</p>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    <?php
                    foreach ($rewards as $key => $reward) {
                        include 'inc/rewards_cards.php';
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>

</main>

<?php include 'inc/footer.php'; ?>