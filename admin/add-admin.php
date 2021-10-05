<?php include 'partials/menu.php'; ?>

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
                        <input type="text" name="full_name" placeholder="">
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
                        <input type="text" name="full_name" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>last_name:</td>
                    <td>
                        <input type="text" name="password" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>email:</td>
                    <td>
                        <input type="email" name="full_name" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>cell_phone:</td>
                    <td>
                        <input type="text" name="password" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>verify:</td>
                    <td>
                        <input type="radio" name="active" value="Yes"> تایید
                        <input type="radio" name="active" value="No"> تعلیق
                    </td>
                </tr>
                <tr>
                    <td>username:</td>
                    <td>
                        <input type="text" name="password" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>access_level</td>
                    <td>
                        <input type="text" name="password" placeholder="">

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
    $password = $_POST['password'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $cell_phone = $_POST['cell_phone'];
    $verified = $_POST['verified'];
    $username = $_POST['username'];
    $access_level = $_POST['access_level'];
    $last_login_date_time = date("Y-m-d H:i:s");

    $sql = "INSERT INTO tbl_admin SET
            'phone' =$phone,
            'PASSWORD' = $password,
            'first_name'= $first_name,
            'last_name'= $last_name,
            'email'=$email,
            'cell_phone' = $cell_phone,
            'verified' = $verified,
            'username' = $username,
            'access_level' = $username,
            'last_login_datetime' = $last_login_date_time";

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
