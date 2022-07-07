<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);
    include('../../../tools/functions.php');
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
        header('Location: ../../bankverbindung/erstellen');
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

        if(empty($aid) || empty($anzahl) || empty($bid)){
            $error = true;
            echo 'Bitte alle Felder ausfüllen<br>';
        }

        if(!$error){
            $stmt = $con->prepare('INSERT INTO Orderbuch (AId, KId, Ask, Wert, Anzahl, BId)
                                        VALUES(?, ?, ?, ?, ?, ?)');
            if($ask){
                $result = $stmt->execute(array($aid, $_COOKIE['user'], $ask, $wert, $anzahl, $bid));
            } else {
                $check = $con->prepare('SELECT Anzahl from AnteilsBesitz WHERE AId = ? AND KId = ?');
                $res = $check->execute(array($aid, $_COOKIE['user']));
                $aktien = $check->fetchAll();

                $besitz = 0;
                foreach($aktien as $aktie){
                    $besitz += $aktie['Anzahl'];
                }


                if($besitz >= $anzahl){
                    $result = $stmt->execute(array($aid, $_COOKIE['user'], $ask, $wert, $anzahl, $bid));
                } else {
                    $result = false;
                }

            }

            if($result){
                $aktienWert = wertermittlung($aid);
                echo $aktienWert;
                if($aktienWert != false){
                    $stmt = $con->prepare('INSERT INTO Wert (AId, Wert) VALUES (?, ?)');
                    $res = $stmt->execute(array($aid, $aktienWert));
                    echo $res;
                    
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Handeln</title>
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../../../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../../img/favicon_frame1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../../img/favicon_frame2.png">
    <link rel="icon" type="image/png" sizes="180x180" href="../../../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../../../img/favicon_frame4.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../../../img/favicon_frame5.png">
    <link rel="stylesheet" href="../../../styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../styles/css/ClashDisplay-Variable.css">
    <link rel="stylesheet" href="../../../styles/css/Navbar-With-Button.css">
    <link rel="stylesheet" href="../../../styles/css/styles.css"> 
    </head> 
    <body style="background: rgb(255,246,232); padding-top: 10rem;">
    <?php
            if(checkLoginhtml()){
                include('../../../view/header_log.php');
            } else {
                include('../../../view/header.php');
            }
        ?>
    <h1 class="text-center mb-4">Handeln</h1>
    <div class="row mb-3">
          <div class="col-lg-4 themed-grid-col"></div>
          <div class="col-lg-4 themed-grid-col">
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
          </div>
          <div class="col-lg-4 themed-grid-col"></div>
    </div>
    


    <?php
        }

    ?>
    <?php include('../../../view/footer.php'); ?>
    <script src="../../../styles/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>