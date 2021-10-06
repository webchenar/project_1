<?php
// address doroste. vaghti include beshe toye index.php address onja doroste vali inja lazem nist ../../config... beshe.
include "../config/db_config.php";
include "login_check.php";
?>

<html lang="fa-IR">
<head>
    <title>admin Dashboard</title>
    <meta charset="UTF-8"
</head>
<body>
<div class="navbar">
    <ul>
        <li><a href="<?php echo SITEURL . 'admin/index.php/' ?>">main</a></li>
        <li><a href="<?php echo SITEURL . 'admin/manage-admin.php/' ?>">Manage Admin</a></li>
        <li><a href="<?php echo SITEURL . 'admin/logout.php/' ?>">logout</a></li>
    </ul>
</div>
