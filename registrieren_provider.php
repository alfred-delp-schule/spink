<?php 
session_start();
$pdo = new PDO('mysql:host=rdbms.strato.de;dbname=dbs7102635', 'dbu1528375', 'DieburgIstEineKleinstadt!');
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Registrierung</title>    
</head> 
<body>
 
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
    $error = false;
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['passwort2'];
    $ort = $_POST['ort'];
    $plz = $_POST['plz'];
    $str = $_POST['str'];
    $hnr = $_POST['hnr'];
    $name = $_POST['name'];

  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
        $error = true;
    }     
    if(strlen($passwort) == 0) {
        echo 'Bitte ein Passwort angeben<br>';
        $error = true;
    }
    if($passwort != $passwort2) {
        echo 'Die Passwörter müssen übereinstimmen<br>';
        $error = true;
    }
    
    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) { 
        $statement = $pdo->prepare("SELECT * FROM provider WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();
        
        if($user !== false) {
            echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
            $error = true;
        }    
    }
    
    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {    
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
        
        $statement = $pdo->prepare("INSERT INTO kunde (email, passwort, Ort, PLZ, Straße, HNr, Name) VALUES (:email, :passwort, :ort, :plz, :str, :hnr, :name)");
        $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash, 'ort' => $ort, 'plz' => $plz, 'str' => $str, 'hnr' => $hnr, 'name' => $name));
        
        if($result) {        
            echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
            $showFormular = false;
        } else {
            echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
        }
    } 
}
 
if($showFormular) {
?>
 
<form action="?register=1" method="post">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
Passwort wiederholen:<br>
<input type="password" size="40" maxlength="250" name="passwort2"><br><br>

Name:<br>
<input type="" size="40" maxlength="50" name="name"><br><br>

Wohnort:<br>
<input type="" size="40" maxlength="50" name="ort"><br><br>

PLZ:<br>
<input type="" size="10" maxlength="11" name="plz"><br><br>

Straße:<br>
<input type="" size="40" maxlength="250" name="str"><br><br>

Hausnummer:<br>
<input type="" size="3" maxlength="4" name="hnr"><br><br>
 
<input type="submit" value="Abschicken">
</form>
 
<?php
} //Ende von if($showFormular)
?>
 
</body>
</html>