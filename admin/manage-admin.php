<?php include "partials/menu.php"; ?>

    <div>
        <h1>مدیریت نمایندگان و مدیران</h1>
        <br>

        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }

        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }

        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }

        if (isset($_SESSION['user-not-found'])) {
            echo $_SESSION['user-not-found'];
            unset($_SESSION['user-not-found']);
        }

        if (isset($_SESSION['pwd-not-match'])) {
            echo $_SESSION['pwd-not-match'];
            unset($_SESSION['pwd-not-match']);
        }

        if (isset($_SESSION['change-pwd'])) {
            echo $_SESSION['change-pwd'];
            unset($_SESSION['change-pwd']);
        }

        ?>
        <a href="<?php echo SITEURL . 'admin/add-admin.php/' ?>"> اضافه کردن مدیر </a>
        <br>
        <table style="width:100%;border-bottom:1px solid black; padding: 1%;text-align: left; padding: 1%;">
            <tr>
                <th>ID:</th>
                <th>first name and last name</th>
                <th>Phone(username)</th>
                <th>Access Level</th>
                <th>Last Login:</th>
                <th>Operations</th>
            </tr>

            <?php
            $sql = "SELECT * FROM tbl_admin";
            $res = mysqli_query($conn, $sql);

            if ($res == true) {
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $id = $rows['id'];
                        $phone = $rows['phone'];
                        $full_name = $rows['first_name'] . " " . $rows['last_name'];
                        $email = $rows['email'];
                        $access_level = $rows['access_level'];
                        $username = $rows['username'];
                        $last_login = $rows['last_login_datetime'];

                        ?>
                        <tr>
                            <td><?php echo $id; ?>.</td>
                            <td><?php echo $full_name; ?></td>
                            <td><?php echo $phone; ?></td>
                            <td><?php echo $access_level; ?></td>
                            <td><?php echo $last_login; ?></td>
                            <td>
                                <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>">تغییر پسورد</a>
                                <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>">به روز رسانی مدیر</a>
                                <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>">حذف مدیر</a>
                            </td>
                        </tr>

                        <?php

                    }
                } else {
                    // noting yet. #TODO: something need here.
                }
            }

            ?>
        </table>
    </div>

<?php include('partials/footer.php'); ?>