<?php

  if(!isset($_COOKIE['user'])){
    die('Keine Rechte!<a href="../login">einloggen</a>');
  }
  else if($_COOKIE['user'] != 1){
    die('Zu wenig Rechte!<a href="../login">einloggen</a>');
  }


  echo $_COOKIE['user'].' Hallo<br>';
  setcookie('user', $_COOKIE['user'], time()+300, $secure = true);

  $con = new PDO('mysql:host=rdbms.strato.de;dbname=dbs7102635', 'dbu1528375', 'DieburgIstEineKleinstadt!');
  

  //Errors anzeigen
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  
?>


<!DOCTYPE html> 
<html> 
  <head>
      <title>Marktplatz</title>    
  </head> 
  <body>

  <p>
    Links<br>
    <a href="/tools/tools.php">tools</a><br>
    <a href="../signup.php">signup</a><br>
    <a href="../login.php">login</a><br>
    <a href="../logout.php">logout</a><br>
    <a href="../provider-signup.php">p signup</a><br>
    <a href="../provider-login.php">p login</a><br>
    <a href="../index.html">home</a><br>
    <a href="../marketplace.php">markplatz</a><br>
  </p>
  <br><hr><br>

  <p>
    Modus:<br>
    1: Auslesen<br>
    2: Id Auslesen<br>
    3: Id löschen<br>
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

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Modus:<br>
    <input type="number" name="mode"><br><br>
    
    Tabelle:<br>
    <input type="number" name="table"><br><br>

    Input Id:<br>
    <input type="number" name="input"><br><br>

    Zusatz Input:<br>
    <input name="name"><br><br>

    Zusatz Input:<br>
    <input name="pw"><br><br>
    
    <input type="submit" value="Verarbeiten">
  </form>
  <br><hr><br>

  </body>
</html>



<?php

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $mode = $_POST['mode'];
    $table = $_POST['table'];
    $input = $_POST['input'];
    $name = $_POST['name'];
    $pw = $_POST['pw'];

    echo 'Mode '.$mode.'<br>table '.$table.'<br>input id '.$input.'<br>input '.$name.'<br>';


    if(password_verify($pw, password_hash('pw', PASSWORD_ARGON2I))){
      //Auslesen der Tabellen
      if($mode == 1){
        //Auslesen Tabelle Kunde
        if($table == 1 || $table == 0){
          $stmt = $con->query("SELECT * FROM kunde");
          echo 'Kunden: KId email Name Vorname RegDat UpDat Ort PLZ Straße HNr passwort<br>';
          while($res = $stmt->fetch()){
            echo $res['KId'].' | | '.$res['email'].' | | '.$res['Name'].' | | '.$res['Vorname'].' | | '.
            $res['RegDat'].' | | '.$res['UpDat'].' | | '.$res['Ort'].' | | '.$res['PLZ'].' | | '.
            $res['Straße'].' | | '.$res['HNr'].' | | '.$res['passwort'].'<br>';
          }
          echo '<br><br>';
        }

        //Auslesen Tabelle Provider
        if($table == 2 || $table == 0){
          $stmt = $con->query("SELECT * FROM provider");
          echo 'Provider: KId email Name RegDat UpDat Ort PLZ Straße HNr passwort<br>';
          while($res = $stmt->fetch()){
            echo $res['PId'].' | | '.$res['email'].' | | '.$res['Name'].' | | '.$res['RegDat'].' | | '.
            $res['UpDat'].' | | '.$res['Ort'].' | | '.$res['PLZ'].' | | '.$res['Straße'].' | | '.
            $res['HNr'].' | | '.$res['passwort'].'<br>';
          }
          echo '<br><br>';
        }

        //Auslesen Tabelle Anteile
        if($table == 3 || $table == 0){
          $stmt = $con->query("SELECT * FROM Anteil");
          echo 'Anteile: Aid Pid Beschreibung Anzahl<br>';
          while($res = $stmt->fetch()){
            echo $res['Aid'].' | | '.$res['Pid'].' | | '.$res['Beschreibung'].' | | '.$res['Anzahl'].'<br>';
          }
          echo '<br><br>';
        }

        //Auslesen Tabelle AnteilsBesitz
        if($table == 4 || $table == 0){
          $stmt = $con->query("SELECT * FROM AnteilsBesitz");
          echo 'AnteilsBesitz: Aid Uid Kid KaufWert KaufZeitpunkt Anzahl<br>';
          while($res = $stmt->fetch()){
            echo $res['Aid'].' | | '.$res['Uid'].' | | '.$res['Kid'].' | | '.$res['KaufWert'].' | | '.
            $res['KaufZeitpunkt'].' | | '.$res['Anzahl'].'<br>';
          }
          echo '<br><br>';
        }

        //Auslesen Tabelle Orderbuch
        if($table == 5 || $table == 0){
          $stmt = $con->query("SELECT * FROM Orderbuch");
          echo 'Orderbuch: Aid Uid Kid Anzahl Ask maxWert minWert Zeitpunkt<br>';
          while($res = $stmt->fetch()){
            echo $res['Aid'].' | | '.$res['Uid'].' | | '.$res['Kid'].' | | '.$res['Anzahl'].' | | '.
            $res['Ask'].' | | '.$res['maxWert'].' | | '.$res['minWert'].' | | '.$res['Zeitpunkt'].'<br>';
          }
          echo '<br><br>';
        }

        //Auslesen Tabelle Wert
        if($table == 6 || $table == 0){
          $stmt = $con->query("SELECT * FROM Wert");
          echo 'Wert: Aid Pid Wert Zeitpunkt<br>';
          while($res = $stmt->fetch()){
            echo $res['Aid'].' | | '.$res['Pid'].' | | '.$res['Wert'].' | | '.$res['Zeitpunkt'].'<br>';
          }
          echo '<br><br>';
        }
      }

      //Weitere modi

    }
  }



?>

