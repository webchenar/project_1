<?php include 'partials/menu.php'; ?>

<div>

    <div>

        <h1>به روز رسانی مدیر</h1>
        <br><br>
        <?php

        $id = $_GET['id'];
        $sql = "SELECT * FROM tbl_admin WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if ($result == true) {
            $count = mysqli_num_rows($result);
            if ($count == 1) {
                $row = mysqli_fetch_assoc($result);

                $phone = $row['phone'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $email = $row['email'];
                $cell_phone = $row['cell_phone'];
                $verified = $row['verified'];
                $username = $row['username'];
                $access_level = $row['access_level'];
            } else {
                header('location: ' . SITEURL . 'admin/manage-admin.php');
            }
        }

        ?>

        <form action="" method="POST">
            <table style="width: 30%;border-bottom: 1px solid black; padding: 1%; text-align: left; ">
                <tr>
                    <td>phone:</td>
                    <td>
                        <input type="text" name="phone" value="<?php echo $phone; ?>">
                    </td>
                </tr>
                <tr>
                    <td>first_name:</td>
                    <td>
                        <input type="text" name="first_name" value="<?php echo $first_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>last_name:</td>
                    <td>
                        <input type="text" name="last_name" value="<?php echo $last_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>email:</td>
                    <td>
                        <input type="text" name="email" value="<?php echo $email; ?>">
                    </td>
                </tr>
                <tr>
                    <td>cell_phone:</td>
                    <td>
                        <input type="text" name="cell_phone" value="<?php echo $cell_phone; ?>">
                    </td>
                </tr>
                <tr>
                    <td>verified:</td>
                    <td>
                        <input type="text" name="verified" value="<?php echo $verified; ?>">
                    </td>
                </tr>
                <tr>
                    <td>username:</td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>
                <tr>
                    <td>access_level:</td>
                    <td>
                        <input type="text" name="access_level" value="<?php echo $access_level; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Admin">
                    </td>
                </tr>

            </table>

        </form>

    </div>

</div>

<?php

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $phone = $_POST['phone'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $cell_phone = $_POST['cell_phone'];
    $verified = $_POST['verified'];
    $username = $_POST['username'];
    $access_level = $_POST['access_level'];

    $sql = "UPDATE tbl_admin SET
            phone = '$phone',
            first_name = '$first_name',
            last_name = '$last_name',
            email = '$email',
            cell_phone = '$cell_phone',
            verified = '$verified',
            username = '$username',
            access_level = '$access_level' 
            WHERE id = '$id'
            ";
    $result = mysqli_query($conn, $sql);

    if ($result == true) {
        $_SESSION['update'] = "<div>مدیر با موفقیت به روز شد.</div>";
        header('location:' . SITEURL . 'admin/manage-admin.php');
    } else {
        $_SESSION['update'] = "<div>عملیات ناموفق بود.</div>";
        header('location:' . SITEURL . 'admin/manage-admin.php');
    }
}

?>

<?php include 'partials/footer.php'; ?>
