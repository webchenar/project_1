<?php
$website_title = "تغییر گذرواژه";
include "../../config/db_config.php";
include "../partials/login-check.php";
include '../partials/header.php';
?>
    <!--insert styles and Links here.-->

<?php
include '../partials/menu.php';
?>


    <div>
        <div>
            <h1>تغییر پسورد</h1>
            <br><br>

            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            ?>

            <form action="update-password.php" method="POST">

                <table>
                    <tr>
                        <td>
                            گذرواژه فعلی:
                        </td>
                        <td>
                            <input type="password" name="current_password">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            گذرواژه جدید:
                        </td>
                        <td>
                            <input type="password" name="new_password">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            تکرار گذرواژه جدید:
                        </td>
                        <td>
                            <input type="password" name="confirm_password">
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit" value="تغییر گذرواژه">
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
                    $_SESSION['change-pwd'] = "<div>گذرواژه با موفقیت تغییر یافت.</div>";
                    header('location:' . SITEURL . 'admin/administrator/manage-admin.php');
                } else {
                    $_SESSION['change-pwd'] = "<div>تغییر گذرواژه ناموفق بود.</div>";
                    header('location:' . SITEURL . 'admin/administrator/manage-admin.php');
                }
            } else {
                $_SESSION['pwd-not-match'] = "<div>گذرواژه فعلی مطابقت ندارد.</div>";
                header('location:' . SITEURL . 'admin/administrator/manage-admin.php');
            }
        } else {
            $_SESSION['user-not-found'] = "<div>کاربر یافت نشد.</div>";
            header('location:' . SITEURL . 'admin/administrator/manage-admin.php');
        }
    }
}

?>

<?php include('../partials/footer.php'); ?>