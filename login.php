<?php
include_once('header.php');
$title = 'صفحه ورود';



$data = new DataBase();

$chek = true;

if (isset($_POST['phone']) and isset($_POST['password'])) {

    $user = $data->searchLogIn('tbl_user', 'phone', $_POST['phone'], 'PASSWORD', md5($_POST['password']));

    if (strcmp(strtolower($_SESSION['captcha']), strtolower($_POST['code']) ) != 0) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>کد امنیتی اشتباه است</strong>
      </div>';
        $chek = false;
    }

    if (!$user) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>نام کاربری یا رمز عبور اشتباه است</strong>
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
        session_destroy();
        if (isset($_POST['check'])) {

            //session_start();
            setcookie('phone', $user['phone'], time() + 5148000);
            setcookie('fname', $user['first_name'], time() + 5148000);
            setcookie("logIn", "true", time() + 5148000);

        } else {

            setcookie('phone', $user['phone'], time() + 10800);
            setcookie('fname', $user['first_name'], time() + 10800);
            setcookie("logIn", "true", time() + 10800);

        }

        
        header('location:index.php');
       $_SESSION['msg'] = $user['first_name'] . ' ' . $user['last_name'];
       
    }
}

?>

<div class="container">
    <div class="container mt-5  pb-3">

        <h3 class="sahel fs-3 fw-bold my-t-color my-4 text-center">
            برای ورود لطفا شماره همراه و رمز عبور خود را وارد کنید
        </h3>

        <div class="row d-flex justify-content-center ">

            <form class="my-2 needs-validation col-md-5 " action="login.php" method="POST" novalidate>

                <div class=" col-12 my-3">
                    <label for="inputfname" class="form-label">شماره همراه:*</label>
                    <input type="text" name="phone" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه خود را وارد کنید" maxlength="11" required>
                    <div class="invalid-feedback">
                        وارد کردن شماره همراه اجباریست
                    </div>
                    <span id="spanmsg"></span>
                </div>

                <div class="col-12 my-3">
                    <label for="inputfname" class="form-label">رمز عبور:*</label>
                    <input type="password" name="password" id="validationCustom03" class="form-control" placeholder="لطفا رمز عبور خود را وارد کنید" aria-label="Last name" required>
                    <div class="invalid-feedback">
                        وارد کردن رمز عبور اجباریست
                    </div>
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

                <div class="mb-3 mt-3 form-check">

                    <input type="checkbox" name="check" value="1" class="form-check-input " id="exampleCheck1">

                    <label class="form-check-label d" for="exampleCheck1">مرا به خاطر بسپار</label>
                </div>


                <button class="btn  btn-info  text-center col-12 mb-3" type="submit" id="button-addon2">
                    ورود
                </button>

                <a href="forget.php" class="m-2">فراموشی نام کاربری یا رمز عبور</a>
                
            </form>

            

        </div>
    </div>

</div>

<br><br><br>

<?php include_once('footer.php') ?>