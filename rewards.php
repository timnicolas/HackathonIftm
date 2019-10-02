<?php

$rewards = array(

    'Comme à la maison #3' => array(
        'description' => 'Réservez 5 hotels différents',
        'rank'        => '140/330476',
        'progress'    => '100%',
        'icon'        => 'imgs/trophy.png'
    ),
    'Internationnal #2' => array(
        'description' => 'Voyagez dans 10 pays differents',
        'rank'        => '140/330476',
        'progress'    => '50%',
        'icon'        => 'imgs/medal.png'
    ),
    'Voyageur #2' => array(
        'description' => 'Faites 30 000 km',
        'rank'        => '140/330476',
        'progress'    => '5%',
        'icon'        => 'imgs/flight.png'
    ),
    'Parrain #1' => array(
        'description' => 'Parrainez 10 personnes',
        'rank'        => '140/330476',
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