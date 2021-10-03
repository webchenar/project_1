<?php
    setcookie('fname', null , -10800);
    setcookie('phone', null , -10800);
    session_start();
    session_destroy();
    header('location:index.php')
?>