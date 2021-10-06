<?php include('partials/menu.php'); ?>

    <div class="main-content">
        <div class="wrapper">
            <h1>تغییر پسورد</h1>
            <br><br>

            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            ?>

            <form action="" method="POST">

                <table style="width:100%;border-bottom:1px solid black;text-align: left; padding: 1%;">
                    <tr>
                        <td>current_password</td>
                        <td>
                            <input type="password" name="current_password" placeholder="current_password">
                        </td>
                    </tr>

                    <tr>
                        <td>new_password</td>
                        <td>
                            <input type="password" name="new_password" placeholder="new_password">
                        </td>
                    </tr>

                    <tr>
                        <td>confirm_password</td>
                        <td>
                            <input type="password" name="confirm_password" placeholder="confirm_password">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit" value="change password">
                        </td>
                    </tr>

                </table>

            </form>

        </div>
    </div>

<?php
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $current_password = md5($_POST['current_password']);
    $new_password = md5($_POST['new_password']);
    $confirm_password = md5($_POST['confirm_password']);


    $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";

    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $count = mysqli_num_rows($res);
        if ($count == 1) {

            if ($new_password == $confirm_password) {
                $sql2 = "UPDATE tbl_admin SET 
                                password='$new_password' 
                                WHERE id=$id
                            ";

                $res2 = mysqli_query($conn, $sql2);

                if ($res2 == true) {
                    $_SESSION['change-pwd'] = "<div>پسورد با موفقیت تغییر یافت.</div>";
                    header('location:' . SITEURL . 'admin/manage-admin.php');
                } else {
                    $_SESSION['change-pwd'] = "<div>عملیات ناموفق بود.</div>";
                    header('location:' . SITEURL . 'admin/manage-admin.php');
                }
            } else {
                $_SESSION['pwd-not-match'] = "<div>پسورد مطابقت ندارد.</div>";
                header('location:' . SITEURL . 'admin/manage-admin.php');
            }
        } else {
            $_SESSION['user-not-found'] = "<div>کاربر یافت نشد.</div>";
            header('location:' . SITEURL . 'admin/manage-admin.php');
        }
    }
}

?>


<?php include('partials/footer.php'); ?>