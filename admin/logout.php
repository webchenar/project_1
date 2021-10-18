<?php
include "../config/db_config.php";

session_destroy();

header('location: ' . SITEURL . 'admin/administrator/admin-login.php');
?>