<?php

    function checkAllPages(){
        date_default_timezone_set('Europe/Berlin');

        redirectHTTPS();

        checkLogin();
    }

    function checkLogin(){
        if(isset($_COOKIE['user'])){
            refreshLogin();
            return true;
        } else {
            return false;
        }
    }

    function refreshLogin(){
        setcookie('user', $_COOKIE['user'], time() + 300, '/', 'spink-trade.de', true, true);
    }

    function redirectHTTPS(){
        if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || 
                $_SERVER['HTTPS'] == 1) ||  
                isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&   
                $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')){
            $redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $redirect);
            exit();
        }
    }

    function redirectStart(){
        header('Location: https://spink-trade.de');
        exit();
    }

    function setLogin($id){
        setcookie('user', $id, time() + 300, '/', 'spink-trade.de', true, true);
    }

    function logout(){
        setcookie('user', null, time() + 300, '/', 'spink-trade.de', true, true);
        
        redirectStart();
    }

    function getDBConnection(){
        $dbserver = 'rdbms.strato.de';
        $dbname = 'dbs7102635';
        $dbuser = 'dbu1528375';
        $dbpassword = 'DieburgIstEineKleinstadt!';

        $dsn = 'mysql:host='.$dbserver.';dbname='.$dbname;

        $con = new PDO($dsn, $dbuser, $dbpassword);
        return $con;
    }

    function getUser($id, $con){
        $stmt = $con->prepare('SELECT * FROM kunde WHERE KId = ?');
        $result = $stmt->execute(array($id));
        $user = $stmt->fetch();
        return $user;
    }

?>