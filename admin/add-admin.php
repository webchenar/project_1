<?php
$website_title = "اضافه کردن مدیر";

include 'partials/menu.php'; ?>

<div>
    <div>
        <h1>اضافه کردن مدیر</h1>
        <br>
        <br>
        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        ?>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Phone:</td>
                    <td>
                        <input type="text" name="phone" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td>
                        <input type="password" name="password" placeholder="">
                    </td>
                </tr>

                <tr>
                    <td>First_name:</td>
                    <td>
                        <input type="text" name="first_name" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>last_name:</td>
                    <td>
                        <input type="text" name="last_name" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>email:</td>
                    <td>
                        <input type="email" name="email" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>cell_phone:</td>
                    <td>
                        <input type="text" name="cell_phone" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>verify:</td>
                    <td>
                        <input type="radio" name="verified" value="1"> تایید
                        <input type="radio" name="verified" value="0"> تعلیق
                    </td>
                </tr>
                <tr>
                    <td>username:</td>
                    <td>
                        <input type="text" name="username" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>access_level</td>
                    <td>
                        <input type="text" name="access_level" placeholder="">

                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include 'partials/footer.php' ?>

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
        header("location:" . SITEURL . 'admin/manage-admin.php');
    } else {
        $_SESSION['add'] = "<div>عملیات ناموفق بود.</div>";
        header("location:" . SITEURL . 'admin/add-admin.php');
    }
}
?>
