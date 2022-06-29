<?php
    //verbinden mit Datenbank
    include('../tools/funktion.php');

    $con = getDBConnection();
    //if($con) check connection fail

    $neuerAnteil = $con->prepare('INSERT INTO Anteil(Aid, Anzahl, Beschreibung, Pid)   ')
    VALUES(001 ,300 ,Das ist die erste Test Aktie die hier erstellt wurde ,0012 );



    //$showForm = true
    //if($showForm){  

?>

<!DOCTYPE html> 
<html> 

<head>

</head>
<body>
    <h2>Das ist ein TEst</h2>
</body>

    
</html>
