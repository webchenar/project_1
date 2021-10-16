<?php
include_once('header.php');
$title = 'صفحه ورود';

print_r($_POST);

$data = new DataBase();

$chek = true;


if (isset($_POST['phone']) and isset($_POST['password'])) {

    $user = $data->searchLogIn('tbl_user', 'phone', $_POST['phone'], 'PASSWORD', md5($_POST['password']));

    if (strcmp(strtolower($_SESSION['captcha']), strtolower($_POST['code'])) != 0) {
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
        if (isset($_POST['check'])) {

            //session_start();

            $_SESSION['phone'] = $user['phone'];
            $_SESSION['fname'] = $user['first_name'];
        } else {

            setcookie('phone', $user['phone'], time() + 10800);
            setcookie('fname', $user['first_name'], time() + 10800);
        }

        setcookie("logIn", "true", time() + 10800);
        header('location:index.php');
    }
}

?>

<div class="container">
    <div class="container mt-5  pb-3">

        <h3 class="sahel fs-3 fw-bold my-t-color my-4 text-center">
            برای ورود لطفا شماره همراه و رمز عبور خود را وارد کنید
        </h3>

        <div class="row d-flex justify-content-center ">

            <form class="my-2 needs-validation col-md-8 " action="#" enctype="multipart/form-data" method="POST" novalidate>

                <label for="inputfname" class="form-label d-block">چه نوع شرکتی ثبت میکنید:*</label>
                <select name="noesherkat" class="btn-outline-primary rounded p-1 mb-3" aria-required="true" aria-invalid="false">
                    <option value="ثبت شرکت با مسئولیت محدود">ثبت شرکت با مسئولیت محدود</option>
                    <option value="ثبت شرکت سهامی خاص">ثبت شرکت سهامی خاص</option>
                    <option value="ثبت شرکت دانش بنیان">ثبت شرکت دانش بنیان</option>
                    <option value="ثبت موسسه غیر تجاری">ثبت موسسه غیر تجاری</option>
                    <option value="ثبت شرکت سهامی عام">ثبت شرکت سهامی عام</option>
                    <option value="ثبت شرکت تضامنی">ثبت شرکت تضامنی</option>
                    <option value="ثبت شرکت تعاونی">ثبت شرکت تعاونی</option>
                    <option value="ثبت شرکت در منطقه آزاد">ثبت شرکت در منطقه آزاد</option>
                    <option value="ثبت شعبه شرکت خارجی در ایران">ثبت شعبه شرکت خارجی در ایران</option>
                    <option value="ثبت نمایندگی شرکت خارجی در ایران">ثبت نمایندگی شرکت خارجی در ایران</option>
                    <hr>
                    <hr>
                    <option value="موارد دیگر">موارد دیگر</option>
                </select>


                <label for="inputfname" class="form-label d-block">چه نوع شرکتی ثبت میکنید:*</label>
                <select name="mozoe" class="btn-outline-success rounded p-1 mb-3" aria-required="true" aria-invalid="false">
                    <option value="دفاتر پیشخوان">دفاتر پیشخوان</option>
                    <option value="بازرگانی">بازرگانی</option>
                    <option value="تجاری">تجاری</option>
                    <option value="حقوقی">حقوقی</option>
                    <option value="فنی مهندسی">فنی مهندسی</option>
                    <option value="خدماتی">خدماتی</option>
                    <option value="عمرانی">عمرانی</option>
                    <option value="بازاریابی">بازاریابی</option>
                    <option value="کاریابی">کاریابی</option>
                    <option value="کشاورزی">کشاورزی</option>
                    <option value="رایانه ای">رایانه ای</option>
                    <option value="درمانی">درمانی</option>
                    <option value="پیمانکاری">پیمانکاری</option>
                    <option value="روانشناسی">روانشناسی</option>
                    <option value="حمل ونقل">حمل ونقل</option>
                    <option value="انرژی">انرژی</option>
                    <option value="بورس">بورس</option>
                    <option value="بیمه">بیمه</option>
                    <option value="گردشگری">گردشگری</option>
                    <option value="تجارت الکترونیک">تجارت الکترونیک</option>
                    <option value="ترخیص کالا">ترخیص کالا</option>
                    <option value="معاینه فنی">معاینه فنی</option>
                    <option value="صرافی">صرافی</option>
                    <option value="تبلیغاتی">تبلیغاتی</option>
                    <option value="زیست محیطی">زیست محیطی</option>
                    <option value="امداد رسانی">امداد رسانی</option>
                    <option value="املاک">املاک</option>
                    <option value="خدمات سایت">خدمات سایت</option>
                    <option value="تاسیساتی">تاسیساتی</option>
                    <option value="سایر">سایر</option>
                </select>


                <div class="col-12 my-3">
                    <label for="inputfname" class="form-label">سایر فعالیت های مورد نیاز شما:</label>
                    <input type="text" name="other" id="validationCustom03 phone" class="form-control">
                    <span id="spanmsg"></span>
                </div>



                <div class=" col-12 my-3">
                    <label for="inputfname" class="form-label">نام و نام خانوادگی:*</label>
                    <input type="text" name="fnameLname" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه خود را وارد کنید" maxlength="11" required>
                    <div class="invalid-feedback">
                        وارد کردن نام و نام خانوادگی اجباریست
                    </div>
                    <span id="spanmsg"></span>
                </div>


                <label for="inputfname" class="form-label">لطفا استان و شهر خود را انتخاب کنید:*</label>
                <!-- Inside HTML <form> -->
                <div class="ir-select">
                    <select name="ostan" class="ir-province btn-outline-success rounded p-1 mb-3"></select>
                    <select name="city" class="ir-city btn-outline-success rounded p-1 mb-3"></select>
                </div>

                <div class=" col-12 my-3">
                    <label for="inputfname" class="form-label">شماره همراه:<span class="t-red">*</span></label>

                    <input type="text" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه خود را وارد کنید" maxlength="11" required>

                    <div class="invalid-feedback">
                        وارد کردن شماره همراه اجباریست
                    </div>
                    <span id="spanmsg"></span>
                </div>

                <div class=" col-12 my-3">
                    <label for="inputfname" class="form-label">کد پستی:<span class="t-red">*</span></label>

                    <input type="text" name="codeposti" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه خود را وارد کنید" maxlength="11" required>

                    <div class="invalid-feedback">
                        وارد کردن شماره همراه اجباریست
                    </div>
                    <span id="spanmsg"></span>
                </div>

                <div class=" col-12 my-3">
                    <label for="inputfname" class="form-label">کد پستی شرکت:<span class="t-red">*</span></label>

                    <input type="text" name="codepostisherkat" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه خود را وارد کنید" maxlength="11" required>

                    <div class="invalid-feedback">
                        وارد کردن شماره همراه اجباریست
                    </div>
                    <span id="spanmsg"></span>
                </div>

                <div class=" col-12 my-3">
                    <label for="inputfname" class="form-label">کد پستی اعضای هیئت مدیره:<span class="t-red">*</span></label>

                    <input type="text" name="codepostiaza" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه خود را وارد کنید" maxlength="11" required>

                    <div class="invalid-feedback">
                        وارد کردن شماره همراه اجباریست
                    </div>
                    <span id="spanmsg"></span>
                </div>

                <div class=" col-12 my-3">
                    <label for="inputfname" class="form-label">کد ملی:<span class="t-red">*</span></label>

                    <input type="text" name="codemelli" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه خود را وارد کنید" maxlength="11" required>

                    <div class="invalid-feedback">
                        وارد کردن شماره همراه اجباریست
                    </div>
                    <span id="spanmsg"></span>
                </div>

                <div class="input-group mb-3 row">
                    <label for="inputfname" class="form-label col-12">مدارک ارسالی مدیر عامل:<span class="t-red">*</span></label>
                    <div class="input-group mb-3 row justify-content-around col-12">
                        <input type="file" class="form-control" id="inputGroupFile02" hidden>
                        <label class="input-group-text btn-outline-primary col-4" for="inputGroupFile02">ارسال اسکن کارت ملی مدیر عامل</label>

                        <input type="file" class="form-control" id="inputGroupFile02" hidden>
                        <label class="input-group-text btn-outline-primary mx-4 col-4" for="inputGroupFile02">ارسال اسکن شناسنامه مدیر عامل</label>

                    </div>
                </div>

                <div class="input-group mb-3 row">
                    <label for="inputfname" class="form-label col-12">مدارک ارسالی مدیر عامل:<span class="t-red">*</span></label>
                    <div class="input-group mb-3 row justify-content-around col-12">
                        <input type="file" class="form-control" id="inputGroupFile02" hidden>
                        <label class="input-group-text btn-outline-primary col-4" for="inputGroupFile02">ارسال اسکن کارت ملی مدیر عامل</label>

                        <input type="file" class="form-control" id="inputGroupFile02" multiple hidden>
                        <label class="input-group-text btn-outline-primary mx-4 col-4" for="inputGroupFile02">ارسال اسکن شناسنامه مدیر عامل</label>

                    </div>
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