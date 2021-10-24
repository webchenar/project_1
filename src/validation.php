<?php
if (isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['phone']) and isset($_POST['password']) and isset($_POST['repeatPassword'])) {

  if (strcmp(strtolower($_SESSION['captcha']), strtolower($_POST['code'])) != 0) {
    echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
    <strong>کد امنیتی وارد شده اشتباه است</strong>
  </div>';
  $chek = false;
  }

if (strlen($_POST['password']) < 8) {
    echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>رمز عبور باید بیشتر از 8 حرف باشد</strong>
      </div>';
    $chek = false;
}

if (isset($_POST['phone'])) {
    if (!preg_match("/^09[0-9]{9}$/", $_POST['phone'])) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>فرمت شماره همراه اشتباه است</strong>
      </div>';
        $chek = false;
    }

}

if (preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['fname']))) {
  echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
  <strong>نام را به صورت فارسی وارد کنید</strong>
</div>';
  $chek = false;
} 

if (preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['lname']))) {
  echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
  <strong>نام خانوادگی را به صورت فارسی وارد کنید</strong>
</div>';
  $chek = false;
} 

if (isset($_POST['email']) and strlen($_POST['email']) != 0) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) or strlen($_POST['email']) < 10) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>فرمت ایمیل اشتباه است</strong>
      </div>';
      $chek = false;
    }



}

if (isset($_POST['cellPhone']) and strlen($_POST['cellPhone']) != 0) {

    if (strlen($_POST['cellPhone']) != 11) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>فرمت شماره تلفن ثابت اشتباه است</strong>
      </div>';
        $chek = false;
    }

}

if ($_POST['password'] !== $_POST['repeatPassword']) {

    echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>رمز عبور و تکرار یکسان نیست</strong>
      </div>';
    $chek = false;
}

if ($chek) {

    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['cellPhone'] = $_POST['cellPhone'];
    $_SESSION['password'] = md5($_POST['password']);
    $_SESSION['rand'] = rand(1000, 9999);
    $_SESSION['newPhone'] = isset($_POST['phone'])?$_POST['phone']:null;
    $_SESSION['chekSms'] = true;
    $_POST = null;
    header('location:active.php');


}
}
