<?php 
session_start();
$pdo = new PDO('mysql:host=rdbms.strato.de;dbname=dbs7102635', 'dbu1528375', 'DieburgIstEineKleinstadt!');
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Registrierung</title>    
</head> 
<body>
 
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
    $name = $_POST['name'];

  
        
    echo 'klappt'<br>;
}
 
if($showFormular) {
?>
 
<form action="?register=1" method="post">

Name:<br>
<input type="" size="40" maxlength="50" name="name"><br><br>

 
<input type="submit" value="Abschicken">
</form>
 
<?php
} //Ende von if($showFormular)
?>
 
</body>
</html>