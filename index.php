<?php
$title = 'نیکوثبت';
include_once('./header.php');
if (isset($_COOKIE['newUser'])) {
  echo '<div class="my-bg"><div class="alert alert-success container my-bg" role="alert">
  حساب کاربری شما با موفقیت فعال شد
    </div></div>';
}
if (isset($_SESSION['msg'])) {
  echo '<div class="my-bg"><div class="alert alert-success container my-bg" role="alert">
خوش آمدید ' .  $_SESSION['msg'] . ' به نیکو ثبت
    </div></div>';
  $_SESSION['msg'] = NULL;
}
?>
<div class="container">
  <div class="row">
  <div class="col-12 img-filter">
    <img class="slid" src="img/5.jpg" alt="">
    <div class=" w-50 m-auto h-auto text-on-img">
      <span class="fs-4 ms-2 sahel justifuy mt-5 ">نیکوثبت مجموعه ای ثبتی جهت انجام کلیه امور ثبتی کسب وکار
        شما</span>
      <p class=" fs-5 justifuy my-3 myblue sahel">
        مجموعه نیکوثبت کسب وکار شما را از بسیاری جهات لمس میکند با خیال
        راحت امور ثبتیتان را به ما بسپارید و به مدیریت کسب وکار خود
        بپردارید.
      </p>
      <div class="d-block d-md-flex justify-content-between d-lg-inline-block mb-md-1">
        <a class="d-block d-md-inline-block  btn btn-outline-warning mx-1 " href="#">درخواست مشاوره</a>
        <a class="d-block d-md-inline-block btn btn-outline-warning my-1 my-md-0 " href="#">فهرست خدمات نیکو ثبت</a>
      </div>
      <a class="d-block d-md-block  d-lg-inline-block btn btn-tamdid mt-lg-0" href="./tamdid_sherkat.php">
        تمدید شرکت سهامی خاص</a>
    
    </div>

  </div>
</div>
</div>

<section class="mb-4 ">
  <div class="container">
    <div class="titr text-center">
      <h1 class="px-3 
              sahel
              my-green
              d-inline-flex
              fs-1
              fw-bold
              border-bottom border-4 border-primary
              lh-lg
            ">
        معرفی خدمات نیکوثبت
      </h1>
      
    </div>

    <div class="row Services-nikoosabt">
      <div class="col-12 col-lg-4 my-4">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">ثبت انواع شرکت:</h5>
              <i class="fas fa-check fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              با چند کلیک ساده و به صورت آنلانن شرکت خود را به ثبت برسانید
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-3"> فرم ثبت شرکت</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 my-4">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">تغییرات وتمدید شرکت:</h5>
              <i class="fas fa-tasks fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              یک شرکت پس از ثبت، می تواند تغییراتی را در مواردی از اساسنامه
              و یا هر آنچه مربوط به شرکت است ایجاد کند
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="./tamdid_sherkat.php" class="card-link position-absolute bottom-0 mb-3">فرم تغیرات و تمدید شرکت</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 my-4">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">
                ثبت علائم تجاری، لوگو و برند:
              </h5>
              <i class="fas fa-drafting-compass fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              نام و نشان تجاری ، نام یا نمادی متمایز برای شناسایی کالاها یا
              خدمات از یک فروشنده
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-3">فرم ثبت علائم تجاری و لوگو</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row Services-nikoosabt">
      <div class="col-12 col-lg-4 mb-4">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">اخذکارت بازرگانی:</h5>
              <i class="fas fa-id-card fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              کارت بازرگانی مجوزی است که به اشخاص حقیقی و حقوقی داده
              می‌شود...
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-3">فرم اخذ کارت بازرکانی</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 mb-4 shadow-one ">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">ثبت اختراع:</h5>
              <i class="fas fa-fill-drip fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              اختراع محصول جدیدی است که در نتیجه‌ی فکر فرد یا افراد مخترع
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-3">فرم درخواسن ثبت اختراع</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 mb-4">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">اخذ گرید و رتبه بندی:</h5>
              <i class="fas fa-chart-line fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text fs-6 justify">
              فرآیند رتبه بندی متشکل از پیگیری جهت تکمیل شرایط و مدارک و
              مراوده و پیگیری از سازمان مدیریت...
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-3">درخواست اخذ گرید و رتبه بندی</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row Services-nikoosabt">
      <div class="col-12 col-lg-4 mb-4">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">
                جواز تاسیس و اکتشافات معدن:
              </h5>
              <i class="fas fa-snowplow fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              جواز تاسیس به مجوزی که افراد جهت انجام یک فعالیت
              تولیدی-اقتصادی اخذ می کنند ...
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 m-2 mb-3">درخواست جواز تاسیس و اکتشافات معدن</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 mb-4">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-8 card-title sahel">
                اخذ کداقتصادی و پلمپ دفاتر:
              </h5>
              <i class="fas fa-unlock fa-2x icon col-2 offset-2"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text justify">
              هر شرکت نیاز به یک کد اقتصادی دارد. این کد برای مشخص شدن
              عملکرد یک شرکت در قراردادها ...
            </p>
            <div class="d-flex flex-row-reverse">
              <a href="#" class="card-link position-absolute bottom-0 mb-3">
                اخذ کد اقتصادی و پلمپ دفاتر تجاری</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-4 mb-4">
        <div class="card card-height">
          <div class="card-body border-1 shadow">
            <div class="row">
              <h5 class="col-9 card-title sahel">
                خدمات حسابداری و دفاتر مالیاتی:
              </h5>
              <i class="fas fa-calculator fa-2x icon col-2 offset-1"></i>
            </div>
            <!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
            <p class="card-text  justify">
              یک موسسه خدمات مالی، نیاز به مشاوره مالی مناسب دارد تا در مورد
              مسائل مالی به مشتریان مشاوره دهد...
            </p>
            <div class="d-flex flex-row-reverse ">
              <a href="#" class="card-link position-absolute bottom-0 mb-3">فرم خدمات حسابداری و دفاتر مالیاتی</a>
              <!--<a href="#" class="card-link">Another link</a>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
<div class="container">
  <div class="row">
    <div class="col-12 my-5">
    <div class="baner">
   <a href="#"><img src="img/157760660.jpg" class="img-fluid" alt="">s</a>
  </div>
</section>
    </div>
  </div>
</div>

<section class="pt-2 mb-5">
  <div class="container">
    <div class="row ">
    

      <div class="col-12 col-md-6 moshavereh mt-5">
        <h1 class="
                sahel
                my-green
                d-inline-flex
                fs-3
                fw-bold
                border-bottom border-4 border-primary
                p-2
              ">
          مشاوره عالی ومفید توسط بهترین مجموعه ثبتی
        </h1>
        <p class="mt-2 fs-5 justifuy">
          نیکو ثبت مجموعه ثبتی با کارشناسانی مجرب و باتجربه هست که فعالیت
          خود را در مرکز رشد با شرکت های نوپا و دانش بنیان آغاز کرد وهم
          اکنون فعالیت هایش را با انجام امور ثبتی شرکتهای مختلف در تمام
          شهرهای ایران بصورت حضوری و دورکاری گسترده نموده است و درخدمت شما
          عزیزان وکسب و کارتان می باشد، تا شما با خیال راحت به اداره امور و
          مدیریت کسب وکار خود بپردازیدمام
          شهرهای ایران بصورت حضوری و دورکاری گسترده نموده است و درخدمت شما
          عزیزان وکسب و کارتان می با
        </p>
   
      </div>

      <div class="d-none d-md-block col-md-6">
        <img class="img-fluid" src="./img/Consulting-rafiki.png" alt="" />
      </div>
      <p class="text-center fs-5">اگر به مشاوره نیاز دارید <a class="my-green" href="#">اینجا </a> کلیک کنید</p>
    </div>
  </div>
</section>



<section class="">
  <div class="container">
  <div class="row">

        <div class="d-none d-md-block col-md-6">
          
        <h1 class="
                sahel
                my-green
                d-inline-flex
                fs-3
                fw-bold
                border-bottom border-4 border-primary
                p-2
              ">
        چرا باید نیکو ثبت را انتخاب کنیم؟
        </h1>
        <img class="img-fluid mt-2 company" src="./img/Company-amico.png" alt="" />
      </div>
      <div class="col-12 col-md-6 mt-5 define-niko">
        <p class="mt-2 fs-5 justifuy">
          نیکو ثبت مجموعه ثبتی با کارشناسانی مجرب و باتجربه هست که فعالیت
          خود را در مرکز رشد با شرکت های نوپا و دانش بنیان آغاز کرد وهم
          اکنون فعالیت هایش را با انجام امور ثبتی شرکتهای مختلف در تمام
          شهرهای ایران بصورت حضوری و دورکاری گسترده نموده است و درخدمت شما
          عزیزان وکسب و کارتان می باشد، تا شما با خیال راحت به اداره امور و
          مدیریت کسب وکار خود بپردازید
          اکنون فعالیت هایش را با انجام امور ثبتی شرکتهای مختلف در تمام
          شهرهای ایران بصورت حضوری و دورکاری گسترده نموده است و درخدمت شما
          عزیزان وکسب و کارتان می باشد، تا شما با خیال راحت به اداره امور و
          مدیریت کسب وکار خود بپردازید
        </p>
   
      </div>
    </div>
</div>



     
</div>
</section>

<section class="mb-5">
  <div class="container text-center my-bg-blue khabarname">
    <h1 class="sahel fs-2 fw-bold my-t-color py-3">
      عضویت در خبرنامه نیکوثبت
    </h1>

    <h2 class="sahel fs-5 fw-bold pb-3">
      با وارد کردن شماره موبایل خود در کادر زیر از 10 درصد تخفیف بهرمند شوید
    </h2>
    <div class="row d-flex justify-content-center">
      <form class="col-12 col-lg-4 row">
        <div class="input-group mb-5 pb-2">
          <input type="text" class="form-control" placeholder="شماره تلفن همراه" aria-describedby="button-addon2" />
          <button class="btn btn-primary " type="button" id="button-addon2">
            عضویت
          </button>
        </div>
      </form>
    </div>
  </div>
</section>


<a href="javascript:" id="scrool-to-top">
    <i class="fas fa-chevron-up"></i>
 </a>


<?php include_once('./footer.php') ?>