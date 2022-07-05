<?php

    include('../tools/functions.php');
    checkAllPages();

    if(!checkLogin()){
        header('Location: ../../login');
        exit();
    }

    //Datenbankverbindung erstellen
    $con = getDBConnection();


    $showForm = true;

    //Checken ob Bankverbindungen vorhanden sind
    $stmt = $con->prepare('SELECT * from Bankverbindung WHERE KId = ?');
    $result = $stmt->execute(array($_COOKIE['user']));
    if($stmt->fetch() == false){
        header('Location: https://spink-trade.de/kunde/bankverbindung/erstellen');
        exit();
        echo 'Die Bankverbindung wurde erfolgreich hinterlegt.';
        $showForm = false;
    }



    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $aid = $_POST['aid'];
        $ask = $_POST['ask'];
        $wert = $_POST['wert'];
        $anzahl = $_POST['anzahl'];
        $bid = $_POST['bid'];
        $error = false;

        if(empty($ais) || empty($ask) || empty($wert) || empty($anzahl)){
            $error = true;
            echo 'Bitte alle Felder ausfüllen<br>';
        }

        if(!$error){
            $stmt = $con->prepare('INSERT INTO Orderbuch (KId, Ask, Wert, Anzahl, BId)
                                        VALUES(?, ?, ?, ?, ?)');
            if($ask){
                $result = $stmt->execute(array($_COOKIE['user'], $ask, $wert, $anzahl, $bid));
            } else {
                $check = $con->prepare('SELECT Anzahl from AnteilsBesitz WHERE AId = ? AND KId = ?');
                $res = $check->execute(array($aid, $_COOKIE['user']));
                $aktien = $check->fetchAll();

                $besitz = 0;
                foreach($aktien as $aktie){
                    $besitz += $aktie['Anzahl'];
                }


                if($besitz >= $anzahl){
                    $result = $stmt->execute(array($_COOKIE['user'], $ask, $wert, $anzahl, $bid));
                } else {
                    $result = false;
                }

            }

            if($result){
                include('../../../tools/wertermittlung.php');
                $aktienWert = wertermittlung($aid);
                if($aktienWert != false){
                    $stmt = $con->prepare('INSERT INTO Wert (AId Wert) VALUES (?, ?)');
                    $res = $stmt->execute(array($aid, $aktienWert));
                    
                    transaktion($aid);
                }

                header('Location: ../../');
                exit();
                echo 'Die Order wurde erfolgreich in Auftrag gegeben.';
                $showForm = false;
            } else {
                echo 'Es ist ein Fehler aufgetreten<br>';
            }
        }


    }


    if($showForm){
?>


<!DOCTYPE html> 
<html> 
    <head>
        <title>Handeln</title>    
    </head> 
    <body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Aktien-Id:<br>
        <input type="text" size="40" maxlength="250" name="aid"><br><br>
        

        <input type="radio" id="kaufen" name="ask" value="1">
        <label for="kaufen">Kaufen</label><br>
        <input type="radio" id="verkaufen" name="ask" value="0">
        <label for="verkaufen">Verkaufen</label><br>

        Maximaler Kaufswert bzw. minimaler Verkaufswert in Cent:<br>
        <input type="number" size="40" maxlength="10" name="wert"><br><br>

        Anzahl:<br>
        <input type="number" size="40" maxlength="10" name="anzahl"><br><br>

        Bankkonto:<br>
        <input type="number" size="40" maxlength="10" name="bid"><br><br>
        
        <input type="submit" value="Anmelden">
    </form>

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


    <p>
        Zum <a href="../../signup"> Registrieren </a>
        Zur <a href="../../../"> Startseite </a>

    </p>


    <?php
        }

    ?>

    </body>
</html>