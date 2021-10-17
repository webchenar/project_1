<?php
include "../config/db_config.php";
include "login_check.php";
?>


<div>
    <div>
        <i></i>
        <span>Nikoosabt</span>
    </div>

    <ul>
        <li>
            <a href="<?php echo SITEURL . 'admin/index.php'; ?>">
                <i></i>
                <span>داشبورد</span>
]

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
                <i></i>
                <span>تنظیمات مدیران</span>

            </a>
        </li>
        <li>
            <a href="<?php echo SITEURL . 'admin/request_list.php'; ?>">
                <i></i>
                <span>درخواست های کاربران</span>
            </a>
        </li>

        <li>
            <a href="<?php echo SITEURL . 'admin/logout.php'; ?>">
                <i></i>
                <span>خروج</span>

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
