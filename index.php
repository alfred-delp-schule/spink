<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Home</title>
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_frame1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_frame2.png">
    <link rel="icon" type="image/png" sizes="180x180" href="img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon_frame4.png">
    <link rel="icon" type="image/png" sizes="512x512" href="img/favicon_frame5.png">
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/css/ClashDisplay-Variable.css">
    <link rel="stylesheet" href="styles/css/Navbar-With-Button.css">
    <link rel="stylesheet" href="styles/css/styles.css">
</head>

<body style="background: rgb(255,246,232); padding-top: 10rem;">
    <nav style="background: rgb(255,246,232);" class="navbar navbar-light navbar-expand-md py-3 fixed-top">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#" style="font-family: ClashDisplay-Variable;font-weight: bold;margin-right: 45px;"><img class="user-select-none" src="img/logo_spink.png" width="90px"></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#" style="font-family: ClashDisplay-Variable;">HOME</a></li>
                    <li class="nav-item" style="font-family: ClashDisplay-Variable;"><a class="nav-link" href="public/marktplatz" style="font-family: ClashDisplay-Variable;">MARKTPLATZ</a></li>
                    <li class="nav-item" style="font-family: ClashDisplay-Variable;"><a class="nav-link" href="faq" style="font-family: ClashDisplay-Variable;">FAQ</a></li>
                </ul>
                <a class="btn btn-primary py-3 px-4 mx-4" href="kunde/login" style="font-family: ClashDisplay-Variable; background-color: rgb(239, 240, 236); border-color: rgba(0, 0, 0, 0); color: black; border-radius: 10px;">LOG IN</a>
                <a class="btn btn-primary py-3 px-4 rounded-pill" href="kunde/signup" style="font-family: ClashDisplay-Variable; background-color: rgb(30, 35, 48); border-color: rgba(0, 0, 0, 0); color: rgb(255, 255, 255);">SIGN UP</a>
            </div>
        </div>
    </nav>
    <section class="py-4 py-xl-5">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center" style="margin-right: 220px;">
                    <div>
                        <h2 class="text-uppercase fs-1 fw-bold mb-3" style="font-family: ClashDisplay-Variable;color: #6f9881;">Investiere in ökologische, soziale und auch kleine Unternehmen aus deiner Region</h2>
                        <p class="mb-4" style="font-family: ClashDisplay-Variable;">Verfolge mit, was dein Geld bewirken kann, die Welt ein kleines Stück besser zu machen und profitiere gleichermaßen wirtschaftlich aus der Wertsteigerung deines Investments. </p>
                        <a class="btn btn-primary py-3 px-4 rounded-pill" href="public/" style="font-family: ClashDisplay-Variable; background-color: rgb(30, 35, 48); border-color: rgba(0, 0, 0, 0); color: rgb(255, 255, 255);">ENTDECKEN</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="m-5">
        <img class="img-fluid mx-auto" src="img/home_feld_bild.jpg">
    </section>
    <footer class="text-center">
        <div class="container text-muted py-4 py-lg-5">
            <ul class="list-inline" style="font-family: ClashDisplay-Variable;">
                <li class="list-inline-item" style="margin-right: 24px;"><a class="link-secondary" href="public">Marktplatz</a></li>
                <li class="list-inline-item" style="margin-right: 24px;"><a class="link-secondary" href="mailto:info@spink-trade.de">Email uns</a></li>
                <li class="list-inline-item" style="margin-right: 24px;"><a class="link-secondary" href="impressum">Impressum</a></li>
                <li class="list-inline-item" style="margin-right: 8px;"><a class="link-secondary" href="datenschutzerklärung">Datenschutzerklärung</a></li>
            </ul>
            <p class="mb-0" style="font-family: ClashDisplay-Variable;">Copyright © 2022 SPINK</p>
        </div>
    </footer>
    <script src="styles/bootstrap/js/bootstrap.min.js"></script>

    <?php if(isset($_SESSION['user'])){ ?>
  <a class="link" href="logout.php" style="text-decoration:none">logout</a>
<?php }else{ ?>
  <a class="link" href="login.php" style="text-decoration:none">login</a>
<?php } ?>

</body>

</html>