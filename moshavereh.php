
<?php include_once('header.php')?>

<?php
$chek = true;
if (isset($_COOKIE['moshavere'])) {
  echo '<div class="alert alert-primary container" role="alert">
  کاربر عزیر درخواست شما ثبت شد و به مدیران نیکو ثبت ارسال شده، لطفا اگر با شما تماس حاصل نشد پس از هشت ساعت دوباره اقدام کنید و یا با شماره ما در بالای صفحه تماس بگیرید
</div>';
  $chek = false;
}

if (isset($_GET['phoneMoshavere']) and isset($_GET['name'])) {

  if ($_GET['phoneMoshavere'] != "" and $_GET['name'] != "" and $chek) {

    if (strcmp(strtolower($_SESSION['captcha']), strtolower($_GET['captcha'])) != 0) {
      echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
    <strong>کد امنیتی اشتباه است</strong>
  </div>';
      $chek = false;
    }

    if (!preg_match("/^09[0-9]{9}$/", $_GET['phoneMoshavere'])) {
      echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
    <strong>فرمت شماره همراه اشتباه است</strong>
  </div>';
      $chek = false;
    }

    if ($chek) {
      //setcookie("moshavere", "true", time() + 1287000);
      $phoneModir = '09179335012';
      $emaiModir = 'nikoosabt@gmail.com';
      $name = $_GET['name'];
      $phone = $_GET['phoneMoshavere'];
      $zaman = $_GET['zaman'];
      $mozoe = $_GET['mozoe'];
      $txt = $_GET['txtMoshavere'];
      $txtMoshavere = isset($_GET['txtMoshavere']) ? isset($_GET['txtMoshavere']) : "انتخاب نشده";
      _function::senMailMoshavere($emaiModir, $phone, $name, $mozoe, $zaman, $txt);
      _function::sendSmsMoshavere($phoneModir, $name, $phone, $mozoe, $zaman);
      $_GET = null;
    }
  } 
}

?>
<div class="container-fluid">
        <div class="container">
            <div class="row">
             <div class="d-flex justify-content-center align-items-center title-moshavereh mt-3">
                <span class="text-center text-white p-3 my-4">مشاوره با کارشناسان نیکوثبت</span>
</div>
            <form class="row g-3 needs-validation d-flex justify-content-between align-items-center" novalidate>
                <div class="col-lg-5 coustom-form">
                  <label for="validationCustom01" class="form-label">نام و نام خانوداگی  </label>
                  <input type="text" class="form-control" id="validationCustom01" placeholder="مثال : امیرحسین خدایی " required>
                  <div class="invalid-feedback">
                    لطفا فرم را پر کنید
                   </div>
             
                </div>

                <div class="col-lg-5 coustom-form">
                  <label for="validationCustomUsername" class="form-label">شماره تماس</label>
                  <div class="input-group has-validation">
      
                    <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="مثال : 091765477567" required>
                    <div class="invalid-feedback">
                     لطفا شماره تلفن خود را به صورت صحیح وارد کنید
                    </div>
                  </div>
                </div>

                <div class="col-lg-5 coustom-form ">
                  <label for="validationCustom04" class="form-label">موضوع مشاوره</label>
                  <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">انتخاب کنید...</option>
                    <option>ثبت شرکت</option>
                    <option>تغیرات شرکت </option>
                    <option>ثبت مالکیت معنوی </option>
                    <option>ثلت شرکت پیشخوان خدمات دولت</option>
                    <option>امور ثبتی ویژه </option>
                    <option>سایر موارد</option>
      
                  </select>
                  <div class="invalid-feedback">
           لطفا یک مورد را انتخاب کنید
                  </div>
                </div>
                <div class="col-lg-5 coustom-form">
                  <label for="validationCustom05" class="form-label">جه زمانی را برای تماس مناسب میدانید؟</label>
                  <input type="text" class="form-control" id="validationCustom05" >
                </div>
                <p class="p-def">لطفا اطلاعات را به صورت صحیح وارد کنید تا کارشناسان ما در اسرع وقت با شما تماس بگیرند</p>
                <div class="mb-3 coustom-form ">
                  <label for="exampleFormControlTextarea1" class="form-label"> اگر پیامی دارید وارد کنید</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-12 coustom-form">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
              من ربات نیستم
                    </label>
                  
          
                  </div>
                </div>
                <div class="col-12 mb-5 coustom-form">
                  <button class="btn btn-submit w-100 text-white" type="submit"> ارسال</button>
                </div>
              </form> 
              
            </div>
        </div>
    </div>
 


<?php include_once('./footer.php') ?>