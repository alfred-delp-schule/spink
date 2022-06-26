<?php

  include('../tools/functions.php');
  checkAllPages();

  if(checkKundeLogin()){
    echo 'Hallo Kunde '.$_COOKIE['user'];
  }
  if(checkProvLogin()){
    echo 'Hallo Unternehmen '.$_COOKIE['prov'];
  }

?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Marktplatz</title>    
</head> 
<body>

<p>
  <a href="../tools/tools.php">test</a><br>
  <a href="../index.html">start</a><br>
</p>


</body>
</html>