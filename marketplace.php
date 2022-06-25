<?php

if(!isset($_COOKIE['user'])) {
    die('Bitte zuerst <a href="login">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_COOKIE['user'];
 
echo "Hallo User: ".$userid;
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Marktplatz</title>    
</head> 
<body>

<p>
  <a href="/tools/tools.php">test</a>
</p>

 

 <a href="logout.php">ausloggen</a>
</body>
</html>