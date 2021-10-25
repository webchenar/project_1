<?php
include_once('header.php');
$title = 'صفحه ورود';

$_SESSION['titr'] = 'برای ورود به سایت لطفا کدی که به شماره همراه و یا ایمیل شما ارسال شده را وارد کنید';

$data = new DataBase();

$chek = true;


$_SESSION['page'] = 'forget';

$_SESSION['chekSms'] = true;

if (isset($_POST['phone'])) {

    $user = $data->search('tbl_user', 'phone', $_POST['phone']);

    if (strcmp(strtolower($_SESSION['captcha']), strtolower($_POST['code']) ) != 0) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>کد امنیتی اشتباه است</strong>
      </div>';
        $chek = false;
    }

    if (!$user) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>شماره تماس اشتباه است</strong>
      </div>';
        $chek = false;
    }

    if (!preg_match("/^09[0-9]{9}$/", $_POST['phone'])) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>فرمت شماره همراه اشتباه است</strong>
      </div>';
        $chek = false;
    }

    if (isset($user['verified']) and $user['verified'] != 1) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>حساب کاربری شما تایید نشده است <a href="active.php">جهت فعال سازی حساب کلیک کنید<a/></strong>
      </div>';
        $_SESSION['phone'] = $user['phone'];
        $_SESSION['rand'] = rand(1000, 9999);
        $chek = false;
    }

    if ($chek) {

        $_SESSION['phone'] = $user['phone'];

        $_SESSION['fname'] = $user['first_name'];

        $_SESSION['rand'] = rand(1000, 9999);

        $_SESSION['email'] = $user['email'];

        header('location:active.php');
    }
}

?>

<div class="container">
    <div class="container mt-5  pb-3">

        <h3 class="sahel fs-3 fw-bold my-t-color my-4 text-center">
             در صورت فراموشی نام کاربری و یا رمز عبور لطفا شماره همراه خود را وارد کنید
        </h3>

        <div class="row d-flex justify-content-center ">

            <form class="my-2 needs-validation col-md-5 " action="forget.php" method="POST" novalidate>

                <div class=" col-12 my-3">
                    <label for="inputfname" class="form-label">شماره همراه:*</label>
                    <input type="text" name="phone" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه خود را وارد کنید" maxlength="11" required>
                    <div class="invalid-feedback">
                        وارد کردن شماره همراه اجباریست
                    </div>
                    <span id="spanmsg"></span>
                </div>

                <div class="col-12 col-md-12 my-3">
                    <label for="inputfname" class="form-label">تصویر امنیتی:<span class="t-red">*</span></label>
                    <img src="./src/captcha.php" class="my-4" alt="">
                    <input type="text" name="code" id="validationCustom03 phone" class="form-control" placeholder="لطفا کد امنیتی را وارد کنید" maxlength="5" required>
                    <div class="invalid-feedback">
                        وارد کردن کد امنیتی اجباریست
                    </div>
                    <span id="spanmsg"></span>
                </div>

                <button class="btn  btn-info  text-center col-12 mb-3" type="submit" id="button-addon2">
                    ورود
                </button>
                
            </form>

        </div>
    </div>

</div>

<br><br><br>

<?php include_once('footer.php') ?>