<?php
include "../config/db_config.php";
include "login_check.php";
?>

<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>داشبورد مدیریت وبسایت</title>
    <link rel="stylesheet" href="styles/admin.css">
    <!-- Boxicons CDN Link -->
    <!--
    TODO: change cdn to local.
    -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-firebase'></i>
        <span class="logo_name">Nikoosabt</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="<?php echo SITEURL . 'admin/index.php'; ?>" class="active">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">داشبورد</span>
            </a>
        </li>
        <li>
            <a href="<?php echo SITEURL . 'admin/manage-admin.php'; ?>">
                <i class='bx bxs-face'></i>
                <span class="links_name">تنظیمات مدیران</span>
            </a>
        </li>
        <li>
            <a href="<?php echo SITEURL . 'admin/request_list.php'; ?>">
                <i class='bx bxl-stack-overflow'></i>
                <span class="links_name">درخواست‌ها</span>
            </a>
        </li>

        <li class="log_out">
            <a href="<?php echo SITEURL . 'admin/logout.php'; ?>">
                <i class='bx bx-log-out'></i>
                <span class="links_name">خروج</span>
            </a>
        </li>
    </ul>
</div>

<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <i class='bx bx-search'></i>
        </div>
        <div class="profile-details">
            <img src="images/profile.jpg" alt="">
            <span class="admin_name">Prem Shahi</span>
            <i class='bx bx-chevron-down'></i>
        </div>
    </nav>
