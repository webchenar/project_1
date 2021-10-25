<?php
$title = 'ویرایش اطلاعات';

include_once('header.php');

$chek = true;

$_SESSION['titr'] = 'برای تایید ویرایش مشخصات لطفا کدی که به شماره همراه و ایمیل ارسال شده را وارد کنید';

$_SESSION['page'] = 'change';

_function::logIn();

$data = new DataBase();


$user = $data->search('tbl_user', 'phone', isset($_SESSION['phone']) ? $_SESSION['phone'] : $_COOKIE['phone']);

if (isset($_POST)) {
    if (isset($_POST['phone'])) {

        if ($user['phone'] != $_POST['phone']) {
            if (!empty($data->search('tbl_user', 'phone', $_POST['phone']))) {
                echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>کاربری قبلا با این شماره همراه ثبت نام کرده است</strong>
              </div>';
                $chek = false;
            }
        }

        

        if ($user['email'] != $_POST['email']) {
            if (!empty($data->search('tbl_user', 'email', $_POST['email']))) {
                echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>کاربری قبلا با این ایمیل ثبت نام کرده است</strong>
              </div>';
                $chek = false;
            }
        }

        $_SESSION['oldPhone'] = isset($_SESSION['phone'])?$_SESSION['phone']:$_COOKIE['phone'];
        $_SESSION['oldEmail'] = $user['email'];

        require_once('./src/validation.php');
    }
}

?>


<div class="form">
    <div class="container">
        <form class="my-5 needs-validation" action="changeinfo.php" method="POST" novalidate>

            <div class="row align-items-stretch">

                <div class="col-12 col-md-4 mx-md-5 ">

                    <div class="col-12">
                        <label for="inputfname" class="form-label">نام:</label>
                        <input type="text" name="fname" class="form-control" value="<?php echo isset($_POST['fname'])? $_POST['fname'] : $user['first_name'] ?>" id="validationCustom03" placeholder="لطفا نام خود را وارد کنید" aria-label="First name" required>
                        <div class="invalid-feedback">
                            وارد کردن نام اجباریست
                        </div>
                    </div>

                    <div class="col-12  my-3">
                        <label for="inputfname" class="form-label">نام خانوادگی:</label>
                        <input type="text" name="lname" id="validationCustom03" class="form-control" value="<?php echo isset($_POST['lname'])? $_POST['lname'] : $user['last_name'] ?>" placeholder="لطفا نام خانوادگی خود را وارد کنید" required>
                        <div class="invalid-feedback">
                            وارد کردن نام خانوادگی اجباریست
                        </div>
                    </div>

                    

                    <div class="col-12 my-3">
                        <label for="inputfname" class="form-label">شماره همراه:</label>
                        <input type="text" name="phone" id="validationCustom03 phone" class="form-control" value="<?php echo isset($_POST['phone'])? $_POST['phone'] : $user['phone'] ?>" placeholder="لطفا شماره تلفن همراه خود را وارد کنید" maxlength="11" required>
                        <div class="invalid-feedback">
                            وارد کردن شماره همراه اجباریست
                        </div>
                        <span id="spanmsg"></span>
                    </div>

                    <div class="col-12 my-3 ">
                        <label for="inputfname" class="form-label">ایمیل:</label>
                        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email'])? $_POST['email'] : $user['email'] ?>" placeholder="لطفا ایمیل خود را وارد کنید" required>
                        <div class="invalid-feedback">
                            وارد کردن ایمیل اجباریست
                        </div>
                    </div>

                    <div class="col-12 my-3">
                        <label for="inputfname" class="form-label">شماره تلفن ثابت(همراه با کد شهر):</label>
                        <input type="text" name="cellPhone" value="<?php echo isset($_POST['cellPhone'])? $_POST['cellPhone'] : $user['cell_phone'] ?>"class="form-control" placeholder="لطفا شماره تلفن ثابت خود را وارد کنید" maxlength="11">
                    </div>

                    <div class="col-12 my-3">
                        <label for="inputfname" class="form-label">رمز عبور:<span class="t-red">*</span><br> (اگر قصد تغیر دارید رمز جدید در غیر اینصورت رمز خود را وارد کنید)</label>
                        <input type="password" name="password" id="validationCustom03" class="form-control" placeholder="لطفا رمز عبور خود را وارد کنید" aria-label="Last name" required>
                        <div class="invalid-feedback">
                            وارد کردن رمز عبور اجباریست
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="inputfname" class="form-label">تکرار رمز عبور:<span class="t-red">*</span></label>
                        <input type="password" name="repeatPassword" id="validationCustom03" class="form-control" placeholder="تکرار رمز عبور را وارد کنید" aria-label="Last name" required>
                        <div class="invalid-feedback">
                            وارد کردن تکرار رمز عبور اجباریست
                        </div>
                    </div>

                    <div class="col-12 col-md-10 my-3">
                        <label for="inputfname" class="form-label">تصویر امنیتی:<span class="t-red">*</span></label>
                        <img src="./src/captcha.php" class="my-4" alt="">
                        <input type="text" name="code" id="validationCustom03 phone" class="form-control" placeholder="لطفا کد امنیتی را وارد کنید" maxlength="5" required>
                        <div class="invalid-feedback">
                            وارد کردن کد امنیتی اجباریست
                        </div>
                        <span id="spanmsg"></span>
                    </div>


                    <div class="col-12 my-5">
                        <button type="submit" class="btn w-100 btn-outline-primary">ثبت تغیرات</button>
                    </div>

                </div>

                <div class="d-none d-md-block col-md-6 border my-2 shadow-sm">
                    <h5 class="sahel fs-5 my-3 ">با نیکو ثبت تمامی خدمات ثبتی خود را انجام دهید:</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item ">استعلام رایگان برند و نام شرکت</li>
                        <li class="list-group-item">
                            <h6 class="fs-6 my-1">عضویت رایگان در خبرنامه</h6>
                        </li>
                        <li class="list-group-item">ثبت انواع شرکت</li>
                        <li class="list-group-item">تغییرات وتمدید شرکت</li>
                        <li class="list-group-item">ثبت علائم تجاری، لوگو و برند</li>
                        <li class="list-group-item">اخذکارت بازرگانی</li>
                        <li class="list-group-item">اخذ گرید و رتبه بندی
                        </li>
                        <li class="list-group-item">خدمات حسابداری و دفاتر مالیاتی</li>
                        <li class="list-group-item">جواز تاسیس و اکتشافات معدن</li>
                        <li class="list-group-item">اخذ کداقتصادی و پلمپ دفاتر</li>
                        <li class="list-group-item">ثبت اختراع</li>
                        <li class="list-group-item fs-5 fw-bold">و ده‌ها خدمات ثبتی دیگر...</li>
                    </ul>


                </div>


            </div>






        </form>
    </div>
</div>



<?php include_once('footer.php'); ?>