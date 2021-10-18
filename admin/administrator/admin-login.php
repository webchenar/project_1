<?php
$website_title = "ورود مدیران";
include "../../config/db_config.php";
include '../partials/header.php';
?>
    <!--insert styles and Links here.-->

    <link href="../styles/login.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
          crossorigin="anonymous"/>
    </head>
    <body>

    <div class="main">
        <?php
        if (!empty($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        if (!empty($_SESSION['no-login-message'])) {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }
        ?>
        <p class="sign">ورود به پنل مدیریت</p>

        <form action="admin-login.php" method="POST" class="form1">

            <input class="un" type="text" name="username"
                   placeholder="نام کاربری خود را وارد کنید">

            <input class="pass" type="password" name="password"
                   placeholder="گذرواژه خود را وارد کنید">

            <input type="submit" name="submit" value="ورود" class="submit">
        </form>

        <!--        #TODO: we need admin password recovery.-->
        <p class="forgot"><a href="#">Forgot Password?</p>

    </div>

    </body>
    </html>

<?php

if (!empty($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $raw_password = md5($_POST['password']);
    $password = mysqli_real_escape_string($conn, $raw_password);
    $sql = "SELECT * FROM tbl_admin WHERE phone='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $last_login_date_time = date("Y-m-d H:i:s");

    if ($count == 1) {
        $_SESSION['login'] = "<div>ورود موفقیت آمیز بود</div>";
        $_SESSION['user'] = $username;

        $sql2 = "UPDATE 
                    tbl_admin 
                SET
                    last_login_datetime = '$last_login_date_time'
                WHERE
                    phone = '$username'";

        mysqli_query($conn, $sql2);

        header('location:' . SITEURL . 'admin/index.php');
    } else {
        $_SESSION['login'] = "<div>ورود ناموفق بود.</div>";
        header('location:' . SITEURL . 'admin/administrator/admin-login.php');
    }
}

?>