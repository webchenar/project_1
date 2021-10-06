<?php

define('SITEURL', "http://localhost/project_1"); // ! change it to your local or website address.
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'nikoosabt_db');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));


$createDatabase = "CREATE DATABASE nikoosabt_db CHARACTER SET utf8mb4 COLLATE utf8mb4_persian_ci";
mysqli_query($conn, $createDatabase) or die(mysqli_error($conn));


$selectDatabase = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));

// create tables:
// start creating.
$tableCreate_User = "CREATE TABLE `tbl_user`(
    id INT(11) NOT NULL AUTO_INCREMENT,
    phone VARCHAR(15),
    PASSWORD VARCHAR(200),
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(50),
    cell_phone VARCHAR(15),
    verified INT(10) DEFAULT 0,
    PRIMARY KEY(id , phone)
) DEFAULT CHARSET = utf8mb4 COLLATE utf8mb4_persian_ci";
mysqli_query($conn, $tableCreate_User) or die (mysqli_error($conn));


$tableCreate_admin = "CREATE TABLE `tbl_admin`(
    id INT(11) NOT NULL AUTO_INCREMENT,
    phone VARCHAR(15),
    PASSWORD VARCHAR(200),
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(50),
    cell_phone VARCHAR(15),
    verified INT(10) DEFAULT 0,
    username VARCHAR(20),
    access_level VARCHAR(10),
    last_login_datetime DATETIME,
    PRIMARY KEY(id, phone)
) DEFAULT CHARSET = utf8mb4 COLLATE utf8mb4_persian_ci";
mysqli_query($conn, $tableCreate_admin) or die (mysqli_error($conn));

// end of creating.


mysqli_close($conn);

?>
