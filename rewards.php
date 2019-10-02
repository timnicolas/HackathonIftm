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
                    <div class="card card-rank bg-light">
                        <div class="card-body">
                            <h4 class="card-title"><b>Rang : </b> <span>#150</span> / 27350</h4>
                            <p class="card-text">Félicitations, vous êtes <b>150ème</b> parmi les 27350 chasseurs de badge dans le programme <b>CDS Rewards</b>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-2">
                    <div class="row">
                        <?php
                        foreach ($rewards as $key => $reward) {
                            include 'inc/rewards_cards.php';
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>

<?php include 'inc/footer.php'; ?>