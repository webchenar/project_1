<?php include_once('header.php');

$data = new DataBase();

$chek = true;


if (isset($_POST['phone']) and $_POST['password']) {

    $user = $data->searchLogIn('tbl_user', 'phone', $_POST['phone'], 'PASSWORD', md5($_POST['password']));

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
        <strong>حساب کاربری شما تایید نشده است</strong>
      </div>';
        $chek = false;
    }

    if ($chek) {
        if ($_POST['check']) {
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['fname'] = $user['first_name'];
            echo $_SESSION['phone'] . $_SESSION['fname'];
        }else{
            setcookie('phone', $user['phone'], time()+10800);
            setcookie('fname', $user['first_name'], time()+10800);
        }

        header('location:index.php');

    }
}

?>

<div class="container">
    <div class="container mt-5  pb-3">

        <h3 class="sahel fs-3 fw-bold my-t-color m-5 text-center">
            برای ورود لطفا شماره همراه و رمز عبور خود را وارد کنید
        </h3>

        <div class="row d-flex justify-content-center ">

            <form class="my-2 needs-validation col-md-6 " action="login.php" method="POST" novalidate>

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

                <div class="mb-3 mt-3 form-check">

                    <input type="checkbox" name="check" value="1" class="form-check-input " id="exampleCheck1">

                    <label class="form-check-label d" for="exampleCheck1">مرا به خاطر بسپار</label>
                </div>

                <button class="btn  btn-info  text-center col-12" type="submit" id="button-addon2">
                    ورود
                </button>

            </form>

        </div>
    </div>

</div>

<br><br><br>

<?php include_once('footer.php') ?>