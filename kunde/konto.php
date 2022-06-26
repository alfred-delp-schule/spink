<?php

    include('../tools/functions.php');
    checkAllPages();

    //Noch nicht Angemeldet
    if(!checkKundeLogin()){
        redirectLogin();
    }

    //Datenbankverbindung erstellen
    $con = getDBConnection();

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
                <li>Wohnort: <?php echo $user['Ort']; ?></li><br>
                <li>Postleitzahl: <?php echo $user['PLZ']; ?></li><br>
                <li>Straße: <?php echo $user['Straße']; ?></li><br>
                <li>Hausnummer: <?php echo $user['HNr']; ?></li><br>
            </ul>
        </div>

        <div>
            <a href='anteil-kaufen.php'>Anteil kaufen</a><br>
            <a href='bankverbindung-erstellen.php'>Bankverbindung hinterlegen</a><br>
            <a href='logout.php'>ausloggen</a><br>
            <a href='../public/marktplatz.php'>Marktplatz</a><br>
        </div>

    </body>
</html>