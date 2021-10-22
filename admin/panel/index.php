<?php
$website_title = "صفحه اصلی مدیریت";

// database config - start
ob_start();
session_start();

date_default_timezone_set('Asia/Tehran');
define('SITEURL', "http://localhost/nikoosabt/project_1/"); // ! change it to your local or website address.
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'nikoosabt_db');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn));
mysqli_set_charset($conn, "utf8mb4");
$selectDatabase = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));
// database config - end

//login check - start
if (!isset($_SESSION['user'])) {
    $_SESSION['no-login-message'] = "<div>ابتدا باید وارد شوید</div>";
    header('location:' . SITEURL . 'admin/administrator/admin-login.php');
}
//login check - end
?>

<!-- Header and menu Start -->
<!doctype html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $website_title; ?></title>
    <!-- We will insert Styles after this in main files. -->

    <link rel="stylesheet" href="css/bootstrap.rtl.min.css"/>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<?php
//Login check in Index file.
if (isset($_SESSION['login']))
    if (isset($_SESSION['login'])) {
        echo $_SESSION['login'];
        unset($_SESSION['login']);
    }
?>

<!-- top navigation bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#sidebar"
                aria-controls="offcanvasExample"
        >
            <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="<?php SITEURL ?>">
            نیکوثبت
        </a>
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#topNavBar"
                aria-controls="topNavBar"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
            <div class="d-flex ms-auto my-3 my-lg-0">
            </div>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a
                            class="nav-link dropdown-toggle ms-2"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                    >
                        <i class="bi bi-person-fill"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <!-- #TODO: Create Link to Logout. -->
                        <li><a class="dropdown-item" href="#">خروج</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- top navigation bar -->


<!-- table start -->
<main class="mt-5 pt-3">
    <div class="row">
        <div class="col-md-3 mb-3">
            <!-- offcanvas -->
            <div
                    class="offcanvas offcanvas-start sidebar-nav bg-dark"
                    tabindex="-1"
                    id="sidebar"
            >
                <div class="offcanvas-body p-0">
                    <nav class="navbar-dark">
                        <ul class="navbar-nav">
                            <li>
                                <div class="text-muted small fw-bold text-uppercase px-3">
                                    بخش های اصلی
                                </div>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-3 active">
                                    <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                                    <span>داشبورد</span>
                                </a>
                            </li>
                            <li class="my-4">
                                <hr class="dropdown-divider bg-light"/>
                            </li>
                            <li>
                                <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                                    خدمات
                                </div>
                            </li>
                            <li>
                                <a
                                        class="nav-link px-3 sidebar-link"
                                        data-bs-toggle="collapse"
                                        href="#layouts"
                                >
                                    <span class="me-2"><i class="bi bi-layout-split"></i></span>
                                    <span>صورت جلسه</span>
                                    <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
                                </a>
                                <div class="collapse" id="layouts">
                                    <ul class="navbar-nav ps-3">
                                        <li>
                                            <a href="#" class="nav-link px-3">
                      <span class="me-2"
                      ><i class="bi bi-speedometer2"></i
                          ></span>
                                                <span>تمدید سهامی خاص</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-book-fill"></i></span>
                                    <span>دیگر خدمات</span>
                                </a>
                            </li>
                            <li class="my-4">
                                <hr class="dropdown-divider bg-light"/>
                            </li>
                            <li>
                                <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                                    اعضای سایت
                                </div>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-graph-up"></i></span>
                                    <span>مدیران</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-3">
                                    <span class="me-2"><i class="bi bi-table"></i></span>
                                    <span>کاربران</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!--end of menu-->

        </div>
        <div class="col-md mb-3">
            <div class="card">
                <div class="card-header">
                    <span><i class="bi bi-table me-2"></i></span> درخواست های انجام نشده
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table
                                id="example"
                                class="table table-striped data-table"
                                style="width: 100%"
                        >
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>نام کاربر مربوطه</th>
                                <th>نوع درخواست</th>
                                <th>عملیات</th>
                                <th>تاریخ درخواست</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</main>
<!-- table end -->


<!--Javascripts-->
<script src="./js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
<script src="./js/jquery-3.5.1.js"></script>
<script src="./js/jquery.dataTables.min.js"></script>
<script src="./js/dataTables.bootstrap5.min.js"></script>
<script src="./js/script.js"></script>
</body>
</html>



