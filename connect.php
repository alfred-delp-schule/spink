
<?php
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