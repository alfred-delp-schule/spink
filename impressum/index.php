<?php

    include('../tools/functions.php');
    checkAllPages();
	
    //Datenbankverbindung erstellen
    $con = getDBConnection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPINK - Impressum</title>
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon_frame1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon_frame2.png">
    <link rel="icon" type="image/png" sizes="180x180" href="../img/favicon_frame3.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../img/favicon_frame4.png">
    <link rel="icon" type="image/png" sizes="512x512" href="../img/favicon_frame5.png">
    <link rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/css/ClashDisplay-Variable.css">
    <link rel="stylesheet" href="../styles/css/Navbar-With-Button.css">
    <link rel="stylesheet" href="../styles/css/styles.css">
</head>

<body style="background: rgb(255,246,232); padding-top: 10rem;">
    <?php
            if(checkLoginhtml()){
                include('../view/header_log.php');
            } else {
                include('../view/header.php');
            }
        ?>
    <h1 class="text-center">Impressum</h1>
    <div class="row mb-3">
          <div class="col-lg-4 themed-grid-col"></div>
          <div class="col-lg-4 themed-grid-col">
            Lorem Ipsum Dolor Sit Amet 
          </div>
          <div class="col-lg-4 themed-grid-col"></div>
    </div>

    <?php include('../view/footer.php'); ?>
    <script src="../styles/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>