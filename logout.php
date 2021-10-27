<?php
    setcookie('fname', null , -5148000);
    setcookie('phone', null , -5148000);
    setcookie("logIn", null, time() - 5148000);
    session_start();
    session_destroy();
    header('location:index.php')
?>