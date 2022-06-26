<?php

    $dbserver = 'rdbms.strato.de';
    $dbname = 'dbs7102635';
    $dbuser = 'dbu1528375';
    $dbpassword = 'DieburgIstEineKleinstadt!';

    $dsn = 'mysql:host='.$dbserver.';dbname='.$dbname;

    $con = new PDO($dsn, $dbuser, $dbpassword);

    $showForm = true;
?>

<!DOCTYPE html> 
<html> 
<head>
  <title>Registrierung Unternehmen</title>    
</head> 
<body>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['email'];
        $passwort = $_POST['passwort'];
        $passwort2 = $_POST['passwort2'];
        $name = $_POST['name'];
        $ort = $_POST['ort'];
        $plz = $_POST['plz'];
        $str = $_POST['str'];
        $hnr = $_POST['hnr'];

        $error = false;

        //Prüfen auf vollständige Eingabe
        if(empty($email) || empty($passwort) || empty($name) ||
            empty($ort) || empty($plz) || empty($str) || empty($hnr)){
                echo 'Bitte alle Felder ausfüllen<br>';
                $error = true;
        }

        //Prüfen ob email bereits registriert
        if(!$error){
            $stmt = $con->prepare('SELECT * FROM provider WHERE email = ?');
            $result = $stmt->execute(array($email));
            $user = $stmt->fetch();

            if($user !== false){
                echo 'Diese Email ist bereits vergeben<br>';
                $error = true;
            }
        }

        //Prüfen ob Passwort korrekt wiederholt
        if(!$error){
            if($passwort != $passwort2){
                echo 'Passwörter stimmen nicht überein<br>';
                $error = true;
            }
        }

        //Kein Fehler => Registrieren
        if(!$error){
            $pwhash = password_hash($passwort, PASSWORD_ARGON2I);

            $stmt = $con->prepare('INSERT INTO provider (email, passwort, Ort, PLZ, Straße, HNr, Name)
                                    VALUES (?, ?, ?, ?, ?, ?, ?)');

            $result = $stmt->execute(array($email, $pwhash, $ort, $plz, $str, $hnr, $name));

            if($result){
                echo 'Die Registrierung war Erfolgreich.<br>
                        Weiter zum <a href="provider-login.php"> Login </a>';
                $showForm = false;
            } else {
                echo 'Es ist ein Fehler aufgetreten<br>';
            }
        }
    }


    if($showForm){
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
Passwort wiederholen:<br>
<input type="password" size="40" maxlength="250" name="passwort2"><br><br>

Name:<br>
<input type="text" size="40" maxlength="50" name="name"><br><br>

Wohnort:<br>
<input type="text" size="40" maxlength="50" name="ort"><br><br>

PLZ:<br>
<input type="number" size="40" maxlength="11" name="plz"><br><br>

Straße:<br>
<input type="text" size="40" maxlength="250" name="str"><br><br>

Hausnummer:<br>
<input type="number" size="40" maxlength="4" name="hnr"><br><br>
 
<input type="submit" value="Abschicken">
</form>


<p>
Zum <a href="login.php"> Login </a>
Zur <a href="../index.html"> Startseite </a>


</p>


<?php
    }



    


?>

</body>
</html>