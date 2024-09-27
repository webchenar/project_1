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


<div class="container-fluid">
  <div class="row">
    <div class="col-12 img-filter">
      <img class="slid" src="img/5.jpg" alt="">
      <div class=" w-50 m-auto h-auto text-on-img">
        <span class="fs-5 sahel justifuy ">نیکوثبت مجموعه ای ثبتی جهت انجام کلیه امور ثبتی کسب وکار
          شما</span>
        <p class=" fs-5 justifuy my-3 sahel">
          مجموعه نیکوثبت کسب وکار شما را از بسیاری جهات لمس میکند با خیال
          راحت امور ثبتیتان را به ما بسپارید و به مدیریت کسب وکار خود
          بپردارید.
        </p>

        <a class="btn btn-outline-warning " href="moshavereh.php">درخواست مشاوره</a>
        <a class=" btn btn-outline-warning my-1 mx-2 " href="khadamat.php">فهرست خدمات نیکو ثبت</a>
        <a class=" btn btn-tamdid mt-lg-0" href="./tamdid_sherkat.php">
          تمدید شرکت سهامی خاص</a>


      </div>
    </div>
  </div>
</div>


<section class="mb-4 bg-light">
  <div class="container">
    <div class="titr text-center">
      <h1 class="px-3 
              sahel
              my-green
              d-inline-flex
              titr
              fw-bold
              border-bottom border-4 border-primary
              lh-lg
            ">
        معرفی خدمات نیکوثبت
      </h1>

    </div>

    <div class="row Services-nikoosabt">
      <div class="col-12 col-md-6 col-lg-4 my-4">

        <div data-aos="flip-right" data-aos-offset="200" data-aos-duration="800" data-aos-easing="ease-in-out" class="card card-height">
          <div class="card-body border-1 ">
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

      <div class="col-12 col-md-6 col-lg-4 my-4">
        <div data-aos="flip-right" data-aos-offset="200" data-aos-duration="800" data-aos-easing="ease-in-out" class="card card-height">
          <div class="card-body border-1 ">
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

      <div class="col-12 col-md-6 col-lg-4 my-4">
        <div data-aos="flip-right" data-aos-offset="200" data-aos-duration="800" data-aos-easing="ease-in-out" class="card card-height">
          <div class="card-body border-1 ">
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
      <div class="col-12 col-md-6 col-lg-4 my-4">
        <div data-aos="flip-up" data-aos-duration="800" data-aos-easing="ease-in-out" class="card card-height">
          <div class="card-body border-1 ">
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

      <div class="col-12 col-md-6 col-lg-4 my-4">
        <div data-aos="flip-up" data-aos-duration="800" data-aos-easing="ease-in-out" class="card card-height">
          <div class="card-body border-1 ">
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




      <div class="col-12 col-md-6 col-lg-4 my-4">
        <div data-aos="flip-up" data-aos-duration="800" data-aos-easing="ease-in-out" class="card card-height">
          <div class="card-body border-1 ">
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
      <div class="col-12 col-md-6 col-lg-4 my-4">
        <div data-aos="flip-down" data-aos-duration="800" data-aos-easing="ease-in-out" class="card card-height">
          <div class="card-body border-1 ">
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

      <div class="col-12 col-md-6 col-lg-4 my-4">
        <div data-aos="flip-down" data-aos-duration="800" data-aos-easing="ease-in-out" class="card card-height">
          <div class="card-body border-1 ">
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

      <div class="col-12 col-md-6 col-lg-4 my-4">
        <div data-aos="flip-down" data-aos-duration="800" data-aos-easing="ease-in-out" class="card card-height">
          <div class="card-body border-1 ">
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
          <a href="#"><img src="img/sabt.jpg" class="img-fluid" alt=""></a>
        </div>
</section>
</div>
</div>
</div>

<section class=" mb-5 bg-light">
  <div class="container">
    <div class="row ">


      <div class="col-12 col-md-6 moshavereh mt-2">
        <h1 data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out" class="
                sahel
                my-green
                d-inline-flex
                titr
                fw-bold
                border-bottom border-4 border-primary
                p-2
              ">
          مشاوره عالی ومفید توسط بهترین مجموعه ثبتی
        </h1>
        <p data-aos="fade-left" data-aos-duration="1000" data-aos-offset="200" data-aos-delay="500" data-aos-easing="liner" class="mt-2 mb-5 fs-5 justifuy ">
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

      <div class="d-none d-md-block col-md-6 moshavereh-img">
        <img data-aos="fade-right" data-aos-duration="1000" data-aos-offset="200" data-aos-delay="1000" data-aos-easing="liner" class="img-fluid" src="./img/Consulting-rafiki.png" alt="" />
      </div>
      <p class="text-center fs-5">اگر به مشاوره نیاز دارید <a data-aos="zoom-in-down" data-aos-duration="500" data-aos-offset="200" class="link-moshavereh" href="moshavereh.php">اینجا </a> کلیک کنید</p>
    </div>
  </div>
</section>



<section class="">
  <div class="container">
    <div class="row">

      <div class=" col-md-6">

        <h1 data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-out" class="
                sahel
                my-green
                d-inline-flex
               titr
                fw-bold
                border-bottom border-4 border-primary
                p-2
              ">
          چرا باید نیکو ثبت را انتخاب کنیم؟
        </h1>
        <img data-aos="fade-left" data-aos-duration="1000" data-aos-offset="200" data-aos-delay="500" data-aos-easing="liner" class="img-fluid mt-2 company" src="./img/Company-amico.png" alt="" />
      </div>
      <div class="col-12 col-md-6 mt-5  define-niko">
        <p data-aos="fade-left" data-aos-duration="1000" data-aos-offset="200" data-aos-delay="900" data-aos-easing="liner" class="mt-5 fs-5 justifuy">
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


<!-- nikosabtiha -->



         <div class="container-fluid bg-light my-5">
           <div class="titr text-center">
      <h1 class="px-3 
              sahel
              my-green
              d-inline-flex
              titr
              fw-bold
              border-bottom border-4 border-primary
              lh-lg
              
            ">
      
      نیکوثبتی ها
    </h1>

  </div>
  <div class="row">
    <div class="owl-carousel owl-theme">
      <div class="col-md-3 w-100">
        <div class="item">
          <div class="card owl-coustom ">
            <div class="image d-flex justify-content-center mt-5">
              <img src="./img/bokbok.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body p-0 m-0">
              <a href="#">
              <h6 class="card-title text-center p-3 fs-5">شرکت فراوردهای انجیر تین استهبان</h6>
              </a>
              <p class="card-text pb-2 p-1">موضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع ف
             </p>
        
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 w-100">
        <div class="item">
          <div class="card owl-coustom">
          <div class="image d-flex justify-content-center mt-5">
            <img src="./img/hesam-hasannejad.jpg" class="card-img-top" alt="...">
          </div>
            <div class="card-body p-0 m-0">
              <a href="#">
              <h6 class="card-title text-center p-3 fs-5">شرکت حسام تجارت رسام</h6>
              </a>
              <p class="card-text pb-2 p-1">موضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع ف
             </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 w-100">
        <div class="item">
          <div class="card owl-coustom">
          <div class="image d-flex justify-content-center mt-5">
            <img src="./img/arvin.jpg" class="card-img-top" alt="...">
          </div>
            <div class="card-body p-0 m-0">
              <a href="#">
              <h6 class="card-title text-center p-3 fs-5">شرکت آروین سپهرایلیا سازه</h6>
              </a>
              <p class="card-text pb-2 p-1">موضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع ف
             </p>
            
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 w-100">
        <div class="item">
          <div class="card owl-coustom">
          <div class="image d-flex justify-content-center mt-5">
            <img src="./img/arvin.jpg" class="card-img-top" alt="...">
          </div>
            <div class="card-body p-0 m-0">
              <a href="#">
              <h6 class="card-title text-center p-3 fs-5">شرکت آروین سپهرایلیا سازه</h6>
              </a>
              <p class="card-text pb-2 p-1">موضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع ف
             </p>
            
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 w-100">
        <div class="item">
          <div class="card owl-coustom">
          <div class="image d-flex justify-content-center mt-5">
            <img src="./img/arvin.jpg" class="card-img-top" alt="...">
          </div>
            <div class="card-body p-0 m-0"><a href="#">
              <h6 class="card-title text-center p-3 fs-5">شرکت آروین سپهرایلیا سازه</h6>
              </a>
              <p class="card-text pb-2 p-1">موضوع فعالیت : خرید، فروش ، صادرات و واردات انجیرخرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : 
              
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 w-100">
        <div class="item">
          <div class="card owl-coustom">
          <div class="image d-flex justify-content-center mt-5">
            <img src="./img/arvin.jpg" class="card-img-top" alt="...">
          </div>
            <div class="card-body p-0 m-0">
              <a href="#">
              <h6 class="card-title text-center p-3 fs-5">شرکت آروین سپهرایلیا سازه</h6>
              </a>
              <p class="card-text pb-2 p-1">موضوع فعالیت : خرید، فروش ، صادرات و وارداتیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع ف
             </p>
          
            </div>
          </div>
        </div>
      </div>


      <div class="col-md-3 w-100">
        <div class="item">
          <div class="card owl-coustom">
            <div class="image d-flex justify-content-center mt-5">
              <img src="./img/bokbok.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card-body p-0 m-0">
              <a href="#">
              <h6 class="card-title text-center p-3 fs-5">خرید،فروش،صادرات و واردات انجیر</h6>
            </a>
              <p class="card-text pb-2 p-1">موضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع فعالیت : خرید، فروش ، صادرات و واردات انجیر و انواع خشکبارموضوع ف
             </p>
             
            </div>
          </div>

        </div>
      </div>




  </div>
  </div>
</div>

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





<?php include_once('./footer.php') ?>