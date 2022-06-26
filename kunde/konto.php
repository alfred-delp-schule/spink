<?php

    include('../tools/functions.php');
    checkAllPages();

    //Noch nicht Angemeldet
    checkLoginRedirectLogin();

    //Datenbankverbindung erstellen
    $con = getDBConnection();

    //Variablen
    $showForm = true;


    //Logik

    $user = getUser($_COOKIE['user'], $con);
?>


<!DOCTYPE html> 
<html> 
    <head>
        <title>Konto</title>    
    </head> 
    <body>

        <div>
            <h1>
                Kontodaten
            </h1>

            <ul>
                <li>Name: <?php echo $user['Name']; ?></li><br>
                <li>Vorname: <?php echo $user['Vorname']; ?></li><br>
                <li>email: <?php echo $user['email']; ?></li><br>
                <li>Regestrierungsdatum: <?php echo getdate($user['RegDat']); ?></li><br>
                <li>Wohnort: <?php echo $user['Ort']; ?></li><br>
                <li>Postleitzahl: <?php echo $user['PLZ']; ?></li><br>
                <li>Straße: <?php echo $user['Straße']; ?></li><br>
                <li>Hausnummer: <?php echo $user['HNr']; ?></li><br>
            </ul>
        </div>

    </body>
</html>