<?php
$website_title = "اضافه کردن مدیر";
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
        <h1>اضافه کردن مدیر</h1>
        <br>
        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>
        <form action="add-admin.php" method="POST">
            <table>
                <tr>
                    <td>
                        تلفن:
                    </td>
                    <td>
                        <input type="text" name="phone">
                    </td>
                </tr>
                <tr>
                    <td>
                        گذرواژه:
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>

                <tr>
                    <td>
                        نام:
                    </td>
                    <td>
                        <input type="text" name="first_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        نام خانوادگی:
                    </td>
                    <td>
                        <input type="text" name="last_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        ایمیل:
                    </td>
                    <td>
                        <input type="email" name="email">
                    </td>
                </tr>
                <tr>
                    <td>
                        تلفن ثابت:
                    </td>
                    <td>
                        <input type="text" name="cell_phone">
                    </td>
                </tr>
                <tr>
                    <td>
                        تایید توسط مدیر:
                    </td>
                    <td>
                        <input type="radio" name="verified" value="1"> تایید
                        <input type="radio" name="verified" value="0"> تعلیق
                    </td>
                </tr>
                <tr>
                    <td>
                        نام کاربری:
                    </td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        سطح دسترسی:
                    </td>
                    <td>
                        <input type="text" name="access_level">

                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Add Admin">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>


<?php
if (isset($_POST['submit'])) {
    $phone = $_POST['phone'];
    $password = md5($_POST['password']);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $cell_phone = $_POST['cell_phone'];
    $verified = $_POST['verified'];
    $username = $_POST['username'];
    $access_level = $_POST['access_level'];
    $last_login_date_time = date("Y-m-d H:i:s");


    $sql = "INSERT INTO tbl_admin
    (phone,PASSWORD,first_name,last_name,email,cell_phone,verified,
    username,access_level,last_login_datetime)
VALUES
    ('$phone', '$password', '$first_name', '$last_name', '$email','$cell_phone','$verified',
    '$username', '$access_level', '$last_login_date_time')";


    $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

    if ($result == TRUE) {
        $_SESSION['add'] = "<div>مدیر با موفقیت اضافه شد.</div>";
        header("location:" . SITEURL . 'admin/administrator/manage-admin.php');
    } else {
        $_SESSION['add'] = "<div>عملیات ناموفق بود.</div>";
        header("location:" . SITEURL . 'admin/administrator/add-admin.php');
    }
}
?>
<?php include("../partials/footer.php"); ?>
