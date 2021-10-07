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


// create request table
$tableCreate_sabt_sherkat = "CREATE TABLE `sabt_sherkat`(
    id INT(11) NOT NULL AUTO_INCREMENT,
    company_type VARCHAR(250),
    activity_subject VARCHAR(200),
    other_activity VARCHAR(200),
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    state VARCHAR(200),
    city VARCHAR(200),
    phone_number VARCHAR(15),
    company_postal_code VARCHAR(12),
    board_postal_code VARCHAR(12),
    national_code VARCHAR(12),
    CEO_cert_picture TEXT,
    CEO_ID_picture TEXT,
    board_cert_picture TEXT,
    board_ID_picture TEXT,
    inspector_cert_picture TEXT,
    inspector_ID_picture TEXT,
    PRIMARY KEY(id)
) DEFAULT CHARSET = utf8mb4 COLLATE utf8mb4_persian_ci";
mysqli_query($conn, $tableCreate_sabt_sherkat) or die (mysqli_error($conn));


// end of Table creating.

// create a admin for sample and test.
$password = md5('1');
$last_login_date_time = date("Y-m-d H:i:s");

$sql = "INSERT INTO tbl_admin
    (phone,PASSWORD,first_name,last_name,email,cell_phone,verified,
    username,access_level,last_login_datetime)
VALUES
    ('1', '$password', 'admin', 'admin', 'example@gmail.com','9999999999','1',
    'test admin', '3', '$last_login_date_time')";

$result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

mysqli_close($conn);

?>
