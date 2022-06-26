<?php

    function checkAllPages(){
        date_default_timezone_set('Europe/Berlin');

        redirectHTTPS();

        checkKundeLogin();
        checkProvLogin();
    }

    function checkKundeLogin(){
        if(isset($_COOKIE['user'])){
            refreshKundeLogin();
            return true;
        } else {
            return false;
        }
    }

    function checkProvLogin(){
        if(isset($_COOKIE['prov'])){
            refreshProvLogin();
            return true;
        } else {
            return false;
        }
    }

    function refreshKundeLogin(){
        setcookie('user', $_COOKIE['user'], time() + 300, '/', 'spink-trade.de', true, true);
    }

    function refreshProvLogin(){
        setcookie('prov', $_COOKIE['prov'], time() + 300, '/', 'spink-trade.de', true, true);
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

    function setKundeLogin($id){
        setcookie('user', $id, time() + 300, '/', 'spink-trade.de', true, true);
    }

    function setProvLogin($id){
        setcookie('prov', $id, time() + 300, '/', 'spink-trade.de', true, true);
    }

    function logout(){
        if(checkKundeLogin()){
            setcookie('user', null, time() + 300, '/', 'spink-trade.de', true, true);
        }
        if(checkProvLogin()){
            setcookie('prov', null, time() + 300, '/', 'spink-trade.de', true, true);
        }
        redirectStart();
    }

?>