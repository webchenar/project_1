<?php
if (!isset($_SESSION['user'])) {
    $_SESSION['no-login-message'] = "<div>ابتدا باید وارد شوید</div>";
    header('location:' . SITEURL . 'admin/administrator/admin-login.php');
}

?>
