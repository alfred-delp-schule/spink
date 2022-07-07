<?php
function checkAllPages() {
    date_default_timezone_set('Europe/Berlin');
    redirectHTTPS();
    checkLogin();
}
function checkLogin() {
    if (isset($_COOKIE['user'])) {
        refreshLogin();
        return true;
    } else {
        return false;
    }
}
function checkLoginhtml() {
    if (isset($_COOKIE['user'])) {
        return true;
    } else {
        return false;
    }
}
function refreshLogin() {
    setcookie('user', $_COOKIE['user'], time() + 300, '/', 'spink-trade.de', true, true);
}
function redirectHTTPS() {
    if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) {
        $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: ' . $redirect);
        exit();
    }
}
function redirectStart() {
    header('Location: https://spink-trade.de');
    exit();
}
function setLogin($id) {
    setcookie('user', $id, time() + 300, '/', 'spink-trade.de', true, true);
}
function logout() {
    setcookie('user', null, time() + 300, '/', 'spink-trade.de', true, true);
    redirectStart();
}
function getDBConnection() {
    $dbserver = 'rdbms.strato.de';
    $dbname = 'dbs7102635';
    $dbuser = 'dbu1528375';
    $dbpassword = 'DieburgIstEineKleinstadt!';
    $dsn = 'mysql:host=' . $dbserver . ';dbname=' . $dbname;
    $con = new PDO($dsn, $dbuser, $dbpassword);
    return $con;
}
function getUser($id, $con) {
    $stmt = $con->prepare('SELECT * FROM kunde WHERE KId = ?');
    $result = $stmt->execute(array($id));
    $user = $stmt->fetch();
    return $user;
}
/*
    Funktion wertermittlung
    Attribute:
        $AId: einzigartige id der Anteile, welche der Wert ermittelt werden soll

    Funktionsweise:
        - Bei weniger als 5 kauf und verkaufordern bricht die wertermittlung ab
        - Verlgeicht die minimale kaufer/verkaufer zu den werten und sucht maximalsten
        

*/
function wertermittlung($AId) {
    $con = getDBConnection();
    //Get Order Kaufen
    $stmt = $con->prepare('SELECT Wert, Anzahl from Orderbuch WHERE AId = ? and Ask = 1');
    $result = $stmt->execute(array($AId));
    $kaufen = $stmt->fetchAll();
    //Get Order Verkaufen
    $stmt = $con->prepare('SELECT Wert, Anzahl from Orderbuch WHERE AId = ? and Ask = 0');
    $result = $stmt->execute(array($AId));
    $verkaufen = $stmt->fetchAll();
    //Check genügend orders <kaufen>
    if (count($kaufen) < 8 || count($verkaufen) < 5) {
        echo 'weniger 5<br>';
        return false;
    }
    //Variablen erstellen
    $kumKaufen = 0;
    foreach ($kaufen as $kauf) {
        $kumKaufen+= $kauf['Anzahl'];
    }
    $kumVerkaufen = 0;
    $indexKaufen = 0;
    $indexVerkaufen = 0;
    $MaxWert = 0;
    $MaxAnzahl = 0;
    //verkaufen läuft aufwärts
    //kaufen läuft abwärts
    echo 'Logik start<br>';
    //Beginn Wertermittlung
    while ($MaxAnzahl >= $kumVerkaufen && $kumVerkaufen <= $kumKaufen) {
        //Check welche größer
        echo 'Mom Max Wert: ' . $MaxWert . '<br>';
        //verkaufen kleiner
        if ($verkaufen[$indexVerkaufen]['Wert'] < $kaufen[$indexKaufen]['Wert']) {
            //Verkaufen addieren
            do {
                $kumVerkaufen+= $verkaufen[$indexVerkaufen]['Anzahl'];
                $indexVerkaufen++;
            } while ($verkaufen[$indexVerkaufen]['Wert'] == $verkaufen[$indexVerkaufen - 1]['Wert']);
        }
        //verkaufen größer
        else if ($verkaufen[$indexVerkaufen]['Wert'] > $kaufen[$indexKaufen]['Wert']) {
            //kaufen subtrahieren
            do {
                //Immerkäufer nicht abziehen
                if ($kaufen[$indexKaufen]['Wert'] == 0) {
                    $indexKaufen++;
                    continue;
                }
                $kumKaufen-= $kaufen[$indexKaufen]['Anzahl'];
                $indexKaufen++;
            } while ($kaufen[$indexKaufen]['Wert'] == $kaufen[$indexKaufen - 1]['Wert']);
        }
        //verkaufen gleich
        else if ($verkaufen[$indexVerkaufen]['Wert'] == $kaufen[$indexKaufen]['Wert']) {
            //Verkaufen addieren
            do {
                $kumVerkaufen+= $verkaufen[$indexVerkaufen]['Anzahl'];
                $indexVerkaufen++;
            } while ($verkaufen[$indexVerkaufen]['Wert'] == $verkaufen[$indexVerkaufen - 1]['Wert']);
            //kaufen subtrahieren
            do {
                //Immerkäufer nicht abziehen
                if ($kaufen[$indexKaufen]['Wert'] == 0) {
                    $indexKaufen++;
                    continue;
                }
                $kumKaufen-= $kaufen[$indexKaufen]['Anzahl'];
                $indexKaufen++;
            } while ($$kaufen[$indexKaufen]['Wert'] == $kaufen[$indexKaufen - 1]['Wert']);
        }
        //Prüfen auf neues Max
        echo 'index verkaufen: ' . $indexVerkaufen . '<br>index kaufen: ' . $indexKaufen . '<br><br>';
        //verkaufen geringer
        //alter maxwert ist kleiner
        if ($MaxAnzahl <= $kumVerkaufen && $kumVerkaufen <= $kumKaufen) {
            $MaxAnzahl = $kumVerkaufen;
            $MaxWert = $verkaufen[$indexVerkaufen]['Wert'];
        }
        //kaufen geringer
        //alter maxwert ist kleiner
        else if ($kumKaufen < $kumVerkaufen && $MaxAnzahl <= $kumKaufen) {
            $MaxAnzahl = $kumKaufen;
            $MaxWert = $kaufen[$indexKaufen]['Wert'];
        }
    }
    //Wertermittlung abgeschlossen
    return $MaxWert;
}
/*
    Funktion transaktion
    Attribute:
        $aid: einzigartige id der Anteile, welche gehandelt werden soll

    Funktionsweise:
        - Variablen aus der Datenbank abfragen
        - Für jeden händler wird
            käufer:     Der Anteil als Besitz markiert
            verkäufer:  Anteile abgezogen

*/
function transaktion($aid) {
    //Variablen getten
    $con = getDBConnection();
    $stmt = $con->prepare('SELECT Wert from Wert WHERE AId = ? ORDER BY Wert DESC');
    $result = $stmt->execute(array($aid));
    $wert = $stmt->fetch() ['Wert'];
    $stmt = $con->prepare('SELECT * from Orderbuch WHERE AId = ?');
    $result = $stmt->execute(array($aid));
    $handler = $stmt->fetchAll();
    //Transaktion Durchführen für jeden händler
    foreach ($handler as $hand) {
        //Check ob bereits besitz vorhanden
        $checkBesitz = $con->prepare('SELECT Anzahl from AnteilsBesitz WHERE AId = ? AND KId = ?');
        $abwandeln = $con->prepare('UPDATE AnteilsBesitz SET Anzahl = ? WHERE AId = ? AND KId = ?');
        $res = $checkBesitz->execute(array($aid, $hand['KId']));
        $momAnzahl = $checkBesitz->fetch() ['Anzahl'];
        if ($momAnzahl) {
            if ($hand['Ask']) {
                $momAnzahl+= $hand['Anzahl'];
            } else {
                $momAnzahl-= $hand['Anzahl'];
            }
            if ($momAnzahl >= 0) {
                $abwandeln->execute(array($momAnzahl, $aid, $hand['KId']));
            }
            //ansonsten einfügen
            
        } else {
            //SQL Befehle Vorbereiten
            $kaufen = $con->prepare('INSERT INTO AnteilsBesitz (AId, KId, KaufWert, Anzahl)
                                        VALUES (?, ?, ?, ?)');
            //Käufer
            $res = $kaufen->execute(array($aid, $hand['KId'], $wert, $hand['Anzahl']));
        }
    }
    //Orderbuch löschen und leere besitzer
    $stmt = $con->prepare('DELETE from Orderbuch WHERE AId = ?');
    $res = $stmt->execute(array($aid));
    $stmt = $con->prepare('DELETE from AnteilsBesitz WHERE AId = ? AND Anzahl = 0');
    $res = $stmt->execute(array($aid));
}
?>