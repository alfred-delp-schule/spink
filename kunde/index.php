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


    if(checkLoginhtml()){
		$user = getUser($_COOKIE['user'], $con);
		echo '<p class="px-5 fs-1 text-center">Hallo '.$user['Vorname'].'!</p>';
    }   
?>


<!DOCTYPE html> 
<html> 
    <head>
    <title>SPINK - Konto</title>
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../img/favicon_frame1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../img/favicon_frame2.png">
    <link rel="icon" type="image/png" sizes="180x180" href="../../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../../img/favicon_frame4.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../../img/favicon_frame5.png">
    <link rel="stylesheet" href="../../styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../styles/css/ClashDisplay-Variable.css">
    <link rel="stylesheet" href="../../styles/css/Navbar-With-Button.css">
    <link rel="stylesheet" href="../../styles/css/styles.css">  
    </head> 
    <body style="background: rgb(255,246,232); padding-top: 10rem;">

    <?php
		if(checkLoginhtml()){
			include('../view/header_log.php');
		} else {
			include('../view/header.php');
		}
	?>

<div class="row mb-3">
          <div class="col-lg-4 themed-grid-col"></div>
          <div class="col-lg-4 themed-grid-col">
          <div class="p-3">
            <h1>
                Konto
            </h1>

            <ul>
                <li>Name: <?php echo $user['Name']; ?></li><br>
                <li>Vorname: <?php echo $user['Vorname']; ?></li><br>
                <li>E-Mail Adresse: <?php echo $user['email']; ?></li><br>
                <li>Wohnort: <?php echo $user['Ort']; ?></li><br>
                <li>Postleitzahl: <?php echo $user['PLZ']; ?></li><br>
                <li>Straße: <?php echo $user['Straße']; ?></li><br>
                <li>Hausnummer: <?php echo $user['HNr']; ?></li><br>
            </ul>
        </div>

        <div class="p-5">
            <h2>
                Nützliche Links
            </h2>

            <a href='anteil/handeln'>Anteil kaufen</a><br>
            <a href='bankverbindung/erstellen/'>Bankverbindung hinterlegen</a><br>
            <a href='logout'>ausloggen</a><br>
            <a href='../public'>Marktplatz</a><br>
        </div>

        
        <div class="p-5">
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
        <div class="p-5">
            <h2>
                Portfolio
            </h2>
            <table class="table" border="1">
                <?php
                echo '<tr><th scope="col">AnteilNr</th><th scope="col">Anzahl</th><th scope="col">Momentaner Wert</th></tr>';
                foreach($anteile as $anteil){
                    $stmt = $con->prepare('SELECT Wert from Wert WHERE AId = ? order by Zeitpunkt DESC');
                    $res = $stmt->execute(array($anteil['AId']));
                    $wert = $stmt->fetch()['Wert'];
                    echo '<tr>';
                    echo '<th scope="row">'.$anteil['AId'].'</td>';
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
          </div>
        <div class="col-lg-4 themed-grid-col"></div>

        

        <?php
            //}
        ?>
        
        <?php include('../view/footer.php'); ?>
    </body>
</html>