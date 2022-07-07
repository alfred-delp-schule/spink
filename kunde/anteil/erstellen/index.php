<?php
include ('../../../tools/functions.php');
checkAllPages();
if (!checkLogin()) {
    header('Location: ../../login');
    exit();
}
//Datenbankverbindung erstellen
$con = getDBConnection();
//Variablen
$showForm = true;
//Logik
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kid = $_COOKIE['user'];
    $Anzahl = $_POST['Anzahl'];
    $Beschreibung = $_POST['Beschreibung'];
    $error = false;
    //PrÃ¼fen ob Felder ausgefÃ¼llt
    if (empty($Anzahl) || empty($Beschreibung)) {
        echo 'Alle Felder ausfÃ¼llen<br>';
        $error = true;
    }
    //Kein Fehler => EinfÃ¼gen
    if (!$error) {
        $stmt = $con->prepare('INSERT INTO Anteil (Anzahl, Beschreibung, KId)
                                    VALUES (?, ?, ?)');
        $result = $stmt->execute(array($Anzahl, $Beschreibung, $kid));
        if ($result) {
            header('Location: ../../');
            exit();
            echo 'Der Anteil wurde erfolgreich erstellt. Weiter zum Dashboard';
            $showForm = false;
        } else {
            echo 'Es ist ein Fehler aufgetreten<br>';
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Anteil erstellen</title>
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
    <h1 class="text-center mb-4">Anteil erstellen</h1>
    <div class="row mb-3">
          <div class="col-lg-4 themed-grid-col"></div>
          <div class="col-lg-4 themed-grid-col">
    <h4>Change 12</h4>

    <!--Hier wird ein Form erstellt -->

    <section>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label>AId:</label>
          <br><input type="int" name="AId"></br>
        <label>Anzahl:</label>
          <br><input type="int" name="Anzahl"></br>
        <label>Beschreibung:</label>
          <br><input type="text" name="Beschreibung"></br>
        <div>
          <br><input type="submit" name="eintragen" value="Erstellen"></br>
        </div>
      </form>
    </section>
          </div>
          <div class="col-lg-4 themed-grid-col"></div>
    </div>
    <?php include ('../../../view/footer.php'); ?>
    <script src="../../../styles/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>