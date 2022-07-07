<?php


    include('../../tools/functions.php');
    checkAllPages();

    $showForm = true;

    //Bereits Angemeldet
    if(checkLogin()){
        header('Location: ../');
        exit();
    }

    //Datenbankverbindung erstellen
    $con = getDBConnection();

    //Anmeldeformular Verarbeitung
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = $_POST['email'];
        $passwort = $_POST['passwort'];

        //Anmelden
        $stmt = $con->prepare('SELECT * FROM kunde WHERE email = ?');
        $result = $stmt->execute(array($email));
        $user = $stmt->fetch();

        if(password_verify($passwort, $user['passwort'])){
            setLogin($user['KId']);
            header('Location: ../');
            exit();
            echo 'Die Anmeldung war Erfolgreich.<br>
                        Weiter zum <a href="../public/marktplatz.php"> Marktplatz </a>';
            $showForm = false;
        }else {
            echo 'Passwort und oder Email sind Falsch<br>';
        }

    
    }


    if($showForm){
?>

<!DOCTYPE html> 
<html> 
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Log in</title>
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
        <h1 class="text-center pb-5">Log in</h1>
        <div class="row mb-3">
          <div class="col-lg-4 themed-grid-col"></div>
          <div class="col-lg-4 themed-grid-col">
            <div style="background-color: #fdfdfd;" class="rounded-3">
              <form class="p-4" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email Adresse</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Passwort</label>
                    <input type="password" class="form-control" name="passwort" id="exampleInputPassword1">
                  </div>
                  <button type="submit" class="btn btn-primary">Log in</button>
                  <div class="form-text mt-4">Hast du noch keinen Account? <a href="/kunde/signup">Sign Up</a></div>
                </form>
          </div>
          <div class="col-lg-4 themed-grid-col"></div>
        </div>
        
        </div>
    </section>

<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
E-Mail:<br>
<input type="email" size="40" maxlength="250" name="email"><br><br>
 
Dein Passwort:<br>
<input type="password" size="40"  maxlength="250" name="passwort"><br>
 
<input type="submit" value="Anmelden">
</form>


<p>
Zum <a href="../signup"> Registrieren </a>
Zur <a href="../../"> Startseite </a>

</p> -->


<?php
    }

?>

<?php include('../../view/footer.php'); ?>

</body>
</html>
