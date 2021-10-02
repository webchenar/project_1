<?php
if (!isset($_SESSION['user'])) {
    $_SESSION['no-login-message'] = "<div>ابتدا به پنل مدیریت وارد شوید.</div>";
    header('location:' . SITEURL . 'admin/admin_login.php');
}
?>
