<?php
$website_title = "صفحه اصلی مدیریت";
include "../config/db_config.php";
include "partials/login-check.php";
include "partials/header.php";

?>
<link href="styles/all.css" rel="stylesheet">

<?php
include "partials/menu.php";
?>


<?php
if (isset($_SESSION['login']))
    if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }
?>


<?php include("partials/footer.php"); ?>
