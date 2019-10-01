<div class="col-lg-4 d-flex align-items-stretch">
    <div class="card mb-4 box-shadow">
    <img class="card-img-top" src="https://www.hotel-diana-dauphine.com/media/cache/jadro_resize/rc/1mY5HDLW1563365943/jadroRoot/medias/5658345e8f976/chambre-1.jpg" data-holder-rendered="true">
    <div class="card-body">
        <h2><?php print $hotel->RatName; ?></h2>
        <p class="card-text"><?php print $hotel->RatDesc; ?></p>
        <div class="d-flex justify-content-between align-items-center">
        <div class="card-bottom">
            <small><?php print $hotel->RoomPrice; ?>€ / nuit</small>
            <button type="button" class="btn">Réserver</button>
        </div>
        </div>
    </div>
    </div>
</div>