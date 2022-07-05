<?php

    include('../tools/functions.php');
    checkAllPages();

    //Datenbankverbindung erstellen
    $con = getDBConnection();

    if(checkLogin()){
    echo 'Hallo Kunde '.$_COOKIE['user'];
    }

?>
<!DOCTYPE html> 
<html> 
    <head>
        <title>Marktplatz</title>    
    </head> 
    <body>

        <p>
            <a href="../tools/tools.php">tools</a><br>
            <a href="../">start</a><br>
        </p>


    </body>
</html>