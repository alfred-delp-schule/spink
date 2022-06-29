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
            <h2>
                Nützliche Links
            </h2>

            <a href='anteil-erstellen.php'>Anteil erstellen</a><br>
            <a href='bankverbindung-erstellen.php'>Bankverbindung hinterlegen</a><br>
            <a href='logout.php'>ausloggen</a><br>
            <a href='../public/marktplatz.php'>Marktplatz</a><br>
        </div>


        <div>
            <h2>
                Bankdaten
            </h2>
            <ul>    
                <?php
                    $stmt = $con->prepare('SELECT * from Bankverbindung WHERE PId = ?');
                    $result = $stmt->execute(array($_COOKIE['prov']));
                    $index = 1;
                    while($res = $stmt->fetch()){
                        echo '<li>'.$index.' | | '.$res['BLZ'].' | | '.
                        $res['BIC'].' | | '.$res['KontoArt'].' | | '.$res['KontoNr'].' | | '.$res['IBAN'].
                        ' | | ';
                        if($res['Aktiv']){
                            echo 'Aktiv</li>';
                        } else {
                            echo 'Inaktiv</li>';
                        }
                        $index++;
                    }
                ?>
            </ul>
        </div>

    </body>
</html>