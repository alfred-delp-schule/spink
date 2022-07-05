<?php

    include('../tools/functions.php');
    checkAllPages();

    if(!checkLogin()){
        header('Location: ../../login');
        exit();
    }

    //Datenbankverbindung erstellen
    $con = getDBConnection();

    //Logik

    $showForm = true;


    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $blz = $_POST['blz'];
        $bic = $_POST['bic'];
        $kontoArt = $_POST['kontoArt'];
        $KontoNr = $_POST['kontoNr'];
        $iban = $_POST['iban'];

        $error = false;

        //Prüfen auf vollständige Eingabe
        if(empty($blz) || empty($bic) || empty($kontoArt) || empty($KontoNr) || empty($iban)){
            echo 'Bitte alle Felder ausfüllen<br>';
            $error = true;
        }

        //Prüfen ob Konto bereits hinterlegt
        if(!$error){
            $stmt = $con->prepare('SELECT IBAN from Bankverbindung WHERE KId = ?');
            $result = $stmt->execute(array($_COOKIE['user']));

            while($konto = $stmt->fetch()){
                if($konto['IBAN'] === $iban){
                    echo 'Konto mit der IBAN: '.$iban.' bereits regestriert.<br>';
                    $error = true;
                }
            }
        }

        //Konto hinterlegen
        if(!$error){
            $stmt = $con->prepare('INSERT INTO Bankverbindung (KId, BIC, IBAN, Aktiv)
                                    VALUES (?, ?, ?, ?, ?, ?, ?)');
            $result = $stmt->execute(array($_COOKIE['user'], $bic, $iban, false));

            if($result){
                header('Location: ../../');
                exit();
                echo 'Die Bankverbindung wurde erfolgreich hinterlegt.';
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
        <title>Bankverbindung hinterlegen</title>    
    </head> 
    <body>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            
            BIC:<br>
            <input type="text" size="40"  maxlength="11" name="bic"><br><br>

            IBAN:<br>
            <input type="text" size="40" maxlength="30" name="iban"><br><br>
            
            <input type="submit" value="Speichern">
        </form>

        <p>
            Zum <a href="../../"> Konto </a><br>
            Zur <a href="../../../"> Startseite </a><br>

        </p>


        <?php
            }

        ?>

    </body>
</html>