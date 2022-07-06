<?php

    include('../tools/functions.php');
    checkAllPages();

    //Noch nicht Angemeldet
    if(!checkLogin()){
        header('Location: login');
        exit();
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
                <li>email: <?php echo $user['email']; ?></li><br>
                <li>Wohnort: <?php echo $user['Ort']; ?></li><br>
                <li>Postleitzahl: <?php echo $user['PLZ']; ?></li><br>
                <li>Straße: <?php echo $user['Straße']; ?></li><br>
                <li>Hausnummer: <?php echo $user['HNr']; ?></li><br>
            </ul>
        </div>

        <div>
            <h2>
                Nützliche Links
            </h2>

            <a href='anteil/kaufen'>Anteil kaufen</a><br>
            <a href='bankverbindung/handeln'>Bankverbindung hinterlegen</a><br>
            <a href='logout'>ausloggen</a><br>
            <a href='../public'>Marktplatz</a><br>
        </div>

        
        <div>
            <h2>
                Bankdaten
            </h2>
            <ul>    
                <?php
                    $stmt = $con->prepare('SELECT * from Bankverbindung WHERE KId = ?');
                    $result = $stmt->execute(array($_COOKIE['user']));
                    $index = 1;
                    while($res = $stmt->fetch()){
                        echo '<li>'.$index.' | | '.$res['BIC'].' | | '.$res['IBAN'].' | | ';
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