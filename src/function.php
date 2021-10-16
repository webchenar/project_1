<?php

class _function{
    
    static function logIn(){

        if (empty($_COOKIE['logIn'])) {
            header('location:logout.php');
        }
        
        if ((empty($_SESSION['phone']) and empty($_SESSION['fname'])) and (empty($_COOKIE['phone']) and empty($_COOKIE['fname']))) {
            header('location:index.php');
        }

    }
}
?>