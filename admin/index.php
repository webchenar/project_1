<?php include("partials/menu.php"); // database toye menu include shode. ?>

    <div>
    <h1>میز کار</h1>
<?php
if (isset($_SESSION['login']))
    if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }
    ?>

    </div>


<?php include "partials/footer.php"; ?>