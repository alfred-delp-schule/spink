<?php
include ('../tools/functions.php');
checkAllPages();
//Datenbankverbindung erstellen
$con = getDBConnection();
?>
<!DOCTYPE html> 
<html> 
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Marktplatz</title>
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon_frame1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon_frame2.png">
    <link rel="icon" type="image/png" sizes="180x180" href="../../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../../img/favicon_frame4.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../../img/favicon_frame5.png">
    <link rel="stylesheet" href="../../styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/css/ClashDisplay-Variable.css">
    <link rel="stylesheet" href="../../styles/css/Navbar-With-Button.css">
    <link rel="stylesheet" href="../../styles/css/styles.css">     
    </head> 
    <body style="background: rgb(255,246,232); padding-top: 10rem;">
    <?php
if (checkLoginhtml()) {
    include ('../view/header_log.php');
} else {
    include ('../view/header.php');
}
?>
        <h1 class="text-center">Marktplatz</h1>
        <h2 class="p-5">Liste von Aktien</h2>
        <table border="1" class="table">
            <?php
//Liste aller Anteile in einer Tabelle
$stmt = $con->query('SELECT * from Anteil');
$anteile = $stmt->fetchAll();
echo '<tr><th scope="col">AnteilNr</th><th scope="col">Beschreibung</th><th scope="col">Momentaner Wert</th></tr>';
foreach ($anteile as $anteil) {
    $stmt = $con->prepare('SELECT Wert from Wert WHERE AId = ? order by Zeitpunkt DESC');
    $res = $stmt->execute(array($anteil['AId']));
    $wert = $stmt->fetch() ['Wert'];
    echo '<tr>';
    echo '<th scope="row">' . $anteil['AId'] . '</th>';
    echo '<td>' . $anteil['Beschreibung'] . '</td>';
    echo '<td>';
    if ($wert) {
        echo $wert . '</td>';
    } else {
        echo 'Nicht Verfügbar</td>';
    }
    echo '</tr>';
}
?>
        </table>

       <!--  <p>
            <a href="../tools/tools.php">tools</a><br>
            <a href="../">start</a><br>
        </p> -->

        <?php include ('../view/footer.php'); ?>
    </body>
</html>