<?php

  if(isset($_COOKIE['user'])){
    setcookie('user', $user['KId'], time() + 300, $path = '/', $secure = true);
    echo 'Hallo user '.$_COOKIE['user'];
  }

?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Marktplatz</title>    
</head> 
<body>

<p>
  <a href="../tools/tools.php">test</a>
</p>


</body>
</html>