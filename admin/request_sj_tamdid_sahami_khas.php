<?php
include "../config/db_config.php";
$website_title = "صورت جلسه تمدید شرکت های سهامی خاص";
?>

<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $website_title; ?></title>
    <style>
        table {
            width: 100%;
        }

        table, th, td {

            border: 1px solid black;
        }
    </style>
</head>
<body>

<?php
$connection = new PDO("mysql:host=localhost;dbname=nikoosabt_db;charset=UTF8", 'root', '');

?>

<table>
    <legend>انجام شده ها</legend>
    <?php
    $data = $connection->prepare("SELECT * FROM `sj_tamdid_sahami_khas` WHERE anjam_shode = 1");
    $data->execute();
    $result = $data->fetchAll();
    ?>
    <tr>
        <th>
            ID
        </th>
        <th>
            کاربر
        </th>
        <th>
            عملیات‌ها
        </th>
    </tr>

    <?php
    $result_len = count($result);
    for ($i = 0;
         $i < $result_len;
         $i++) {
        ?>
        <tr>
            <td>
                <?php
                echo $result[$i]['sj_id'];

                ?>
            </td>
            <td>
                <?php
                echo $result[$i]['rel_user'];

                ?>
            </td>
            <td>
                <button type="button">edit</button> <!--change boolean to read -->
                <button type="button">generate PDF</button> <!--change boolean to read-->

                <?php
                //#TODO: create a function for edit the input that user put them in form and etc.
                //#TODO: create a function that generate pdf again.
                //#TODO: we should change operation_status boolean to read(1).
                ?>
            </td>
        </tr>
        <?php
    }
    ?>

</table>
<br>

<table>
    <legend>انجام نشده ها</legend>
    <?php
    $data = $connection->prepare("SELECT * FROM `sj_tamdid_sahami_khas` WHERE anjam_shode = 0");
    $data->execute();
    $result = $data->fetchAll();
    ?>
    <tr>
        <th>
            ID
        </th>
        <th>
            کاربر
        </th>
        <th>
            عملیات‌ها
        </th>
    </tr>


    <?php
    $result_len = count($result);
    for ($i = 0;
         $i < $result_len;
         $i++) {
        ?>
        <tr>
            <td>
                <?php
                echo $result[$i]['sj_id'];

                ?>
            </td>
            <td>
                <?php
                echo $result[$i]['rel_user'];

                ?>
            </td>
            <td>
                <button type="button">edit</button> <!--change boolean to read -->
                <button type="button">generate PDF</button> <!--change boolean to read-->

                <?php
                //#TODO: create a function for edit the input that user put them in form and etc.
                //#TODO: create a function that generate pdf again.
                //#TODO: we should change operation_status boolean to read(1).
                ?>
            </td>
        </tr>
        <?php
    }
    ?>

</table>

</body>
</html>
