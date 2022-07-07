<?php

    include('../tools/functions.php');
    checkAllPages();

    //Datenbankverbindung erstellen
    $con = getDBConnection();

    if(checkLogin()){
    echo 'Hallo Kunde '.$_COOKIE['user'];
    }

?>
<!DOCTYPE html> 
<html> 
    <head>
        <title>Marktplatz</title>    
    </head> 
    <body>

        <h2>Liste von Aktien</h2>
        <table border="1">
            <?php
                //Liste aller Anteile in einer Tabelle
                $stmt = $con->query('SELECT * from Anteil');
                $anteile = $stmt->fetchAll();
                echo '<tr><td>AnteilNr</td><td>Beschreibung</td><td>Momentaner Wert</td></tr>';
                foreach($anteile as $anteil){
                    $stmt = $con->prepare('SELECT Wert from Wert WHERE AId = ? order by Zeitpunkt DESC');
                    $res = $stmt->execute(array($anteil['AId']));
                    $wert = $stmt->fetch()['Wert'];
                    echo '<tr>';
                    echo '<td>'.$anteil['AId'].'</td>';
                    echo '<td>'.$anteil['Beschreibung'].'</td>';
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

        <p>
            <a href="../tools/tools.php">tools</a><br>
            <a href="../">start</a><br>
        </p>


    </body>
</html>