<?php

ob_start();

session_start();

include_once('./src/function.php');

include_once('./config/Data.Class.php');

if (empty($title)) {
    $title = 'نیکوثبت';
}


?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>

    <link rel="shortcut icon" href="https://s21.picofile.com/file/8442747484/cropped_Untitled_1_1_192x192.png">
    <link href="css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
    <link href="themes/explorer-fas/theme.css" media="all" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="./bootstrap-5.1.1/css/bootstrap.rtl.css" />
    <link rel="stylesheet" href="./css/all.css" />
    <link rel="stylesheet" href="./css/style.css" />

</head>

<body>

    <header class="my-bg">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid d-flex flex-row-reverse">
                    <a class="navbar-brand my-blue fs-3" href="index.php">NikooSabt</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php">خانه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">خدمات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ارتباط با ما</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">کارشناسان</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">درباره ما</a>
                            </li>
                            <li class="nav-item dropdown">
                                <?php
                                if ((isset($_COOKIE['phone']) and isset($_COOKIE['fname'])) and empty($chekUser)) {
;
                                ?>

                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                                        <?php echo "خوش آمدی " .  $_COOKIE['fname'] ?>

                                    </a>
                                    <?php if (isset($_COOKIE['logIn'])) { ?>

                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">مشاهده پنل کاربری</a></li>
                                            <li><a class="dropdown-item" href="changeinfo.php">ویرایش اطلاعات</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="logout.php">خروج از حساب</a></li>
                                        </ul>
                                    <?php } ?>
                                <?php } ?>

                                <?php
                                /*if (isset($_COOKIE['phone']) and isset($_COOKIE['fname'])) {
                                ?>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo "خوش آمدی " . $_COOKIE['fname'] ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">مشاهده پنل کاربری</a></li>
                                        <li><a class="dropdown-item" href="#">ویرایش اطلاعات</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="logout.php">خروج از حساب</a></li>
                                    </ul>
                                <?php } */ ?>

                                <?php
                                if (empty($_COOKIE['phone'])) {
                                ?>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        ورود / ثبت نام
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="register.php">ثبت نام در نیکو ثبت</a></li>
                                        <li><a class="dropdown-item" href="login.php">ورود به نیکو ثبت</a></li>
                                    </ul>

                                <?php } ?>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>