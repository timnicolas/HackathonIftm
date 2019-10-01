<div class="col-lg-4 d-flex align-items-stretch">
    <div class="card mb-4 box-shadow">
    <div class="card-thumbnail">
        <img class="card-img-top" src="https://www.hotel-diana-dauphine.com/media/cache/jadro_resize/rc/1mY5HDLW1563365943/jadroRoot/medias/5658345e8f976/chambre-1.jpg" data-holder-rendered="true">
    </div>
    <div class="card-body">
        <h2><?php print $hotel->RatName; ?></h2>
        <p class="card-text"><?php print $hotel->RatDesc; ?></p>
        <div class="d-flex justify-content-between align-items-center">
        <a class="card-bottom">
            <small><b><?php print $hotel->RoomPrice; ?>€</b> / nuit</small>
            <span href="">Réserver <i class="fas fa-chevron-right"></i></span>
        </a>
        </div>
    </div>
    </div>
</div>