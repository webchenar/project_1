<?php
    session_start();
    session_destroy();
    setcookie('fname', '', time()-10800);
    setcookie('phone', '', time()-10800);
    header('location:index.php')
?>