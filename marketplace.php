<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
 
echo "Hallo User: ".$userid;
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Registrierung</title>    
</head> 
<body>

<p>
  <a href="test.php">test</a>
</p>

 

 <a href="logout">ausloggen</a>
</body>
</html>