<div class="col-lg-4 d-flex align-items-stretch">
    <div class="card mb-4 box-shadow">
    <div class="card-thumbnail">
        <img class="card-img-top" src="<?php echo ("imgs/rooms/" . $i . ".jpg"); ?> " data-holder-rendered="true">
    </div>
    <div class="card-body">
        <h2><?php print $hotel->RatName; ?></h2>
        <p class="card-text"><?php print $hotel->RatDesc; ?></p>
        <div class="d-flex justify-content-between align-items-center">
        <a class="order card-bottom">
            <small><b><?php print $hotel->RoomPrice; ?>€</b> / nuit</small>
            <span href="">Réserver <i class="fas fa-chevron-right"></i></span>
        </a>
        </div>
    </div>
    </div>
</div>