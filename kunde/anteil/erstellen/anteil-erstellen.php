<?php
include('../../../tools/functions.php');
checkAllPages();
$showForm = true;

//funktions zu benutzen
function pre_r($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}



error_reporting(E_ALL);
ini_set('display_errors', 1);



$servername = "dbms.strato.de";
$username = "dbu1528375";
$password = "DieburgIstEineKleinstadt!";

try {
  $conn = new PDO('mysql:host=rdbms.strato.de;dbname=dbs7102635', 'dbu1528375', 'DieburgIstEineKleinstadt!');
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Anteil erstellen</title>
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

<div class="row mb-3">
          <div class="col-lg-4 themed-grid-col"></div>
          <div class="col-lg-4 themed-grid-col">
            <h1 class="text-center mb-4">Anteil erstellen</h1>
            
    <h4>Change 14</h4>

    <!--Hier wird ein Form erstellt -->

    <section>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"></form>
        <label>AId:</label>
          <br><input type="int" name="AId"></br>
        <label>Anzahl:</label>
          <br><input type="int" name="Anzahl"></br>
        <label>Beschreibung:</label>
          <br><input type="text" name="Beschreibung"></br>
        <div>
          <br><input type="submit" name="eintragen" value="submit"></br>
        </div>
      </form>
    </section>
          </div>
          <div class="col-lg-4 themed-grid-col"></div>
    </div>
    <?php include('../../../view/footer.php'); ?>
    <script src="../../../styles/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>


<?php

//Anteil Daten aus dem Form verarbeiten
  //if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $Aid = $_POST['AId'];
    $Anzahl = $_POST['Anzahl'];
    $Beschreibung = $_POST['Beschreibung'];
    $PId = $_COOKIE['user'];

    echo $_POST['AId'];


  
    echo "$Aid";
    echo "$Anzahl";
    echo "$Beschreibung";
    echo "$PId";
 // }

?>
  

<?php
pre_r($_POST);

?>
