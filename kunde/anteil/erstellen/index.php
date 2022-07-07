<?php

    include('../../../tools/functions.php');
    checkAllPages();
	
	if(!checkLogin()){
        header('Location: ../../login');
        exit();
    }

    //Datenbankverbindung erstellen
    $con = getDBConnection();


    //Variablen
    $showForm = true;


    //Logik

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $kid = $_COOKIE['user'];
        $Anzahl = $_POST['Anzahl'];
        $Beschreibung = $_POST['Beschreibung'];

        $error = false;
	
		//PrÃ¼fen ob Felder ausgefÃ¼llt
		if(empty($Anzahl) || empty($Beschreibung)){
			echo 'Alle Felder ausfÃ¼llen<br>';
			$error = true;
		}

        //Kein Fehler => EinfÃ¼gen
		if(!$error){
            $stmt = $con->prepare('INSERT INTO Anteil (Anzahl, Beschreibung, KId)
                                    VALUES (?, ?, ?)');

            $result = $stmt->execute(array($Anzahl, $Beschreibung, $kid));
			
			if($result){
                header('Location: ../../');
                exit();
                echo 'Der Anteil wurde erfolgreich erstellt. Weiter zum Dashboard';
                $showForm = false;
            } else {
                echo 'Es ist ein Fehler aufgetreten<br>';
            }
			
		}
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anteil erstellen</title> 
</head>
    <h2>Hier kann man einen Anteil erstellen</h2>
    <h4>Change 12</h4>

    <!--Hier wird ein Form erstellt -->

    <section>
      <h4>Neuen Anteil erstellen</h4>
      <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
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