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
    <meta charset="UTF-8">
    <title>Anteil erstellen</title> 
</head>
    <h2>Hier kann man einen Anteil erstellen</h2>
    <h4>Change 14</h4>

    <!--Hier wird ein Form erstellt -->

    <section>
      <h4>Neuen Anteil erstellen</h4>
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
