<?php
$website_title = "صفحه اصلی مدیریت";
include("partials/menu.php");

?>
<?php
if (isset($_SESSION['login']))
    if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }
?>


   

<?php include("partials/footer.php"); ?>
