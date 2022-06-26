<?php

    include('../tools/functions.php');
    checkAllPages();

    $showForm = true;

    //Beretis Angemeldet
    if(checkProvLogin()){
        redirectKonto();
    }

    //Datenbankverbindung erstellen
    $con = getDBConnection();

    //Anmeldefromular Verarbeitung
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['email'];
        $passwort = $_POST['passwort'];

        //Anmelden
        $stmt = $con->prepare('SELECT * FROM provider WHERE email = ?');
        $result = $stmt->execute(array($email));
        $prov = $stmt->fetch();

        if(password_verify($passwort, $prov['passwort'])){
            setProvLogin($prov['PId']);
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
        <title>Anmeldung Unternehmen</title>    
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
            Zum <a href="provider-signup.php"> Registrieren </a><br>
            Zur <a href="../index.html"> Startseite </a><br>

        </p>


        <?php
            }

        ?>

    </body>
</html>