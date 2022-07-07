<?php
include ('../../../tools/functions.php');
checkAllPages();
if (!checkLogin()) {
    header('Location: ../../login');
    exit();
}
//Datenbankverbindung erstellen
$con = getDBConnection();
//Logik
$showForm = true;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $blz = $_POST['blz'];
    $bic = $_POST['bic'];
    $kontoArt = $_POST['kontoArt'];
    $KontoNr = $_POST['kontoNr'];
    $iban = $_POST['iban'];
    $error = false;
    //Prüfen auf vollständige Eingabe
    if (empty($bic) || empty($iban)) {
        echo 'Bitte alle Felder ausfüllen<br>';
        $error = true;
    }
    //Prüfen ob Konto bereits hinterlegt
    if (!$error) {
        $stmt = $con->prepare('SELECT IBAN from Bankverbindung WHERE KId = ?');
        $result = $stmt->execute(array($_COOKIE['user']));
        while ($konto = $stmt->fetch()) {
            if ($konto['IBAN'] === $iban) {
                echo 'Konto mit der IBAN: ' . $iban . ' bereits regestriert.<br>';
                $error = true;
            }
        }
    }
    //Konto hinterlegen
    if (!$error) {
        $stmt = $con->prepare('INSERT INTO Bankverbindung (KId, BIC, IBAN, Aktiv)
                                    VALUES (?, ?, ?, ?)');
        $result = $stmt->execute(array($_COOKIE['user'], $bic, $iban, false));
        if ($result) {
            header('Location: ../../');
            exit();
            echo 'Die Bankverbindung wurde erfolgreich hinterlegt.';
            $showForm = false;
        } else {
            echo 'Es ist ein Fehler aufgetreten<br>';
        }
    }
}
if ($showForm) {
?>


<!DOCTYPE html> 
<html> 
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Bankverbindung hinterlegen</title>
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../../../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../img/favicon_frame1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../img/favicon_frame2.png">
    <link rel="icon" type="image/png" sizes="180x180" href="../../../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../../../img/favicon_frame4.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../../../img/favicon_frame5.png">
    <link rel="stylesheet" href="../../../styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../styles/css/ClashDisplay-Variable.css">
    <link rel="stylesheet" href="../../../styles/css/Navbar-With-Button.css">
    <link rel="stylesheet" href="../../../styles/css/styles.css">  
    </head> 
    <body style="background: rgb(255,246,232); padding-top: 10rem;">
    <?php
    if (checkLoginhtml()) {
        include ('../../../view/header_log.php');
    } else {
        include ('../../../view/header.php');
    }
?>
    <h1 class="text-center mb-4">Bankverbindung hinterlegen</h1>
    <div class="row mb-3">
          <div class="col-lg-4 themed-grid-col"></div>
          <div class="col-lg-4 themed-grid-col">
          <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            
            BIC:<br>
            <input type="text" size="40"  maxlength="11" name="bic"><br><br>

            IBAN:<br>
            <input type="text" size="40" maxlength="30" name="iban"><br><br>
            
            <input type="submit" value="Speichern">
        </form>

        <p>
            Zum <a href="../../"> Konto </a><br>
            Zur <a href="../../../"> Startseite </a><br>

        </p> 
          </div>
          <div class="col-lg-4 themed-grid-col"></div>
    </div>

        


        <?php
}
?>
    <?php include ('../../../view/footer.php'); ?>
    <script src="../styles/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>