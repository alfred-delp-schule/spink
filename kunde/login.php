<?php


    include('../tools/functions.php');
    checkAllPages();

    $dbserver = 'rdbms.strato.de';
    $dbname = 'dbs7102635';
    $dbuser = 'dbu1528375';
    $dbpassword = 'DieburgIstEineKleinstadt!';

    $dsn = 'mysql:host='.$dbserver.';dbname='.$dbname;

    $con = new PDO($dsn, $dbuser, $dbpassword);

    $showForm = true;

    //Bereits Angemeldet
    if(checkKundeLogin()){
        $showForm = false;
        echo 'Sie sind bereits angemeldet.<br>
                    Weiter zum <a href="../public/marktplatz.php"> Marktplatz </a>';
    }

    //Anmeldeformular Verarbeitung
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['email'];
        $passwort = $_POST['passwort'];

        //Anmelden
        $stmt = $con->prepare('SELECT * FROM kunde WHERE email = ?');
        $result = $stmt->execute(array($email));
        $user = $stmt->fetch();

        if(password_verify($passwort, $user['passwort'])){
            setKundeLogin($user['KId']);
            echo 'Die Anmeldung war Erfolgreich.<br>
                        Weiter zum <a href="../public/marktplatz.php"> Marktplatz </a>';
            $showForm = false;

        }else {
            echo 'Passwort und oder Email sind Falsch<br>';
        }
    
    }


    if($showForm){
?>

<!DOCTYPE html> 
<html> 
<head>
  <title>Anmeldung</title>    
</head> 
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
<input type="submit" value="Anmelden">
</form>


<p>
Zum <a href="signup.php"> Registrieren </a>
Zur <a href="../index.html"> Startseite </a>

</p>


<?php
    }

?>

</body>
</html>
