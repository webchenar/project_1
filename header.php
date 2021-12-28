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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap-5.1.1/css/bootstrap.rtl.css" />
    <link rel="stylesheet" href="./css/all.css" />
    <link rel="stylesheet" href="./css/style.css" />

</head>
                                        <!-- top header -->
<body>
<div class="container-fluid top-header ">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 mt-2">
                <p class="text-white define">
                به مجموعه ثبتی نیکوثبت خوش آمدید.
                </p>
                <p class="text-white define">
                نیکو ثبت اولین ارائه دهنده خدمات ثبتی دور کاری در کشور
                </p>
            </div>
            <div class="col-xs-3 col-md-3 mt-2 tel-me">
            
               <i class="fas fa-phone-volume fs-5 me-2 text-white"></i>
<a class="text-white define" href="tel:09179335012">09179335012</a>


<a class="text-white define d-block " href="tel:07153232868">07153232868</a>

            </div>
            <div class="ol-xs-3 col-md-3 support-social d-flex align-items-center">
      
            <i class="fas fa-headset fs-2  text-white"></i>
            <span class="text-white define mx-2">پشتیبانی</span>
                <div class="d-flex justify-content-center icon-social mb-4">
                <a class="fs-5 messenger text-white" href="http://instagram.com/nikoosabt"><i class="fab fa-instagram"></i></a>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=9809179335012" rel="nofollow" class="fs-5 messenger text-white mx-3"><i class="fab fa-whatsapp"></i></a>
                <a class="fs-5 messenger text-white " href="#"><i class="fab fa-telegram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
    <header class="my-bg fix-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid d-flex ">
                    <a class="navbar-brand my-blue fs-3" href="index.php"><img class="icon-img" src="img/Untitled-1.png" alt=""></a>
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
                                <a class="nav-link" href="namaiandegiha.php">نمایندگی ها</a>
                        
                            </li>
                  
                            <li class="nav-item">
                                <a class="nav-link" href="#">کارشناسان</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">نیکوثبتی ها</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ثبت شرکت</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="moshavereh.php">مشاوره</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">درباره ما</a>
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