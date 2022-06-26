<?php
setcookie('user', time() -1000);
 
echo "Logout erfolgreich";
header('Location: https://spink-trade.de')
?>