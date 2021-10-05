<?php include "../config/db_config.php"; ?>

    <html lang="fa-IR">
    <head>
        <title>Admin Login</title>
        <meta charset="UTF-8"
    </head>
    <body>

    <div>
        <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if (isset($_SESSION['no-login-message'])) {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }

        ?>

        <br>
        <br>
    </div>


    <form action="" method="post">
        <label>Username:
            <input type="text" name="username" placeholder="type your username...">
        </label>
        <br>
        <br>
        <label>Password:
            <input type="password" name="password" placeholder="type your password...">
        </label>
        <br>
        <br>
        <input type="submit" name="submit" value="Sign In">

    </form>


    </body>
    </html>

<?php

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $raw_password = md5($_POST['password']);
    $password = mysqli_real_escape_string($conn, $raw_password);
    $sql = "SELECT * FROM tbl_admin WHERE phone='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $last_login_date_time = date("Y-m-d H:i:s");


    if ($count == 1) {
        $_SESSION['login'] = "<div class='success'>شما با موفقیت وارد شدید.</div>";
        $_SESSION['user'] = $username;

        $sql2 = "UPDATE 
                    tbl_admin 
                SET
                    last_login_datetime = '$last_login_date_time'
                WHERE
                    phone = '$username'";

        mysqli_query($conn, $sql2);

        header('location:' . SITEURL . 'admin/');
    } else {
        $_SESSION['login'] = "<div class='error text-center'>نام کاربری یا گذرواژه صحیح نمی‌باشد.</div>";
        header('location:' . SITEURL . 'admin/admin_login.php');
    }


}
?>