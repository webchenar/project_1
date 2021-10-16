<?php include_once('./header.php');


$i = 0;

foreach ($_FILES['img']['name'] as $img) {

    echo $i + 1 . '<br>';
    //move_uploaded_file($_FILES['img']['tmp_name'][$i], 'img' . $_FILES['img']['name'][$i]);
    $i++;
}

/*echo $_FILES['img']['name'];
print_r($_POST);
echo '<br><br><br>';
print_r($_FILES);
if (isset($_FILES)) {
    var_dump($_FILES);
    move_uploaded_file($_FILES['img']['tmp_name'], 'img' . $_FILES['img']['name']);
}*/

?>

<div class="container">
    <form enctype="multipart/form-data" action="compani_register.php" method="POST">

        <label for="inputfname" class="form-label d-block">چه نوع شرکتی ثبت میکنید:*</label>
        <select name="noesherkat" class="btn-outline-primary rounded p-1 mb-3 " aria-required="true" aria-invalid="false">
            <option value="ثبت شرکت با مسئولیت محدود"><span>ثبت شرکت با مسئولیت محدود</span></option>
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

        <div class="col-12 ">
            <label for="inputfname" class="form-label">نام: <span class="t-red">*</span></label>
            <input type="text" name="fname" class="form-control" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : null; ?>" " id=" validationCustom03" placeholder="لطفا نام خود را وارد کنید" aria-label="First name" required>
            <div class="invalid-feedback">
                وارد کردن نام اجباریست
            </div>
        </div>

        <div class="col-md-12 my-3">
            <label for="inputfname" class="form-label">نام خانوادگی:<span class="t-red">*</span></label>

            <input type="text" name="lname" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : null; ?>" id="validationCustom03" class="form-control" placeholder="لطفا نام خانوادگی خود را وارد کنید" required>

            <div class="invalid-feedback">
                وارد کردن نام خانوادگی اجباریست
            </div>
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
            <label for="inputfname" class="form-label col-12">کپی شناسنامه و کارت ملی مدیرعامل:<span class="t-red">*</span></label>
            <div class="file-loading">
                <input id="file-0c" name="imgAmdmin[]" class="file" type="file" multiple>
            </div>
            <hr>
        </div>

        <div class="input-group mb-3 row ">
            <label for="inputfname" class="form-label col-12">کپی شناسنامه و کارت ملی اعضای هیات مدیره:<span class="t-red">*</span></label>
            <div class="file-loading">
                <input id="file-0c" name="imgMember[]" class="file" type="file" multiple>
            </div>
            <hr>
        </div>

    </form>


</div>

<?php include_once('./footer.php') ?>