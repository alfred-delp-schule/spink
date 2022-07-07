<?php
include ('../tools/functions.php');
checkAllPages();
//Datenbankverbindung erstellen
$con = getDBConnection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Frequently Asked Questions</title>
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon_frame1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon_frame2.png">
    <link rel="icon" type="image/png" sizes="180x180" href="../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../img/favicon_frame4.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../img/favicon_frame5.png">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/css/ClashDisplay-Variable.css">
    <link rel="stylesheet" href="../styles/css/Navbar-With-Button.css">
    <link rel="stylesheet" href="../styles/css/styles.css">
</head>

<body style="background: rgb(255,246,232); padding-top: 10rem;">
<?php
if (checkLoginhtml()) {
    include ('../view/header_log.php');
} else {
    include ('../view/header.php');
}
?>
    <h1 class="text-center pb-4">Frequently Asked Questions</h1>
    <div class="row mb-3">
          <div class="col-lg-4 themed-grid-col"></div>
          <div class="col-lg-4 themed-grid-col">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Was ist SPINK?
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>SPINK ist ein Projekt, das von einem Team von Studenten des Instituts für Informatik der Universität Stuttgart entwickelt wurde. Das Projekt ist ein Projekt zur Erstellung einer Webseite, die einen Überblick über die Inhalte des SPINK-Kurses bietet.</p>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Was kostet SPINK?
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>SPINK ist kostenlos. Es werden keine Kosten für die Erstellung der Seite entrichtet. Die Seite wird lediglich auf Basis von Informationen aus der Datenbank erstellt.</p>
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Warum sollte ich SPINK nutzen?
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>SPINK bietet einen Überblick über die Inhalte des Kurses. Dieser Überblick ist einmalig und kann nicht mehr aktualisiert werden. Daher ist es ratsam, diese Seite zu nutzen, um die Inhalte des Kurses zu erfahren.</p>
                </div>
                </div>
            </div>
            </div>
          </div>
          <div class="col-lg-4 themed-grid-col"></div>
    </div>

    <?php include ('../view/footer.php'); ?>
    <script src="../styles/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>