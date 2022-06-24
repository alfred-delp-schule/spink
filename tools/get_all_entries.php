<?php

if(!isset($_COOKIE['user'])){
  die('Keine Rechte!');
}

echo $_COOKIE['user'].' Hallo<br>';

$con = new PDO('mysql:host=rdbms.strato.de;dbname=dbs7102635', 'dbu1528375', 'DieburgIstEineKleinstadt!');

//Auslesen Tabelle Kunde
$stmt = $con->query("SELECT * FROM kunde");
echo 'Kunden: KId email Name Vorname RegDat UpDat Ort PLZ Straße HNr passwort<br>';
while($res = $stmt->fetch()){
echo $res['KId'].' | | '.$res['email'].' | | '.$res['Name'].' | | '.$res['Vorname'].' | | '.$res['RegDat'].' | | '.
$res['UpDat'].' | | '.$res['Ort'].' | | '.$res['PLZ'].' | | '.$res['Straße'].' | | '.$res['HNr'].' | | '.
$res['passwort'].'<br>';
}
echo '<br><br>';

//Auslesen Tabelle Provider
$stmt = $con->query("SELECT * FROM provider");
echo 'Provider: KId email Name RegDat UpDat Ort PLZ Straße HNr passwort<br>';
while($res = $stmt->fetch()){
echo $res['PId'].' | | '.$res['email'].' | | '.$res['Name'].' | | '.$res['RegDat'].' | | '.
$res['UpDat'].' | | '.$res['Ort'].' | | '.$res['PLZ'].' | | '.$res['Straße'].' | | '.$res['HNr'].' | | '.
$res['passwort'].'<br>';
}
echo '<br><br>';




/*

//Errors anzeigen
error_reporting(E_ALL);
ini_set('display_errors', 1);
*/
?>



