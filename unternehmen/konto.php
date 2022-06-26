<?php

    include('../tools/functions.php');
    checkAllPages();

    //Noch nicht Angemeldet
    if(!checkProvLogin()){
        redirectLogin();
    }

    //Datenbankverbindung erstellen
    $con = getDBConnection();

    //Logik

    $user = getProv($_COOKIE['prov'], $con);
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
                <li>email: <?php echo $user['email']; ?></li><br>
                <li>Firmenstandort: <?php echo $user['Ort']; ?></li><br>
                <li>Postleitzahl: <?php echo $user['PLZ']; ?></li><br>
                <li>Straße: <?php echo $user['Straße']; ?></li><br>
                <li>Hausnummer: <?php echo $user['HNr']; ?></li><br>
            </ul>
        </div>

        <div>
            <a href='anteil-erstellen.php'>Anteil erstellen</a><br>
            <a href='bankverbindung-erstellen.php'>Bankverbindung hinterlegen</a><br>
            <a href='logout.php'>ausloggen</a><br>
            <a href='../public/marktplatz.php'>Marktplatz</a><br>
        </div>

    </body>
</html>