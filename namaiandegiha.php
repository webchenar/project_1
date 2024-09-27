<?php include_once('header.php'); ?>
<?php
var_dump($_POST);

echo _function::sendSmsnamaiandegi('09363236838', '325684', 'سشیبسیب');

$chek = true;

if (isset($_COOKIE['namaiandegi'])) {
  echo '<div class="alert alert-primary container" role="alert">
  کاربر عزیر درخواست شما ثبت شد و به مدیران نیکو ثبت ارسال شده، لطفا اگر با شما تماس حاصل نشد پس از هشت ساعت دوباره اقدام کنید و یا با شماره ما در بالای صفحه تماس بگیرید
</div>';
  $chek = false;
}



if (isset($_POST['name']) and isset($_POST['codeMelli']) and isset($_POST['phone'])) {

  if ($_POST['phone'] != "" and $_POST['name'] != "" and $chek) {

    if (strcmp(strtolower($_SESSION['captcha']), strtolower($_POST['captcha'])) != 0) {
      echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
    <strong>کد امنیتی اشتباه است</strong>
  </div>';
      $chek = false;
    }

    $chek = _function::validation_img($_FILES['picshenasname']['name'], $_FILES['picshenasname']['size'], $_FILES['picshenasname']['type'], 'لطفا تصویر شناسنامه را بارگذاری کنید');

    $chek = _function::validation_img($_FILES['picmeli']['name'], $_FILES['picmeli']['size'], $_FILES['picmeli']['type'], 'لطفا تصویر کارت ملی را بارگذاری کنید');

    $chek = _function::validation_img($_FILES['picmojavez']['name'], $_FILES['picmojavez']['size'], $_FILES['picmojavez']['type'], 'لطفا تصویر مجوز فعالیت را بارگذاری کنید');

    if (strcmp($_POST['codeMelli'], "") == 0) {
      echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
      <strong>وارد کردن کد ملی اجباری است</strong>
    </div>';
        $chek = false;
    }

    if (strcmp($_POST['adressKar'], "") == 0) {
      echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
      <strong>وارد کردن آدرس محل کار اجباری است</strong>
    </div>';
        $chek = false;
    }

    if (strcmp($_POST['codePosti'], "") == 0) {
      echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
      <strong>وارد کردن کد پستی اجباری است</strong>
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
    if (!preg_match("/^09[0-9]{9}$/", $_POST['phone'])) {
      echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
    <strong>فرمت شماره همراه اشتباه است</strong>
  </div>';
      $chek = false;
    }
    if ($chek) {
      //setcookie("moshavere", "true", time() + 1287000);
      $user_id = isset($_COOKIE['phone']) ? $_COOKIE['phone'] : 'NULL';
      $phoneModir = '09363236838';
      $emaiModir = 'nikoosabt@gmail.com';
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $codemelli = $_POST['codeMelli'];
      $adresskar = $_POST['adressKar'];
      $codeposti = $_POST['codePosti'];
      $email = $_POST['email'];
      $data = new DataBase();
      $data->insertNamaiandegi($user_id, $name, $codemelli, $phone, $adresskar, $codeposti, $email);
      _function::sendMailNamaiandegi($emaiModir, $phone, $name);
      _function::sendSmsnamaiandegi($phoneModir, $name, $phone);
      $_POST = null;
    }
  } 
}

?>
<div class="container-fluid namaiandegiha-bg-color-fluid">
  <div class="container">
    <div class="row ">
      <div class="col-12">

        <div class="namaiandegiha-style my-5">
          <div class="d-flex justify-content-center align-items-center title-moshavereh mt-3">
            <span class="text-center text-white p-3 my-4">نمایندگی ها</span>
          </div>
          <p class="p-0 my-3 fs-4 d-flex align-items-center justify-content-center shadow-p">
            شرایط اخذ نمایندگی شرکت نیکو ثابت ویرا برخط
          </p>
          <p class="font-color">
            <i class="fas fa-caret-left"></i>
            مدرک تحصیلی : داشتن مدرک تحصیلی فوق دیپلم یا بالاتر ( اولویت با مدارک بالاتر می باشد.)
          </p>
          <p class="font-color">
            <i class="fas fa-caret-left"></i>
            سوابق : دارا بودن تجربه و تخصص در یکی از زمینه های امور شرکت ها، امور حقوقی و کامپیوتر، درغیر اینصورت اولویت با متقاضیان دارای تحصیلات حقوق می باشد .
          </p>
          <p class="font-color">
            <i class="fas fa-caret-left"></i>
            وضعیت مکان : داشتن یک دفتر کاری در سطح شهر
          </p>
          <p class="font-color">
            <i class="fas fa-caret-left"></i>
            شرایط اخلاقی : تونایی برقراری ارتباط با مشتری ، روابط عمومی بالا، داشتن حسن اخلاق و روحیه کار تیمی
          </p>
          <p class="font-color">
            <i class="fas fa-caret-left"></i>
            سن متقاضی : حداقل ۲۵ سال حداکثر سن ۴۵سال ( اشخاص حقیقی)
          </p>
          <p class="font-color">
            <i class="fas fa-caret-left"></i>
            مهارت :داشتن مهارت کار با کامپیوتر و اینترنت .
          </p>
          <p class="font-color">
            <i class="fas fa-caret-left"></i>
            الزام : نصب تابلو ، استند یا بنر در محل کار
          </p>
          <p class="p-0 my-3 fs-4 d-flex align-items-center justify-content-center shadow-p">
            شرایط عمومی
          </p>
          <p>
            <i class="fas fa-caret-left"></i>
            عدم اعتیاد به مواد مخدر
          </p>
          <p>
            <i class="fas fa-caret-left"></i>
            نداشتن سوء پیشینه کیفری
          </p>
          <p class="text-success font-color">
            <i class="fas fa-caret-left text-success"></i>
            تذکر۱ : هزینه های تبلیغات، نصب تابلو و تهیه کلیه ملزومات و تجهیزات بر عهده شخص متقاضی می باشد، شرکت در صورت صلاح دید در هزینه های تبلیغات، همکاری می نماید .
          </p>
          <p class="text-success font-color">
            <i class="fas fa-caret-left text-success"></i>
            تذکر ۲: هزینه های مالیات ، ارزش افزوده به عهده نمایندگی می باشد .
          </p>
          <p class="p-0 my-3 fs-4 d-flex align-items-center justify-content-center shadow-p ">
            مداک لازم متقاضی
          </p>
          <p>
            <i class="fas fa-caret-left"></i>
            تصویر شناسنامه تمامی صفحات
          </p>
          <p>
            <i class="fas fa-caret-left"></i>
            تصویر کارت ملی پشت و رو
          </p>
          <p>
            <i class="fas fa-caret-left"></i>
            عکس پرسنلی
          </p>
          <p class="text-danger text-center mt-5 fs-4"> متقاضیان محترم اخذ نمایندگی فعالیت های نیکو ثبت لطفا جهت دریافت نمایندگی مجموعه ثبتی نیکو ثبت فرم زیر را تکمیل نموده و منتظر اولین ارتباط کارشناسان نیکوثبت باشید</p>

          <div class="container-fluid">
            <div class="container">
              <div class="row">
                <div class="d-flex justify-content-center align-items-center title-moshavereh mt-3">
                  <span class="text-center text-white p-3 my-4">فرم تقاضانامه اخذ نمایندگی </span>
                </div>


                <form class="row g-3 needs-validation d-flex justify-content-between align-items-center" action="#" method="POST" enctype="multipart/form-data" novalidate>
                  <div class="col-lg-5 coustom-form">
                    <label for="validationCustom01" class="form-label">نام و نام خانوداگی <span class="text-danger">*</span> </label>
                    <input name="name" type="text" class="form-control" id="validationCustom01" placeholder="مثال : امیرحسین خدایی " required>
                    <div class="invalid-feedback">
                      لطفا فرم را پر کنید
                    </div>

                  </div>

                  <div class="col-lg-5 coustom-form">
                    <label for="validationCustomUsername" class="form-label">کدملی<span class="text-danger">*</span></label>
                    <div class="input-group has-validation">

                      <input name="codeMelli" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="مثال : 2521234567" required>
                      <div class="invalid-feedback">
                        لطفا تلفن خود را به صورت صحیح وارد کنید
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-5 coustom-form">
                    <label for="validationCustomUsername" class="form-label">تلفن <span class="text-danger">*</span></label>
                    <div class="input-group has-validation">

                      <input name="phone" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="مثال : 091765477567" required>
                      <div class="invalid-feedback">
                        لطفا تلفن خود را به صورت صحیح وارد کنید
                      </div>

                    </div>
                  </div>
                  <div class="col-lg-5 coustom-form">
                    <label for="validationCustom05" class="form-label">آدرس دقیق محل کار <span class="text-danger">*</span></label>
                    <input name="adressKar" type="text" class="form-control" id="validationCustom05">
                  </div>
                  <div class="col-lg-5 coustom-form">
                    <label for="validationCustom05" class="form-label"> کدپستی محل کار<span class="text-danger">*</span></label>
                    <input name="codePosti" type="text" class="form-control" id="validationCustom05">
                  </div>
                  <div class="col-lg-5 coustom-form">
                    <label for="validationCustom05" class="form-label">ایمیل <span class="text-danger">*</span></label>
                    <input name="email" type="text" class="form-control" id="validationCustom05">
                  </div>
                  <div class="d-flex justify-content-center upload-pic my-5">
                    <div class="col-lg-4">

                      <p class="mt-2"> تصویر شناسنامه <span class="text-danger">*</span></p>
                      <input type="file" name="picshenasname" id="fileToUpload">

                    </div>
                    <div class="col-lg-4">
                      <p class="mt-2"> تصویر کارت ملی <span class="text-danger">*</span></p>
                      <input name="picmeli" type="file" name="fileToUpload" id="fileToUpload1">

                    </div>
                    <div class="col-lg-4">
                      <p class="mt-2"> تصویر مجوز فعالیت <span class="text-danger">*</span></p>
                      <input type="file" name="picmojavez" id="fileToUpload2">
                    </div>
                  </div>
                  <div class="col-12 coustom-form my-3">
                    <div class="form-check">
                      <label class="form-check-label" for="invalidCheck">
                        لطفا متن تصویر را وارد کنید:
                      </label>
                      <input name="captcha" type="text" value="" id="invalidCheck" required>
                      <img src="./src/captcha.php" alt="">
                    </div>
                  </div>
                  <div class="col-12 mb-5 coustom-form">
                    <button class="btn btn-submit w-100 text-white" type="submit"> ارسال</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<?php include_once('footer.php'); ?>