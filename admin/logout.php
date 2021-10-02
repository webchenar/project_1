<?php
include "../config/db_config.php";

session_destroy();

header('location: ' . SITEURL . 'admin/admin_login.php');
?>