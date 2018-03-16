<?php
    session_start();
    $selection = $_POST['language'];
    $expiration = time() + 365*24*3600; //1 an

    if ($selection == "en" or $selection == "fr"){
        $_SESSION['lang'] = $selection;
        setcookie('lang' , $selection , $expiration );
    } else {
        $_SESSION['lang'] = "en";
        setcookie('lang' , "en" , $expiration );
    }
    //echo $_COOKIE['lang'] . " et " . $_SESSION['lang']; 
?>