<?php include_once('./config/Data.Class.php');
session_start();
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NikoSabt</title>
    <link rel="stylesheet" href="./bootstrap-5.1.1/css/bootstrap.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/all.css" />
</head>

<body>
    <header class="my-bg">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid d-flex flex-row-reverse">
                    <a class="navbar-brand my-blue fs-3" href="#">NikooSabt</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">خانه</a>
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
                                if (isset($_SESSION['phone']) and isset($_SESSION['fname'])) {
                                ?>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        حساب کاربری
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">مشاهده پنل کاربری</a></li>
                                        <li><a class="dropdown-item" href="#">ویرایش اطلاعات</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">خروج از حساب</a></li>
                                    </ul>
                                <?php } ?>

                                <?php
                                if (empty($_SESSION['phone'])) {
                                ?>
                                    <a class="nav-link" href="/register.php">ثبت نام در نیکو ثبت</a>

                                <?php } ?>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

