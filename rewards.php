<?php

$rewards = array(
    'Internationnal #2' => array(
        'description' => 'Voyagez dans 10 pays differents',
        'rank'        => '140/330476',
        'progress'    => '50%',
        'icon'        => 'imgs/medal.png'
    ),
    'Reservation #3' => array(
        'description' => 'Réservez 30 hotels différents',
        'rank'        => '140/330476',
        'progress'    => '33%',
        'icon'        => 'imgs/trophy.png'
    ),
    'Parrain #1' => array(
        'description' => 'Parrainez 10 personnes',
        'rank'        => '140/330476',
        'progress'    => '10%',
        'icon'        => 'imgs/diamond.png'
    ),
    'Voyageur #2' => array(
        'description' => 'Faites 30 000 km',
        'rank'        => '140/330476',
        'progress'    => '70%',
        'icon'        => 'imgs/flight.png'
    ),
);

include 'inc/header.php'; ?>
<main role="main">
    <div class="album py-5">
        <div class="container">
            <div class="row">

                <?php
                foreach ($rewards as $key => $reward) {
                    include 'inc/rewards_cards.php';
                }
                ?>

            </div>
        </div>
    </div>

</main>

<?php include 'inc/footer.php'; ?>