<div class="col-md-6">
    <div class="card reward-card mb-4 box-shadow <?php echo ($reward['progress'] < 100) ? "disabled" : "" ?>">
        <div class="row">
            <div class="col-4">
                <img class="centerImg" src="<?php print $reward['icon']; ?>" alt="img badge">
            </div>
            <div class="card-body col-7">
                <h2><?php print $key; ?></h2>
                <p class="card-text"><?php print $reward['description']; ?></p>
                <div id="progressPerso">
                    <div id="progressBar" style="width: <?php print $reward['progress']; ?>">
                    </div>
                </div>
                <small class="text-muted"><?php print $reward['progress']; ?></small>
            </div>
        </div>
    </div>
</div>