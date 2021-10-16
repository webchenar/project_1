<?php include_once('header.php') ?>
<?php
var_dump($_POST);




if (isset($_POST['namesherkat']) && isset($_POST['shomaresabtsherkat']) && isset($_POST['shenasemelli']) && isset($_POST['rozname']) && isset($_POST['sahamdar'])) {

    $_SESSION['chek'] = true;

    if (!preg_match("/[0-9]/", $_POST['shomaresabtsherkat'])) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>فرمت شماره ثبت اشتباه است</strong>
      </div>';
      $_SESSION['chek'] = false;
    }

    if (!preg_match("/[0-9]/", $_POST['shenasemelli'])) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>فرمت شناسه ملی شرکت اشتباه است</strong>
      </div>';
      $_SESSION['chek'] = false;
    }

    if (!preg_match("/[0-9]/", $_POST['sahamdar'])) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>تعداد سهام داران باید در بازه اعداد باشد</strong>
      </div>';
      $_SESSION['chek'] = false;
    }


    if (!(preg_match("/[0-9]/", $_POST['minute']) && preg_match("/[0-9]/", $_POST['hours']) && preg_match("/[0-9]/", $_POST['day']) && preg_match("/[0-9]/", $_POST['mounth']) && preg_match("/[0-9]/", $_POST['years']))) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>لطفا تاریخ را وارد کنید</strong>
      </div>';
      $_SESSION['chek'] = false;
    }

    if (preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['rozname']))) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>نام روزنامه اشتهباه است</strong>
      </div>';
      $_SESSION['chek'] = false;
    }

    if ($_POST['sahamdar'] > 12 || $_POST['sahamdar'] < 3) {
        $_SESSION['chek'] = false;
    }


    //Step Dovome

    if ($_SESSION['chek']) {
        
        $_SESSION['namesherkat'] = $_POST['namesherkat'];
        $_SESSION['shomaresabtsherkat'] = $_POST['shomaresabtsherkat'];
        $_SESSION['shenasemelli'] = $_POST['shenasemelli'];
        $_SESSION['minute'] = $_POST['minute'];
        $_SESSION['hours'] = $_POST['hours'];
        $_SESSION['day'] = $_POST['day'];
        $_SESSION['mounth'] = $_POST['mounth'];
        $_SESSION['years'] = $_POST['years'];
        $_SESSION['rozname'] = $_POST['rozname'];
        $_SESSION['sahamdar'] = $_POST['sahamdar'];
        $_SESSION['step2'] = true;
        $_SESSION['count'] = 1;
        $_SESSION['chek'] = true;
    } else {
        $_SESSION['step2'] = false;
    }
}

?>

<?php
if (isset($_SESSION['step2'])) {
    var_dump($_SESSION);
?>

    <?php
    if ($_SESSION['count'] <= $_SESSION['sahamdar']) {
    ?>


        <div class="alert alert-info container" role="alert">
            لطفا مشخصات سهام دار <?php echo $_SESSION['count']; ?> را وارد کنید(تعداد سهام داران <?php echo $_SESSION['sahamdar']; ?>)
        </div>

        <div class="form">
            <div class="container">
                <form class="my-5 needs-validation" action="tamdid_sherkat.php" method="POST" novalidate>



                    <div class="row align-items-stretch">


                        <div class="col-12 col-md-5 border p-3 my-2 m-sm-3">

                            <div class="col-12 ">
                                <label for="inputfname" class="form-label">نام: <span class="t-red">*</span></label>
                                <input type="text" name="fname" class="form-control" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : null; ?>" " id=" validationCustom03" placeholder="لطفا نام خود را وارد کنید" aria-label="First name" required>
                                <div class="invalid-feedback">
                                    وارد کردن نام اجباریست
                                </div>
                            </div>

                            <div class="col-md-12 my-3">
                                <label for="inputlname" class="form-label">نام خانوادگی:<span class="t-red">*</span></label>

                                <input type="text" name="lname" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : null; ?>" id="validationCustom03" class="form-control" placeholder="لطفا نام خانوادگی خود را وارد کنید" required>

                                <div class="invalid-feedback">
                                    وارد کردن نام خانوادگی اجباریست
                                </div>
                            </div>

                            <div class=" col-12 my-3">
                                <label for="inputfname" class="form-label">شماره همراه:<span class="t-red">*</span></label>

                                <input type="text" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه خود را وارد کنید" maxlength="11" required>

                                <div class="invalid-feedback">
                                    وارد کردن شماره همراه اجباریست
                                </div>
                                <span id="spanmsg"></span>
                            </div>

                            <div class="col-12 my-3 ">
                                <label for="codmeli" class="form-label">کد ملی:</label>

                                <input type="text" name="codmeli" class="form-control" value="<?php echo isset($_POST['codmeli']) ? $_POST['codmeli'] : null; ?>" placeholder="لطفا ایمیل خود را وارد کنید">

                                <div class="invalid-feedback">
                                    وارد کردن شماره همراه اجباریست
                                </div>
                                <span id="spanmsg"></span>

                            </div>

                            <div class="col-12 my-3">

                                <label for="inputfname" class="form-label">تعداد سهام:</label>

                                <input type="text" name="cellPhone" class="form-control" value="<?php echo isset($_POST['cellPhone']) ? $_POST['cellPhone'] : null; ?>" placeholder="لطفا شماره تلفن ثابت خود را وارد کنید" maxlength="11">

                            </div>

                            <label for="mounth" class="form-label d-inline"> سمت در جلسه: </label>
                            <select name="mounth" class="btn-outline-success rounded p-1 mb-3 d-inline" aria-required="true" aria-invalid="false">
                                <option>- ماه -</option>
                                <option value="1">رئیس جلسه</option>
                                <option value="3">ناظر جلسه</option>
                                <option value="4">منشی جلسه</option>
                            </select>
                            <br>
                            <label for="mounth" class="form-label "> سمت نهایی: </label>
                            <select name="mounth" class="btn-outline-success rounded p-1 mb-3 " aria-required="true" aria-invalid="false">
                                <option>- ماه -</option>
                                <option value="1">مدیر عامل و رئیس هیئت مدیره</option>
                                <option value="3">رئیس هیئت میره</option>
                                <option value="4">نائب رئیس هیئت مدیره</option>
                                <option value="4">عضو اصلی هیئت مدیره</option>
                            </select>

                        </div>


                    <?php
                    $_SESSION['count']++;
                }
                    ?>
                    <!--<div class="d-none d-md-block col-md-6 border my-2 shadow-sm">
                        <h5 class="sahel fs-5 my-3 ">با ثبت نام در نیکو ثبت از خدمات زیر برخوردار میشوید:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h6 class="fs-6 my-1">عضویت رایگان در خبرنامه</h6>
                            </li>
                            <li class="list-group-item ">استعلام رایگان برند و نام شرکت</li>
                            <li class="list-group-item">ثبت انواع شرکت</li>
                            <li class="list-group-item">تغییرات وتمدید شرکت</li>
                            <li class="list-group-item">ثبت علائم تجاری، لوگو و برند</li>
                            <li class="list-group-item">اخذکارت بازرگانی</li>
                            <li class="list-group-item">ثبت اختراع</li>
                            <li class="list-group-item">و ده‌ها خدمات ثبتی دیگر...</li>
                        </ul>


                    </div>-->


                    <div class="col-12 my-5 d-block ">
                        <button type="submit" class="btn w-100 btn-primary">ادامه</button>
                    </div>

                </form>
            </div>
        </div>

    <?php
} else {
    ?>

        <div class="form">
            <div class="container">
                <form class="my-5 needs-validation" action="tamdid_sherkat.php" method="POST" novalidate>



                    <div class="row align-items-stretch">
                        <div class="col-12 col-md-6">

                            <div class="col-12 ">
                                <label for="namesherkat" class="form-label">نام شرکت: <span class="t-red">*</span></label>
                                <input type="text" name="namesherkat" class="form-control" value="<?php echo isset($_POST['namesherkat']) ? $_POST['namesherkat'] : null; ?>" " id=" validationCustom03" placeholder="لطفا نام شرکت  را وارد کنید" aria-label="First name" required>
                                <div class="invalid-feedback">
                                    وارد کردن نام شرکت اجباریست
                                </div>
                            </div>

                            <div class="col-md-12 my-3">
                                <label for="shomaresabtsherkat" class="form-label">شماره ثبت :<span class="t-red">*</span></label>

                                <input type="text" name="shomaresabtsherkat" value="<?php echo isset($_POST['shomaresabtsherkat']) ? $_POST['shomaresabtsherkat'] : null; ?>" id="validationCustom03" class="form-control" placeholder="لطفا شماره ثبت شرکت را وارد کنید" required>

                                <div class="invalid-feedback">
                                    وارد کردن شماره ثبت اجباریست
                                </div>
                            </div>

                            <div class=" col-12 my-3">
                                <label for="shenasemelli" class="form-label">شناسه ملی شرکت:<span class="t-red">*</span></label>

                                <input type="text" name="shenasemelli" value="<?php echo isset($_POST['shenasemelli']) ? $_POST['shenasemelli'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره شناسه ملی شرکت را وارد کنید" required>

                                <div class="invalid-feedback">
                                    وارد کردن شماره همراه اجباریست
                                </div>
                                <span id="spanmsg"></span>
                            </div>

                            <div class="col-12 my-3">

                                <div class="time d-block d-xl-inline">
                                    <label for="date_time" class="form-label d-block">ساعت و تاریخ جلسه هیئت مدیره:<span class="t-red">*</span></label>
                                    <label for="minute" class="form-label d-inline"> ساعت: </label>
                                    <select name="minute" class="btn-outline-success rounded p-1 mb-3 d-inline " aria-required="true" aria-invalid="false">
                                        <option>- دقیقه -</option>
                                        <option value="0"></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
                                        <option value="51">51</option>
                                        <option value="52">52</option>
                                        <option value="53">53</option>
                                        <option value="54">54</option>
                                        <option value="55">55</option>
                                        <option value="56">56</option>
                                        <option value="57">57</option>
                                        <option value="58">58</option>
                                        <option value="59">59</option>
                                    </select>


                                    <label for="hours" class="form-label"> : </label>
                                    <select name="hours" class="btn-outline-success rounded p-1 mb-3 d-inline " aria-required="true" aria-invalid="false">
                                        <option>- ساعت -</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                    </select>

                                </div>


                                <label for="day" class="form-label d-inline"> روز: </label>
                                <select name="day" class="btn-outline-success rounded p-1 mb-3 d-inline" aria-required="true" aria-invalid="false">
                                    <option>- روز -</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>

                                <label for="mounth" class="form-label d-inline"> : </label>
                                <select name="mounth" class="btn-outline-success rounded p-1 mb-3 d-inline" aria-required="true" aria-invalid="false">
                                    <option>- ماه -</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>




                                <label for="years" class="form-label d-inline"> : </label>
                                <select name="years" class="btn-outline-success rounded p-1 mb-3 d-inline" aria-required="true" aria-invalid="false">
                                    <option>- سال -</option>
                                    <option value="1400">1400</option>
                                    <option value="1401">1401</option>

                                </select>


                            </div>



                            <div class="col-12 my-3">

                                <label for="rozname" class="form-label">اسم روزنامه کثیر الانتشار:<span class="t-red">*</span></label>

                                <input type="text" name="rozname" class="form-control" value="<?php echo isset($_POST['rozname']) ? $_POST['rozname'] : null; ?>" placeholder="لطفا اسم روزنامه کثیر الانتشار را وارد کنید" required>
                                <div class="invalid-feedback">
                                    وارد کردن نام روزنامه اجباریست
                                </div>
                            </div>


                            <label for="sahamdar" class="form-label d-inline"> تعداد سهامداران حاظر در جلسه: </label>
                            <select name="sahamdar" class="btn-outline-success rounded p-1 mb-3 d-inline" aria-required="true" aria-invalid="false">
                                <option>- تعداد سهامداران -</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>


                        </div>

                        <div class="d-none d-md-block col-md-6 border my-2 shadow-sm">
                            <h5 class="sahel fs-5 my-3 ">با ثبت نام در نیکو ثبت از خدمات زیر برخوردار میشوید:</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <h6 class="fs-6 my-1">عضویت رایگان در خبرنامه</h6>
                                </li>
                                <li class="list-group-item ">استعلام رایگان برند و نام شرکت</li>
                                <li class="list-group-item">ثبت انواع شرکت</li>
                                <li class="list-group-item">تغییرات وتمدید شرکت</li>
                                <li class="list-group-item">ثبت علائم تجاری، لوگو و برند</li>
                                <li class="list-group-item">اخذکارت بازرگانی</li>
                                <li class="list-group-item">ثبت اختراع</li>
                                <li class="list-group-item">و ده‌ها خدمات ثبتی دیگر...</li>
                            </ul>


                        </div>

                    </div>


                    <div class="col-12 col-sm-3 my-4">
                        <button type="submit" class="btn w-100 btn-primary">ادامه</button>
                    </div>

                </form>

            </div>
        </div>
    <?php
}
    ?>



    <?php include_once('footer.php') ?>