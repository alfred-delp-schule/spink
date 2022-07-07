<?php
//Errors anzeigen
error_reporting(E_ALL);
ini_set('display_errors', 1);
include ('functions.php');
checkAllPages();
if (!checkLogin()) {
    die('Keine Rechte!<a href="../kunde/login.php">einloggen</a>');
} else if ($_COOKIE['user'] != 16) {
    die('Zu wenig Rechte!<a href="../kunde/login.php">einloggen</a>');
}
echo $_COOKIE['user'] . ' Hallo<br>';
//Datenbankverbindung erstellen
$con = getDBConnection();
?>


<!DOCTYPE html> 
<html> 
  <head>
      <title>Marktplatz</title>    
  </head> 
  <body>

  <p>
    Links<br>
    <a href="tools.php">tools</a><br>
    <a href="../kunde/signup.php">signup</a><br>
    <a href="../kunde/login.php">login</a><br>
    <a href="../kunde/logout.php">logout</a><br>
    <a href="../unternehmen/signup.php">p signup</a><br>
    <a href="../unternehmen/login.php">p login</a><br>
    <a href="../unternehmen/logout.php">p logout</a><br>
    <a href="../index.html">home</a><br>
    <a href="../public/marktplatz.php">markplatz</a><br>
  </p>
  <br><hr><br>

  <p>
    Modus:<br>
    1: Auslesen<br>
    2: Id Auslesen<br>
    3: Id löschen<br>
    4: Tabelle ändern [4, Tabellenummer, ZuÄnderndeID, Spaltennamen, NeuerInhalt]<br>
    5: Bankverbindungen aktivieren<br>
    6: Anteile tools [ Tabelle = 
      1: Wertermittlung input id = aid
      2: Transaktion input id = aid
      ]
    <br>

    Tabelle:<br>
    0: Alle<br>
    1: Kunde<br>
    2: Provider<br>
    3: Anteil<br>
    4: AnteilsBesitz<br>
    5: Orderbuch<br>
    6: Wert<br>
    <br>


  </p>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Modus:<br>
    <input type="number" name="mode"><br><br>
    
    Tabelle:<br>
    <input type="number" name="table"><br><br>

    Input Id:<br>
    <input type="number" name="input"><br><br>

    Spalten Input:<br>
    <input name="name"><br><br>

    Neuer Input:<br>
    <input name="neu"><br><br>

    Zusatz Input:<br>
    <input name="pw"><br><br>
    
    <input type="submit" value="Verarbeiten">
  </form>
  <br><hr><br>

  </body>
</html>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mode = $_POST['mode'];
    $table = $_POST['table'];
    $input = $_POST['input'];
    $name = $_POST['name'];
    $neu = $_POST['neu'];
    $pw = $_POST['pw'];
    echo 'Mode ' . $mode . '<br>table ' . $table . '<br>input id ' . $input . '<br>input ' . $name . '<br>input neu ' . $neu . '<br>';
    if (password_verify($pw, password_hash('pw', PASSWORD_ARGON2I))) {
        //Auslesen der Tabellen
        if ($mode == 1) {
            //Auslesen Tabelle Kunde
            if ($table == 1 || $table == 0) {
                $stmt = $con->query("SELECT * FROM kunde");
                echo 'Kunden: KId email Name Vorname RegDat UpDat Ort PLZ Straße HNr passwort<br>';
                while ($res = $stmt->fetch()) {
                    echo $res['KId'] . ' | | ' . $res['email'] . ' | | ' . $res['Name'] . ' | | ' . $res['Vorname'] . ' | | ' . $res['RegDat'] . ' | | ' . $res['UpDat'] . ' | | ' . $res['Ort'] . ' | | ' . $res['PLZ'] . ' | | ' . $res['Straße'] . ' | | ' . $res['HNr'] . ' | | ' . $res['passwort'] . '<br>';
                }
                echo '<br><br>';
            }
            //Auslesen Tabelle Provider
            if ($table == 2 || $table == 0) {
                $stmt = $con->query("SELECT * FROM provider");
                echo 'Provider: KId email Name RegDat UpDat Ort PLZ Straße HNr passwort<br>';
                while ($res = $stmt->fetch()) {
                    echo $res['PId'] . ' | | ' . $res['email'] . ' | | ' . $res['Name'] . ' | | ' . $res['RegDat'] . ' | | ' . $res['UpDat'] . ' | | ' . $res['Ort'] . ' | | ' . $res['PLZ'] . ' | | ' . $res['Straße'] . ' | | ' . $res['HNr'] . ' | | ' . $res['passwort'] . '<br>';
                }
                echo '<br><br>';
            }
            //Auslesen Tabelle Anteile
            if ($table == 3 || $table == 0) {
                $stmt = $con->query("SELECT * FROM Anteil");
                echo 'Anteile: Aid Pid Beschreibung Anzahl<br>';
                while ($res = $stmt->fetch()) {
                    echo $res['AId'] . ' | | ' . $res['Beschreibung'] . ' | | ' . $res['Anzahl'] . '<br>';
                }
                echo '<br><br>';
            }
            //Auslesen Tabelle AnteilsBesitz
            if ($table == 4 || $table == 0) {
                $stmt = $con->query("SELECT * FROM AnteilsBesitz");
                echo 'AnteilsBesitz: Aid Uid Kid KaufWert KaufZeitpunkt Anzahl<br>';
                while ($res = $stmt->fetch()) {
                    echo $res['AId'] . ' | | ' . $res['UId'] . ' | | ' . $res['KId'] . ' | | ' . $res['KaufWert'] . ' | | ' . $res['KaufZeitpunkt'] . ' | | ' . $res['Anzahl'] . '<br>';
                }
                echo '<br><br>';
            }
            //Auslesen Tabelle Orderbuch
            if ($table == 5 || $table == 0) {
                $stmt = $con->query("SELECT * FROM Orderbuch");
                echo 'Orderbuch: Aid Kid Anzahl Ask Wert Zeitpunkt BId<br>';
                while ($res = $stmt->fetch()) {
                    echo $res['AId'] . ' | | ' . $res['KId'] . ' | | ' . $res['Anzahl'] . ' | | ' . $res['Ask'] . ' | | ' . $res['Wert'] . ' | | ' . $res['Zeitpunkt'] . ' | | ' . $res['BId'] . '<br>';
                }
                echo '<br><br>';
            }
            //Auslesen Tabelle Wert
            if ($table == 6 || $table == 0) {
                $stmt = $con->query("SELECT * FROM Wert");
                echo 'Wert: Aid Pid Wert Zeitpunkt<br>';
                while ($res = $stmt->fetch()) {
                    echo $res['AId'] . ' | | ' . $res['KId'] . ' | | ' . $res['Wert'] . ' | | ' . $res['Zeitpunkt'] . '<br>';
                }
                echo '<br><br>';
            }
            //Auslesen Tabelle Bankverbindung
            if ($table == 7 || $table == 0) {
                $stmt = $con->query("SELECT * FROM Bankverbindung");
                echo 'Bankverbindung: KId PId BId BLZ BIC KontoArt KontoNr IBAN Aktiv<br>';
                while ($res = $stmt->fetch()) {
                    echo $res['KId'] . ' | | ' . $res['PId'] . ' | | ' . $res['BId'] . ' | | ' . $res['BLZ'] . ' | | ' . $res['BIC'] . ' | | ' . $res['KontoArt'] . ' | | ' . $res['KontoNr'] . ' | | ' . $res['IBAN'] . ' | | ' . $res['Aktiv'] . '<br>';
                }
                echo '<br><br>';
            }
        }
        //Ändern von Inhalten
        if ($mode == 4) {
        }
        //Bankverbindungen aktivieren
        if ($mode == 5) {
            $stmt = $con->prepare('UPDATE Bankverbindung SET Aktiv = true WHERE BId = ?');
            $result = $stmt->execute(array($input));
            $stmt = $con->query("SELECT * FROM Bankverbindung");
            echo 'Bankverbindung: KId PId BId BLZ BIC KontoArt KontoNr IBAN Aktiv<br>';
            while ($res = $stmt->fetch()) {
                echo $res['KId'] . ' | | ' . $res['PId'] . ' | | ' . $res['BId'] . ' | | ' . $res['BLZ'] . ' | | ' . $res['BIC'] . ' | | ' . $res['KontoArt'] . ' | | ' . $res['KontoNr'] . ' | | ' . $res['IBAN'] . ' | | ' . $res['Aktiv'] . '<br>';
            }
            echo '<br><br>';
        }
        //Anteile tools
        if ($mode == 6) {
            if ($table == 1) {
                $wert = wertermittlung($input);
                echo 'Der Wert ist ' . $wert;
                $stmt = $con->query("SELECT * FROM Wert");
                echo '<br>Wert: Aid Pid Wert Zeitpunkt<br>';
                while ($res = $stmt->fetch()) {
                    echo $res['AId'] . ' | | ' . $res['KId'] . ' | | ' . $res['Wert'] . ' | | ' . $res['Zeitpunkt'] . '<br>';
                    echo '<br><br>';
                }
            }
            if ($table == 2) {
                transaktion($input);
                echo 'Transaktion für ' . $input . ' wird durchgeführt';
                $stmt = $con->query("SELECT * FROM AnteilsBesitz");
                echo 'AnteilsBesitz: Aid Uid Kid KaufWert KaufZeitpunkt Anzahl<br>';
                while ($res = $stmt->fetch()) {
                    echo $res['AId'] . ' | | ' . $res['KId'] . ' | | ' . $res['KaufWert'] . ' | | ' . $res['KaufZeitpunkt'] . ' | | ' . $res['Anzahl'] . '<br>';
                }
                echo '<br><br>';
                $stmt = $con->query("SELECT * FROM Orderbuch");
                echo 'Orderbuch: Aid Uid Kid Anzahl Ask maxWert minWert Zeitpunkt<br>';
                while ($res = $stmt->fetch()) {
                    echo $res['AId'] . ' | | ' . $res['KId'] . ' | | ' . $res['Anzahl'] . ' | | ' . $res['Ask'] . ' | | ' . $res['Wert'] . ' | | ' . $res['Zeitpunkt'] . ' | | ' . $res['BId'] . '<br>';
                }
                echo '<br><br>';
            }
        }
        //Weitere modi
        
    }
}
?>


