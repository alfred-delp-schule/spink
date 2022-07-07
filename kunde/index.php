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
                <li>Vorname: <?php echo $user['Vorname']; ?></li><br>
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

            <a href='anteil/handeln'>Anteil kaufen</a><br>
            <a href='bankverbindung/erstellen/'>Bankverbindung hinterlegen</a><br>
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

        <?php
            $stmt = $con->prepare('SELECT * from AnteilsBesitz WHERE KId = ? order by AId ASC');
            $result = $stmt->execute(array($_COOKIE['user']));
            $anteile = $stmt->fetchAll();
            //if($anteile){
        ?>
        <div>
            <h2>
                Portfolio
            </h2>
            <table border="1">
                <?php
                echo '<tr><td>AnteilNr</td><td>Anzahl</td><td>Momentaner Wert</td></tr>';
                foreach($anteile as $anteil){
                    $stmt = $con->prepare('SELECT Wert from Wert WHERE AId = ? order by Zeitpunkt DESC');
                    $res = $stmt->execute(array($anteil['AId']));
                    $wert = $stmt->fetch()['Wert'];
                    echo '<tr>';
                    echo '<td>'.$anteil['AId'].'</td>';
                    echo '<td>'.$anteil['Anzahl'].'</td>';
                    echo '<td>';
                    if($wert){
                        echo $wert.'</td>';
                    } else {
                        echo 'Nicht Verfügbar</td>';
                    }
                    echo '</tr>';
                }
                ?>
            </table>
        </div>

        <?php
            //}
        ?>
        

    </body>
</html>