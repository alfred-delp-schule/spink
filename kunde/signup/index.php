<?php

    include('../../tools/functions.php');
    checkAllPages();

    //Datenbankverbindung erstellen
    $con = getDBConnection();


    //Variablen
    $showForm = true;


    //Logik

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['email'];
        $passwort = $_POST['passwort'];
        $passwort2 = $_POST['passwort2'];
        $name = $_POST['name'];
        $vname = $_POST['vname'];
        $ort = $_POST['ort'];
        $plz = $_POST['plz'];
        $str = $_POST['str'];
        $hnr = $_POST['hnr'];

        $error = false;

        //Prüfen auf vollständige Eingabe
        if(empty($email) || empty($passwort) || empty($name) ||
            empty($vname) || empty($ort) || empty($plz) || empty($str) || empty($hnr)){
                echo 'Bitte alle Felder ausfüllen<br>';
                $error = true;
        }

        //Prüfen ob email bereits registriert
        if(!$error){
            $stmt = $con->prepare('SELECT * FROM kunde WHERE email = ?');
            $result = $stmt->execute(array($email));
            $user = $stmt->fetch();

            if($user !== false){
                echo 'Diese Email ist bereits vergeben<br>';
                $error = true;
            }
        }

        //Prüfen ob Passwort korrekt wiederholt
        if(!$error){
            if($passwort != $passwort2){
                echo 'Passwörter stimmen nicht überein<br>';
                $error = true;
            }
        }

        //Kein Fehler => Registrieren
        if(!$error){
            $pwhash = password_hash($passwort, PASSWORD_ARGON2I);

            $stmt = $con->prepare('INSERT INTO kunde (email, passwort, Ort, PLZ, Straße, HNr, Name, Vorname)
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)');

            $result = $stmt->execute(array($email, $pwhash, $ort, $plz, $str, $hnr, $name, $vname));

            if($result){
                header('Location: ../login');
                exit();
                echo 'Die Registrierung war Erfolgreich.<br>
                        Weiter zum <a href="login.php"> Login </a>';
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Sign Up</title>
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
    <body style="background: rgb(255,246,232); margin-top: 3em;">
    <section>
      <a href="https://spink-trade.de"><img class="user-select-none mx-auto d-block" src="../../img/logo_spink.png" width="120px"></a>
        <h1 class="text-center pb-5">Sign Up</h1>
        <div class="row mb-3">
          <div class="col-lg-4 themed-grid-col"></div>
          <div class="col-lg-4 themed-grid-col">
            <div style="background-color: #fdfdfd;" class="rounded-3">
              <form class="p-4"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                  <div class="mb-3">
                    <label for="InputEmail1" class="form-label">Email Adresse</label>
                    <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="InputPassword1" class="form-label">Passwort</label>
                    <input type="password" class="form-control" id="InputPassword1" name="passwort">
                  </div>
                  <div class="mb-3">
                    <label for="InputPassword2" class="form-label">Passwort wiederholen</label>
                    <input type="password" class="form-control" id="InputPassword2" name="passwort2">
                  </div>
                  <div class="mb-3">
                    <label for="text2" class="form-label">Name</label>
                    <input type="text" class="form-control" id="InputText5" aria-describedby="text2" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="text2" class="form-label">Vorname</label>
                    <input type="text" class="form-control" id="InputText2" aria-describedby="text2" name="vname">
                  </div>
                  <div class="mb-3">
                    <label for="text3" class="form-label">Wohnort</label>
                    <input type="text" class="form-control" id="InputText3" aria-describedby="text3" name="ort">
                  </div>
                  <div class="mb-3">
                    <label for="number1" class="form-label">PLZ</label>
                    <input type="number" class="form-control" id="InputNumber1" aria-describedby="number1" name="plz">
                  </div>
                  <div class="mb-3">
                    <label for="text4" class="form-label">Straße</label>
                    <input type="text" class="form-control" id="InputText4" aria-describedby="text4" name="str">
                  </div>
                  <div class="mb-3">
                    <label for="number2" class="form-label">Hausnummer</label>
                    <input type="number" class="form-control" id="InputNumber2" aria-describedby="number2" name="hnr">
                  </div>
                  <button type="submit" class="btn btn-primary">Sign Up</button>
                  <div class="form-text mt-4">Du hast bereits einen Account? <a href="/kunde/login">Log In</a></div>
                </form>
          </div>
          <div class="col-lg-4 themed-grid-col"></div>
        </div>
        
        </div>
    </section>
        <?php
            }


        ?>
        <?php include('../../view/footer.php'); ?>

    </body>
</html>
