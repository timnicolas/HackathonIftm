<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="imgs/CDS-favicon-32x32.png">
    <title>CDSGroupe Gamification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="popup.css">
</head>

<body>
    <div class="notif">
        <h4>Comme à la maison</h4>
        <p>Effectuer 5 réservations</p>
        <div class="progressBar">
            <div><em>3 / 5</em></div>
        </div>
    </div>

    <section class="jumbotron text-left">
        <div class="container">
            <a href='index.php' class="row">
                <div class="col-md-2 text-center">
                    <img src="imgs/Logo_CDS.jpg" alt="">
                </div>
                <h1 class="col-md-10">CDS Rewards</h1>
            </a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light container">
            <div class="navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link <?php echo ($active == 0) ? "active" : "" ?>" href="index.php">Hotels <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link <?php echo ($active == 1) ? "active" : "" ?>" href="rewards.php">Succès</a>
                </div>
            </div>
        </nav>
    </section>