<?php
include('../config/db_config.php');

$id = $_GET['id'];

$sql = "DELETE FROM tbl_admin WHERE id=$id";

$result = mysqli_query($conn, $sql);

if ($result == true) {
    $_SESSION['delete'] = "<div'>مدیر حذف شد</div>";
    header('location:' . SITEURL . 'admin/manage-admin.php');
} else {
    $_SESSION['delete'] = "<div>عملیات حذف مدیر ناموفق بود. مجددا تلاش کنید.</div>";
    header('location:' . SITEURL . 'admin/manage-admin.php');
}

?>