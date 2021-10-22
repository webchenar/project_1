<?php
$title = 'تمدید شرکت سهامی خاص';
include_once('./header.php') ?>
<?php

$data = new DataBase();

_function::logIn();

var_dump($_FILES);

if (isset($_POST['namesherkat']) && isset($_POST['shomaresabtsherkat']) && isset($_POST['shenasemelli']) && isset($_POST['rozname']) && isset($_POST['sahamdar']) && isset($_POST['tedadsaham']) && isset($_POST['hozor']) && isset($_FILES['imgRozname']['name']) && empty($_SESSION['step2'])) {


    $chek = _function::validation_img($_FILES['imgRozname']['name'], $_FILES['imgRozname']['size'], $_FILES['imgRozname']['type']);

    if (!preg_match("/[0-9]/", $_POST['shomaresabtsherkat'])) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>فرمت شماره ثبت اشتباه است</strong>
      </div>';
        $chek = false;
    }

    if (!preg_match("/[0-9]/", $_POST['shenasemelli'])) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>فرمت شناسه ملی شرکت اشتباه است</strong>
      </div>';
        $chek = false;
    }

    if (!preg_match("/[0-9]/", $_POST['sahamdar'])) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>لطفا تعداد سهامداران را مشخص کنید</strong>
      </div>';
        $chek = false;
    }

    if (preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['adress']))) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
      <strong>آدرس را به صورت فارسی وارد کنید</strong>
    </div>';
        $chek = false;
    }

    if (!preg_match("/[0-9]/", $_POST['sarmaie'])) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>فرمت سرمایه ثبت شده اشتباه است</strong>
      </div>';
        $chek = false;
    }

    if (!preg_match("/[0-9]/", $_POST['tedadsaham'])) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>لطفا تعداد سهامداران را مشخص کنید</strong>
      </div>';
        $chek = false;
    }


    if (!(preg_match("/[0-9]/", $_POST['minute'])) && !(preg_match("/[0-9]/", $_POST['hours'])) && !(preg_match("/[0-9]/", $_POST['day'])) && !(preg_match("/[0-9]/", $_POST['mounth'])) && !(preg_match("/[0-9]/", $_POST['years']))) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>لطفا تاریخ را وارد کنید</strong>
      </div>';
        $chek = false;
    }

    if (preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['rozname']))) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>نام روزنامه اشتهباه است</strong>
      </div>';
        $chek = false;
    }


    if ($_POST['sahamdar'] > 12 || $_POST['sahamdar'] < 3) {
        $chek = false;
    }

    if (strcmp($_POST['hozor'], '- کلیه/اکثریت -') == 0) {
        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>لطفا مشخص کنید جلسه با حضور کلیه و یا اکثریت سهامداران برگزار شده است</strong>
      </div>';
    }



    //Step Dovome

    if ($chek == true) {

        $_SESSION['shenasemelli'] = $_POST['shenasemelli'];
        $_SESSION['sahamdaran'] = $_POST['sahamdar'];
        $_SESSION['step2'] = true;
        $_SESSION['count'] = 0;
        $_SESSION['tedadsaham'] = $_POST['tedadsaham'];

        $data->insertSjtamdidSahamiKhas(isset($_SESSION['phone']) ? $_SESSION['phone'] : $_COOKIE['phone'], $_POST['shenasemelli'], $_POST['namesherkat'], $_POST['shomaresabtsherkat'], $_POST['sarmaie'], $_POST['hours'] . '-' . $_POST['minute'], $_POST['years'] . '-' . $_POST['mounth'] . '-' . $_POST['day'], $_POST['rozname'], $_POST['adress'], $_SESSION['sahamdaran'], $_POST['tedadsaham'], $_POST['hozor'], '');


        //پیدا کردن آخرین صورت جلسه ثبت شده(صورتجلسه ای که در خط بالا ثب شد)
        $sj = $data->searchAll('sj_tamdid_sahami_khas', 'rel_user', isset($_SESSION['phone']) ? $_SESSION['phone'] : $_COOKIE['phone']);
        $sj_id = $sj[0]['sj_id'];

        foreach ($sj as $id) {
            if ($id['sj_id'] > $sj_id) {
                $sj_id = $id['sj_id'];
            }
        }

        mkdir("./upload/img/sj_tamdid_sahami_khas/$sj_id");
        mkdir("./upload/img/sj_tamdid_sahami_khas/$sj_id/rozname");
        //move_uploaded_file($_FILES['imgRozname']['tmp_name'], "./upload/img/sj_tamdid_sahami_khas/rozname/$sj_id/" . $_FILES['imgRozname']['name']);

        move_uploaded_file($_FILES['imgRozname']['tmp_name'], "./upload/img/sj_tamdid_sahami_khas/$sj_id/rozname/" . $_FILES['imgRozname']['name']);

        $data->updateSjtamdidiSahamiKhas('rooz_adress_file', "./upload/img/sj_tamdid_sahami_khas/$sj_id/rozname/" . $_FILES['imgRozname']['name'], $sj_id);

        $_SESSION['tedadsahamentekhabi'] = 0;
    } else {
        $_SESSION['step2'] = false;
    }
}

?>

<?php

if (isset($_SESSION['step2']) and  $_SESSION['step2'] == true and empty($_SESSION['step3']) and empty($_SESSION['stepfinish'])) {

    $sj = $data->searchAll('sj_tamdid_sahami_khas', 'rel_user', isset($_SESSION['phone']) ? $_SESSION['phone'] : $_COOKIE['phone']);


    $sj_id = $sj[0]['sj_id'];

    foreach ($sj as $id) {
        if ($id['sj_id'] > $sj_id) {
            $sj_id = $id['sj_id'];
        }
    }

    $members = $data->searchAll('sahamdaran', 'id_sj_tamdid_sahami_khas', $sj_id);

?>

    <?php
    if ($_SESSION['count'] <= $_SESSION['sahamdaran']) {

        $chek = true;



        echo $sj_id;


        if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['sahm']) && isset($_POST['sematjalase']) && isset($_POST['sematnahaie']) && isset($_FILES['imgSahamdar']['name'])) {


            $chek = _function::validation_img($_FILES['imgSahamdar']['name'], $_FILES['imgSahamdar']['size'], $_FILES['imgSahamdar']['type']);

            if (isset($_POST['phone'])) {
                if (!preg_match("/^09[0-9]{9}$/", $_POST['phone'])) {
                    echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>فرمت شماره همراه اشتباه است</strong>
                  </div>';
                    $chek = false;
                }
            }

            if (isset($_POST['codmeli'])) {
                if (!preg_match("/[0-9]$/", $_POST['codmeli'])) {
                    echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>کد ملی باید به صورت عدد وارد شود</strong>
                  </div>';
                    $chek = false;
                }
            }

            if (isset($_POST['sahm'])) {
                if ($_POST['sahm'] == 0) {
                    echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>باید تعداد سهام را برای سهامدار مشخص کنید</strong>
                  </div>';
                    $chek = false;
                } else if (!($_SESSION['sahamdaran'] == $_SESSION['count']) && $_SESSION['tedadsaham'] - $_SESSION['tedadsahamentekhabi'] <= 0) {
                    echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>همه سهام های ثبت شده و یا بیشتر از آن نمیتواند به این سهامدار اختصاص داده شود</strong>
                  </div>';
                    $chek = false;
                }
            }

            if (isset($_POST['sahm'])) {
                if (!preg_match("/[0-9]$/", $_POST['sahm'])) {
                    echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>تعداد سهام باید به در بازه اعداد وارد شود</strong>
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


            if (strcmp($_POST['sematjalase'], '- انتخاب سمت در جلسه -') == 0) {
                echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>لطفا سمت در جلسه را مشخص کنید</strong>
              </div>';
                $chek = false;
            }


            /*if (strcmp($_POST['sematjalase'], 'ناظر جلسه') == 0) {

                if ($_SESSION['nazer'] > 2) {
                    echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>هر دو ناظر جلسه انتخاب شده است</strong>
                  </div>';
                    $chek = false;
                }
            }*/




            if (!empty($members) && $members != false && isset($_POST)) {

                foreach ($members as $member) {

                    if (strcmp($member['vazife_jalase'], $_POST['sematjalase']) == 0 && strcmp('ناظر جلسه', $_POST['sematjalase']) != 0) {
                        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>سمت ' . $_POST['sematjalase'] . ' انتخاب شده است</strong>
                      </div>';
                        $chek = false;
                        break;
                    }

                    if ($member['phone'] == $_POST['phone']) {
                        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>کاربری با این شماره تماس  ثبت کرده اید</strong>
                      </div>';
                        $chek = false;
                        break;
                    }

                    if ($member['meli_code'] == $_POST['codmeli']) {
                        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>کاربری با این کد ملی  ثبت کرده اید</strong>
                      </div>';
                        $chek = false;
                        break;
                    }

                    if (strcmp($_POST['sematjalase'], 'ناظر جلسه') != 0 and strcmp($member['vazife_jalase'], $_POST['sematjalase']) == 0) {
                        echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>سمت   ' . $_POST['sematjalase'] . ' انتخاب شده است</strong>
                      </div>';
                        $chek = false;
                        break;
                    }

                    if (strcmp($_POST['sematjalase'], 'ناظر جلسه') == 0 and isset($_SESSION['sematjalase'])) {
                        if ($_SESSION['sematjalase'] == 2) {
                            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>هر دو ناظر جلسه انتخاب شده است</strong>
                          </div>';
                            $chek = false;
                            break;
                            break;
                        }
                    }
                }
            }

            /*if ($data->searchFunction('sahamdaran', 'id_sj_tamdid_sahami_khas', $sj_id)->rowCount() == 1 ) {
                echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>سمت جلسه  ' . $_POST['sematjalase'] . ' انتخاب شده است</strong>
              </div>';
                $chek = false;
            }*/

            if (strcmp($_POST['sematnahaie'], '- انتخاب سمت نهایی -') == 0) {
                echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>لطفا سمت نهایی را مشخص کنید</strong>
              </div>';
                $chek = false;
            }


            /*if (!empty($data->search('sahamdaran', 'meli_code', $_POST['codmeli'])) && !empty($data->search('sahamdaran', 'phone', $_POST['phone']))) {
                echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>کاربری با این شماره تماس و یا کد ملی ثبت شده</strong>
              </div>';
                $chek = false;
            }*/

            if ($chek) {


                if ($data->searchFunction('sahamdaran', 'id_sj_tamdid_sahami_khas', $sj_id)->rowCount() == 0) {
                    mkdir("./upload/img/sj_tamdid_sahami_khas/$sj_id/sahamdar");
                }

                mkdir("./upload/img/sj_tamdid_sahami_khas/$sj_id/sahamdar/" . $_POST['phone']);
                $adressSave = "./upload/img/sj_tamdid_sahami_khas/$sj_id/sahamdar/" . $_POST['phone'] . '/' . $_FILES['imgSahamdar']['name'];

                move_uploaded_file($_FILES['imgSahamdar']['tmp_name'], $adressSave);

                $data->inserMemberSjtamdidSahamiKhas($sj_id, $_POST['fname'], $_POST['lname'], $_POST['phone'], $_POST['codmeli'], $_POST['sahm'], '', $adressSave, $_POST['sematjalase'], 'سهامدار', $_POST['sematnahaie']);

                $_SESSION['count']++;


                if (strcmp($_POST['sematjalase'], 'ناظر جلسه') == 0) {
                    echo 1;
                    if (empty($_SESSION['sematjalase'])) {
                        $_SESSION['sematjalase'] = 1;
                        echo 2;
                    } else {
                        echo 1;
                        $_SESSION['sematjalase']++;
                    }
                }

                if ($_SESSION['count'] == $_SESSION['sahamdaran']) {
                    $_SESSION['step3'] = true;
                }
                $_SESSION['tedadsahamentekhabi'] += $_POST['sahm'];

                $members = $data->searchAll('sahamdaran', 'id_sj_tamdid_sahami_khas', $sj_id);

                $_POST = NULL;

                //var_dump($_POST);
            }
        }
    ?>

        <?php if (empty($_SESSION['step3']) and empty($_SESSION['stepfinish'])) { ?>

            <div class="alert alert-info container" role="alert">
                لطفا مشخصات سهام دار <?php echo $_SESSION['count'] + 1; ?> را وارد کنید(تعداد سهام داران <?php echo $_SESSION['sahamdaran']; ?>)
            </div>

            <div class="alert alert-info container" role="alert">
                تعداد سهام های ثبت شده برابر با <?php echo $_SESSION['tedadsaham'] ?> است.(که تا کنون تعداد <?php echo $_SESSION['tedadsahamentekhabi'] ?> انتخاب شده است.)
            </div>

            <div class="form">
                <div class="container">
                    <form class="my-5 needs-validation" action="tamdid_sherkat.php" enctype="multipart/form-data" method="POST" novalidate>


                        <div class="row align-items-stretch">


                            <div class="col-12 col-md-6 border p-3 my-2 m-sm-3">

                                <div class="col-12 ">
                                    <label for="inputfname" class="form-label">نام: <span class="t-red">*</span></label>
                                    <input type="text" name="fname" class="form-control" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : null; ?>" " id=" validationCustom03" placeholder="لطفا نام سهامدار را وارد کنید" aria-label="First name" required>
                                    <div class="invalid-feedback">
                                        وارد کردن نام اجباریست
                                    </div>
                                </div>

                                <div class="col-md-12 my-3">
                                    <label for="inputlname" class="form-label">نام خانوادگی:<span class="t-red">*</span></label>

                                    <input type="text" name="lname" value="<?php echo isset($_POST['lname']) ? $_POST['lname'] : null; ?>" id="validationCustom03" class="form-control" placeholder="لطفا نام خانوادگی سهامدار را وارد کنید" required>

                                    <div class="invalid-feedback">
                                        وارد کردن نام خانوادگی اجباریست
                                    </div>
                                </div>

                                <div class=" col-12 my-3">
                                    <label for="inputfname" class="form-label">شماره همراه:<span class="t-red">*</span></label>

                                    <input type="text" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه سهامدار را وارد کنید" maxlength="11" required>

                                    <div class="invalid-feedback">
                                        وارد کردن شماره همراه اجباریست
                                    </div>
                                    <span id="spanmsg"></span>
                                </div>

                                <div class="col-12 my-3 ">
                                    <label for="codmeli" class="form-label">کد ملی:<span class="t-red">*</span></label>

                                    <input type="text" name="codmeli" class="form-control" value="<?php echo isset($_POST['codmeli']) ? $_POST['codmeli'] : null; ?>" placeholder="لطفا کد ملی سهامدار را وارد کنید" required>

                                    <div class="invalid-feedback">
                                        وارد کردن کد ملی اجباریست
                                    </div>
                                    <span id="spanmsg"></span>

                                </div>

                                <div class="col-12 my-3">

                                    <label for="sahm" class="form-label">تعداد سهام:<span class="t-red">*</span></label>

                                    <input type="text" name="sahm" class="form-control" value="<?php echo isset($_POST['sahm']) ? $_POST['sahm'] : null; ?>" placeholder="لطفا تعداد را وارد کنید" maxlength="11" required>
                                    <div class="invalid-feedback">
                                        وارد کردن تعداد سهام اجباریست
                                    </div>
                                    <span id="spanmsg"></span>

                                </div>

                                <label for="sematjalase" class="form-label d-inline"> سمت در جلسه: <span class="t-red">*</span></label>
                                <select name="sematjalase" class="btn-outline-success rounded p-1 mb-3 d-inline" aria-required="true" aria-invalid="false" required>

                                    <?php

                                    $raeisjalase = true;
                                    $nazrjalase = true;
                                    $monshi = true;

                                    if (!empty($members)) {

                                        foreach ($members as $member) {
                                            if (strcmp($member['vazife_jalase'], 'رئیس جلسه') == 0) {
                                                $raeisjalase = false;
                                            }

                                            if (isset($_SESSION['sematjalase'])) {
                                                if (strcmp($member['vazife_jalase'], 'ناظر جلسه') == 0 && $_SESSION['sematjalase'] == 2) {
                                                    $nazrjalase = false;
                                                }
                                            }

                                            if (strcmp($member['vazife_jalase'], 'منشی جلسه') == 0) {
                                                $monshi = false;
                                            }
                                        }

                                        if ($raeisjalase == true) {
                                            echo '<option value="رئیس جلسه">رئیس جلسه</option>';
                                        }
                                        if ($monshi == true) {
                                            echo ' <option value="منشی جلسه">منشی جلسه</option>';
                                        }
                                        if ($nazrjalase == true) {
                                            echo '<option value="ناظر جلسه">ناظر جلسه</option>';
                                        }
                                        if ($monshi == false and $raeisjalase == false and $nazrjalase == false) {
                                            echo 'hello';
                                            echo '<option value="سهامدار">سهامدار</option>';
                                        }
                                    } else {
                                    ?>
                                        <option value="رئیس جلسه">رئیس جلسه</option>
                                        <option value="ناظر جلسه">ناظر جلسه</option>
                                        <option value="منشی جلسه">منشی جلسه</option>
                                        <option value="سهامدار">سهامدار</option>
                                    <?php } ?>
                                </select>

                                <br>

                                <label for="sematnahaie" class="form-label "> سمت نهایی: <span class="t-red">*</span></label>
                                <select name="sematnahaie" class="btn-outline-success rounded p-1 mb-3 " aria-required="true" aria-invalid="false" required>
                                    <?php

                                    $modiamel = true;
                                    $raeiHeiatModire = true;
                                    $naebRaeis = true;
                                    $ozveAsli = true;

                                    if (!empty($members)) {
                                        foreach ($members as $member) {

                                            if (strcmp($member['semat_nahaei'], 'مدیر عامل و رئیس هیئت مدیره') == 0) {
                                                $modiamel = false;
                                                $raeiHeiatModire = false;
                                            }

                                            if (strcmp($member['semat_nahaei'], 'رئیس هیئت میره') == 0) {
                                                $raeiHeiatModire = false;
                                                $modiamel = false;
                                            }

                                            if (strcmp($member['semat_nahaei'], 'نائب رئیس هیئت مدیره') == 0) {
                                                $naebRaeis = false;
                                            }

                                            if (strcmp($member['semat_nahaei'], 'عضو اصلی هیئت مدیره') == 0) {
                                                $ozveAsli = false;
                                            }
                                        }

                                        if ($modiamel == true && $raeiHeiatModire == true) {
                                            echo '<option value="مدیر عامل و رئیس هیئت مدیره">مدیر عامل و رئیس هیئت مدیره</option>';
                                        }

                                        if ($raeiHeiatModire == true && $modiamel == true) {
                                            echo '<option value="رئیس هیئت میره">رئیس هیئت میره</option>';
                                        }

                                        if ($naebRaeis == true) {
                                            echo '<option value="نائب رئیس هیئت مدیره">نائب رئیس هیئت مدیره</option>';
                                        }

                                        if ($ozveAsli == true) {
                                            echo '<option value="عضو اصلی هیئت مدیره">عضو اصلی هیئت مدیره</option>';
                                        }

                                        if ($modiamel == false && $raeiHeiatModire == false && $naebRaeis == false && $ozveAsli == false) {
                                            //echo '<option value="همه سمت ها انتخاب شده اند</option>';
                                            echo '<option>همه سمت ها انتخاب شده اند</option>';
                                        }
                                    } else { ?>
                                        <option value="مدیر عامل و رئیس هیئت مدیره">مدیر عامل و رئیس هیئت مدیره</option>
                                        <option value="رئیس هیئت میره">رئیس هیئت میره</option>
                                        <option value="نائب رئیس هیئت مدیره">نائب رئیس هیئت مدیره</option>
                                        <option value="عضو اصلی هیئت مدیره">عضو اصلی هیئت مدیره</option>
                                    <?php
                                    }
                                    ?>

                                </select>

                                <div class="input-group my-3 col-12">
                                    <label class="input-group-text" for="inputGroupFile01">بارگذاری اسکن صفحه اول شناسنامه سهامدار: <span class="t-red">*</span></label>
                                    <input type="file" name="imgSahamdar" class="form-control" id="inputGroupFile01" require>
                                </div>

                            </div>




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
        <?php } ?>
    <?php
    }
} else {
    ?>

    <?php if (empty($_SESSION['step2']) && empty($_SESSION['step3'])) { ?>
        <div class="form">
            <div class="container">
                <form class="my-5 needs-validation" action="tamdid_sherkat.php" method="POST" enctype="multipart/form-data" novalidate>

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
                                    وارد کردن شناسه ملی اجباریست
                                </div>
                                <span id="spanmsg"></span>
                            </div>

                            <div class=" col-12 my-3">
                                <label for="shenasemelli" class="form-label">سرمایه ثبت شده شرکت:<span class="t-red">*</span></label>

                                <input type="text" name="sarmaie" value="<?php echo isset($_POST['sarmaie']) ? $_POST['sarmaie'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا سرمایه ثبت شده شرکت را وارد کنید" required>

                                <div class="invalid-feedback">
                                    وارد کردن سرمایه ثبت شده شرکت اجباریست
                                </div>
                                <span id="spanmsg"></span>
                            </div>






                            <div class="col-12 my-3">

                                <div class="time d-block d-xl-inline">
                                    <label for="date_time" class="form-label d-block my-3">ساعت و تاریخ جلسه هیئت مدیره:<span class="t-red">*</span></label>
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


                            <div class="input-group my-3">
                                <label class="input-group-text" for="inputGroupFile01">بارگذاری فایل روزنامه کثیرالنتشار: <span class="t-red">*</span></label>
                                <input type="file" name="imgRozname" class="form-control" id="inputGroupFile01" require>
                            </div>

                            <div class="col-12 my-3">

                                <label for="tedadsaham" class="form-label">تعداد سهام ثبت شده شرکت:<span class="t-red">*</span></label>

                                <input type="text" name="tedadsaham" class="form-control" value="<?php echo isset($_POST['tedadsaham']) ? $_POST['tedadsaham'] : null; ?>" placeholder="لطفا تعداد سهام شرکت را وارد کنید" required>
                                <div class="invalid-feedback">
                                    وارد کردن تعداد سهام اجباریست
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

                            <div class=" col-12 my-3">
                                <label for="shenasemelli" class="form-label">آدرس رسمی و قانونی شرکت:<span class="t-red">*</span></label>

                                <textarea type="text" name="adress" value="<?php echo isset($_POST['adress']) ? $_POST['adress'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا سرمایه ثبت شده شرکت را وارد کنید" required><?php echo isset($_POST['adress']) ? $_POST['adress'] : null; ?></textarea>

                                <div class="invalid-feedback">
                                    وارد کردن آدرر قانونی شرکت شرکت اجباریست
                                </div>
                                <span id="spanmsg"></span>
                            </div>


                            <div class="col-12 my-3">
                                <label for="hozor" class="form-label">جلسه با حضور:<span class="t-red">*</span></label>
                                <select name="hozor" class="btn-outline-success rounded p-1 mb-3 d-inline" aria-required="true" aria-invalid="false">
                                    <option>- کلیه/اکثریت -</option>
                                    <option value="با حضور اکثریت سهامداران">با حضور اکثریت سهامداران</option>
                                    <option value="با حضور کلیه سهامداران">با حضور کلیه سهامداران</option>
                                </select>
                            </div>


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
}
// شروع قسمت 3
if (isset($_SESSION['step3']) and $_SESSION['step3'] == true and empty($_SESSION['stepfinish'])) {


    $sj = $data->searchAll('sj_tamdid_sahami_khas', 'rel_user', isset($_SESSION['phone']) ? $_SESSION['phone'] : $_COOKIE['phone']);


    $sj_id = $sj[0]['sj_id'];

    foreach ($sj as $id) {
        if ($id['sj_id'] > $sj_id) {
            $sj_id = $id['sj_id'];
        }
    }

    $members = $data->searchAll('sahamdaran', 'id_sj_tamdid_sahami_khas', $sj_id);

    ?>


    <?php


    //بررسی وارد شدن همه مقادیر ها و صحیح وارد شدن آنها

    $_SESSION['stepfinish'] = false;
   
    foreach ($members as $member) {
        if (strcmp($member['semat_nahaei'], 'مدیر عامل و رئیس هیئت مدیره') == 0) {
            $modirAmel = $member;
        }
    }

    $chekImg = true;

    if (isset($_FILES['imgBazresَAsli'])) {
        if ($_FILES['imgBazresَAsli']['error'] == 4 or $_FILES['imgBazres']['error'] == 4 or $_FILES['imgNamaiande']['error'] == 4 or ($_FILES['imgModirAmel']['error'] == 4 and empty($modirAmel))) {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>لطفا همه تصاویر را بارگذاری کنید</strong>
      </div>';
            $chekImg = true;
        }
    }

    if (isset($_POST['fnamebazresasli']) && isset($_POST['lnamebazresasli']) && isset($_POST['phonebazresasli']) && isset($_POST['codmelibazresasli']) && isset($_POST['fnamebazres']) && isset($_POST['lnamebazres']) && isset($_POST['phonebazres']) && isset($_POST['codmelibazres']) && isset($_POST['fnamaiande']) && isset($_POST['lnamaiande']) && isset($_POST['phonenamaiande']) && isset($_POST['codmelinamaiande']) && isset($_POST['fmodiramel']) && isset($_POST['lmodiramel']) && isset($_POST['phonemodiramel']) && isset($_POST['codmelimodiramel']) && $chekImg) {

        $chek = true;

        $chek = _function::validation_img($_FILES['imgBazresَAsli']['name'], $_FILES['imgBazresَAsli']['size'], $_FILES['imgBazresَAsli']['type'], 'بازرس اصلی');

        $chek = _function::validation_img($_FILES['imgBazres']['name'], $_FILES['imgBazres']['size'], $_FILES['imgBazres']['type'], 'بازرس علی البدل');

        $chek = _function::validation_img($_FILES['imgNamaiande']['name'], $_FILES['imgNamaiande']['size'], $_FILES['imgNamaiande']['type'], 'بازرس اصلی');

        if (empty($modirAmel)) {
            $chek = _function::validation_img($_FILES['imgModirAmel']['name'], $_FILES['imgModirAmel']['size'], $_FILES['imgModirAmel']['type'], 'بازرس اصلی');
        }


        if (!preg_match("/^09[0-9]{9}$/", $_POST['phonebazres']) or !preg_match("/^09[0-9]{9}$/", $_POST['phonebazresasli']) or !preg_match("/^09[0-9]{9}$/", $_POST['phonenamaiande'])) {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>فرمت شماره همراه اشتباه است</strong>
              </div>';
            $chek = false;
        }


        if (!preg_match("/^09[0-9]{9}$/", $_POST['phonenamaiande']) or !preg_match("/^09[0-9]{9}$/", $_POST['phonemodiramel'])) {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>فرمت شماره همراه  نماینده یا مدیر عامل اشتباه است</strong>
              </div>';
            $chek = false;
        }

        if (!preg_match("/[0-9]$/", $_POST['codmelibazresasli']) or !preg_match("/[0-9]$/", $_POST['codmelibazres']) or !preg_match("/[0-9]$/", $_POST['codmelinamaiande']) or !preg_match("/[0-9]$/", $_POST['codmelimodiramel'])) {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>کد ملی باید به صورت عدد وارد شود</strong>
              </div>';
            $chek = false;
        }

        if (preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['fnamebazresasli'])) or preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['fnamebazres'])) or preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['lnamebazresasli'])) or preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['lnamebazres'])) or preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['fnamaiande'])) or preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['lnamaiande'])) or preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['fmodiramel'])) or preg_match('/^[^\x{600}-\x{6FF}]+$/u', str_replace("\\\\", "", $_POST['lmodiramel']))) {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
          <strong>نام  و نام خانوادگی را به صورت فارسی وارد کنید</strong>
        </div>';
            $chek = false;
        }

        if ($_POST['phonebazres'] == $_POST['phonebazresasli'] or $_POST['codmelibazresasli'] == $_POST['codmelibazres']) {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>شماره تماس و یا کد ملی یکی از بازرسین تکراریست</strong>
          </div>';
            $chek = false;
        }

        if ($chek) {

            //ذخیره بازرس اصلی
            $data->insertMasolTamdidSahamiKhas($sj_id, $_POST['fnamebazresasli'], $_POST['lnamebazresasli'], $_POST['phonebazresasli'], $_POST['codmelibazresasli'], 'بازرس اصلی');

            //ذخیره بازرس علی البدل
            $data->insertMasolTamdidSahamiKhas($sj_id, $_POST['fnamebazres'], $_POST['lnamebazres'], $_POST['phonebazres'], $_POST['codmelibazres'], 'بازرس علی البدل');

            //ذخیره نماینده/وکیل قانونی
            $data->insertMasolTamdidSahamiKhas($sj_id, $_POST['fnamaiande'], $_POST['lnamaiande'], $_POST['phonenamaiande'], $_POST['codmelinamaiande'], 'وکیل');

            //ذخیره مدیر عامل
            $data->insertMasolTamdidSahamiKhas($sj_id, $_POST['fmodiramel'], $_POST['lmodiramel'], $_POST['phonemodiramel'], $_POST['codmelimodiramel'], 'مدیر عامل');


            $_SESSION['stepfinish'] = true;
            $_SESSION['step3'] = false;
            $_POST = NULL;
        }
    } 
    if ($_SESSION['stepfinish'] == false and $_SESSION['step3'] = true) {
        echo '<div class="container my-2 alert alert-light alert-dismissible fade show" role="alert">
    <strong>لطفا مشخصات زیر را تکمیل کنید</strong>
  </div>';
    ?>
        <div class="alert alert-info container" role="alert">
            لطفا مشخصات بازرس اصلی و علی البدل را وارد کنید
        </div>
        <form class="my-5 needs-validation container" action="tamdid_sherkat.php" enctype="multipart/form-data" method="POST" novalidate>



            <div class="row align-items-stretch justify-content-between">


                <!-- بازرس اصلی-->
                <div class="col-12 col-md-5 border py-3 my-2 ">

                    <div class="col-12 ">
                        <label for="inputfname" class="form-label">نام:(بازرس اصلی) <span class="t-red">*</span></label>
                        <input type="text" name="fnamebazresasli" class="form-control" value="<?php echo isset($_POST['fnamebazresasli']) ? $_POST['fnamebazresasli'] : null; ?>" " id=" validationCustom03" placeholder="لطفا نام  بازرس اصلی را وارد کنید" aria-label="First name" required>
                        <div class="invalid-feedback">
                            وارد کردن نام بازرس اصلی اجباریست
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <label for="inputlname" class="form-label">نام خانوادگی:<span class="t-red">*</span></label>

                        <input type="text" name="lnamebazresasli" value="<?php echo isset($_POST['lnamebazresasli']) ? $_POST['lnamebazresasli'] : null; ?>" id="validationCustom03" class="form-control" placeholder="لطفا نام خانوادگی بازرس اصلی را وارد کنید" required>

                        <div class="invalid-feedback">
                            وارد کردن نام خانوادگی بازرس اصلی اجباریست
                        </div>
                    </div>

                    <div class=" col-12 my-3">
                        <label for="inputfname" class="form-label">شماره همراه:<span class="t-red">*</span></label>

                        <input type="text" name="phonebazresasli" value="<?php echo isset($_POST['phonebazresasli']) ? $_POST['phonebazresasli'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه بازرس اصلی را وارد کنید" maxlength="11" required>

                        <div class="invalid-feedback">
                            وارد کردن شماره همراه بازرس اصلی اجباریست
                        </div>
                        <span id="spanmsg"></span>
                    </div>

                    <div class="col-12 my-3 ">
                        <label for="codmelibazresasli" class="form-label">کد ملی:<span class="t-red">*</span></label>

                        <input type="text" name="codmelibazresasli" class="form-control" value="<?php echo isset($_POST['codmelibazresasli']) ? $_POST['codmelibazresasli'] : null; ?>" placeholder="لطفا کد ملی بازرس اصلی را وارد کنید" required>

                        <div class="invalid-feedback">
                            وارد کردن کد ملی بازرس اصلی اجباریست
                        </div>
                        <span id="spanmsg"></span>

                    </div>

                    <div class="input-group mt-2 col-12 my-1">
                        <label class="input-group-text" for="inputGroupFile01">بارگذاری صفحه اول شناسنامه: <span class="t-red">*</span></label>
                        <input type="file" name="imgBazresَAsli" class="form-control" id="inputGroupFile01" require>
                    </div>

                    <br>

                </div>


                <!-- بازرس علی البدل -->
                <div class="col-12 col-md-5 border my-2 py-3">

                    <div class="col-12 ">
                        <label for="inputfname" class="form-label">نام:(بازرس علی البدل) <span class="t-red">*</span></label>
                        <input type="text" name="fnamebazres" class="form-control" value="<?php echo isset($_POST['fnamebazres']) ? $_POST['fnamebazres'] : null; ?>" " id=" validationCustom03" placeholder="لطفا نام  بازرس علی البدل را وارد کنید" aria-label="First name" required>
                        <div class="invalid-feedback">
                            وارد کردن نام بازرس علی البدل اجباریست
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <label for="inputlname" class="form-label">نام خانوادگی:<span class="t-red">*</span></label>

                        <input type="text" name="lnamebazres" value="<?php echo isset($_POST['lnamebazres']) ? $_POST['lnamebazres'] : null; ?>" id="validationCustom03" class="form-control" placeholder="لطفا نام خانوادگی بازرس علی البدل را وارد کنید" required>

                        <div class="invalid-feedback">
                            وارد کردن نام خانوادگی بازرس علی البدل اجباریست
                        </div>
                    </div>

                    <div class=" col-12 my-3">
                        <label for="inputfname" class="form-label">شماره همراه:<span class="t-red">*</span></label>

                        <input type="text" name="phonebazres" value="<?php echo isset($_POST['phonebazres']) ? $_POST['phonebazres'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه بازرس علی البدل را وارد کنید" maxlength="11" required>

                        <div class="invalid-feedback">
                            وارد کردن شماره همراه بازرس علی البدل اجباریست
                        </div>
                        <span id="spanmsg"></span>
                    </div>

                    <div class="col-12 my-3 ">
                        <label for="codmelibazresasli" class="form-label">کد ملی:<span class="t-red">*</span></label>

                        <input type="text" name="codmelibazres" class="form-control" value="<?php echo isset($_POST['codmelibazres']) ? $_POST['codmelibazres'] : null; ?>" placeholder="لطفا کد ملی بازرس علی البدل را وارد کنید" required>

                        <div class="invalid-feedback">
                            وارد کردن کد ملی بازرس علی البدل اجباریست
                        </div>
                        <span id="spanmsg"></span>

                    </div>

                    <div class="input-group col-12 my-1">
                        <label class="input-group-text" for="inputGroupFile01">بارگذاری صفحه اول شناسنامه: <span class="t-red">*</span></label>
                        <input type="file" name="imgBazres" class="form-control" id="inputGroupFile01" require>
                    </div>

                    <br>

                </div>

            </div>


            <!--  مشخصات نماینده قانونی-->

            <div class="row align-items-stretch justify-content-between">
                <div class="alert alert-info container" role="alert">
                    لطفا مشخصات وکیل و یا نماینده قانونی و مدیر عامل را وارد کنید
                </div>

                <div class="col-12 col-md-5 border my-3 p-3">

                    <div class="col-12 ">
                        <label for="inputfname" class="form-label">نام:(نماینده قانونی/وکیل)<span class="t-red">*</span></label>
                        <input type="text" name="fnamaiande" class="form-control" value="<?php echo isset($_POST['fnamaiande']) ? $_POST['fnamaiande'] : null; ?>" id=" validationCustom03" placeholder="لطفا نام  نماینده قانونی/وکیل را وارد کنید" aria-label="First name" required>
                        <div class="invalid-feedback">
                            وارد کردن نماینده قانونی/وکیل اجباریست
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <label for="inputlname" class="form-label">نام خانوادگی:<span class="t-red">*</span></label>

                        <input type="text" name="lnamaiande" value="<?php echo isset($_POST['lnamaiande']) ? $_POST['lnamaiande'] : null; ?>" id="validationCustom03" class="form-control" placeholder="لطفا نام خانوادگی نماینده قانونی/وکیل را وارد کنید" required>

                        <div class="invalid-feedback">
                            وارد کردن نام خانوادگی نماینده قانونی/وکیل اجباریست
                        </div>
                    </div>

                    <div class=" col-12 my-3">
                        <label for="inputfname" class="form-label">شماره همراه:<span class="t-red">*</span></label>

                        <input type="text" name="phonenamaiande" value="<?php echo isset($_POST['phonenamaiande']) ? $_POST['phonenamaiande'] : null; ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه نماینده قانونی/وکیل را وارد کنید" maxlength="11" required>

                        <div class="invalid-feedback">
                            وارد کردن شماره همراه نماینده قانونی/وکیل اجباریست
                        </div>
                        <span id="spanmsg"></span>
                    </div>

                    <div class="col-12 my-3 my-1">
                        <label for="codmelinamaiande" class="form-label">کد ملی:<span class="t-red">*</span></label>

                        <input type="text" name="codmelinamaiande" class="form-control" value="<?php echo isset($_POST['codmelinamaiande']) ? $_POST['codmelinamaiande'] : null; ?>" placeholder="لطفا کد ملی نماینده قانونی/وکیل را وارد کنید" required>

                        <div class="invalid-feedback">
                            وارد کردن کد ملی اجباریست
                        </div>
                        <span id="spanmsg"></span>

                    </div>

                    <br>

                    <div class="input-group col-12 my-1">
                        <label class="input-group-text " for="inputGroupFile01">بارگذاری صفحه اول شناسنامه: <span class="t-red">*</span></label>
                        <input type="file" name="imgNamaiande" class="form-control" id="inputGroupFile01" require>
                    </div>

                </div>

                <!-- مدیر عامل-->

                <?php
                //پیدا کردن مدیر عامل اگر از بین سهامداران باشد
                foreach ($members as $member) {
                    if (strcmp($member['semat_nahaei'], 'مدیر عامل و رئیس هیئت مدیره') == 0) {
                        $modirAmel = $member;
                        $_POST['fmodiramel'] = $_POST['lmodiramel'] = $_POST['honemodiramel'] = $_POST['phonemodiramel'] = $_POST['codmelimodiramel'] = null;
                    }
                }
                ?>
                <div class="col-12 col-md-5 border my-3 p-3">

                    <div class="col-12 ">
                        <label for="inputfname" class="form-label">نام:(مدیر عامل)<span class="t-red">*</span></label>
                        <input type="text" name="fmodiramel" class="form-control" value="<?php echo isset($modirAmel) ? $modirAmel['fname'] : null; echo isset($_POST['fmodiramel']) ? $_POST['fmodiramel'] : null; ?>" id=" validationCustom03" placeholder="لطفا نام  مدیر عامل را وارد کنید" aria-label="First name" required>
                        <div class="invalid-feedback">
                            وارد کردن نام مدیر عامل اجباریست
                        </div>
                    </div>

                    <div class="col-md-12 my-3">
                        <label for="inputlname" class="form-label">نام خانوادگی:<span class="t-red">*</span></label>

                        <input type="text" name="lmodiramel" value="<?php echo isset($modirAmel) ? $modirAmel['lname'] : null; 
                        echo isset($_POST['lmodiramel']) ? $_POST['lmodiramel'] : null;
                        ?>" id="validationCustom03" class="form-control" placeholder="لطفا نام خانوادگی مدیر عامل را وارد کنید" required>

                        <div class="invalid-feedback">
                            وارد کردن نام خانوادگی مدیر عامل اجباریست
                        </div>
                    </div>

                    <div class=" col-12 my-3">
                        <label for="inputfname" class="form-label">شماره همراه:<span class="t-red">*</span></label>

                        <input type="text" name="phonemodiramel" value="<?php echo isset($modirAmel) ? $modirAmel['phone'] : null; 
                        echo isset($_POST['phonemodiramel']) ? $_POST['phonemodiramel'] : null;
                        ?>" id="validationCustom03 phone" class="form-control" placeholder="لطفا شماره تلفن همراه مدیر عامل را وارد کنید" maxlength="11" required>

                        <div class="invalid-feedback">
                            وارد کردن شماره همراه مدیر عامل اجباریست
                        </div>
                        <span id="spanmsg"></span>
                    </div>

                    <div class="col-12 my-3 ">
                        <label for="codmelimodiramel" class="form-label">کد ملی:<span class="t-red">*</span></label>

                        <input type="text" name="codmelimodiramel" class="form-control" value="<?php echo isset($modirAmel) ? $modirAmel['meli_code'] : null;
                        echo isset($_POST['codmelimodiramel']) ? $_POST['codmelimodiramel'] : null;
                        ?>" placeholder="لطفا کد ملی مدیر عامل را وارد کنید" required>

                        <div class="invalid-feedback">
                            وارد کردن کد ملی مدیر عامل اجباریست
                        </div>
                        <span id="spanmsg"></span>

                    </div>

                    <br>

                    <?php
                    if (isset($modirAmel)) { ?>

                        <div class="input-group col-12  my-1">
                            <label class="input-group-text" for="inputGroupFile01m">ارسال شده(اگر قصد ویرایش دارید کلیک کنید)</label>
                            <input type="file" name="imgModirAmel" class="form-control d-none" id="inputGroupFile01m"  require>
                        </div>

                    <?php } else {
                    ?>

                        <div class="input-group  col-12 my-1">
                            <label class="input-group-text" for="inputGroupFile01m">بارگذاری صفحه اول شناسنامه: <span class="t-red">*</span></label>
                            <input type="file" name="imgModirAmel" class="form-control" id="inputGroupFile01m" require>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="col-12 my-5 d-block ">
                <button type="submit" class="btn w-100 btn-primary">ادامه</button>
            </div>

        </form>


        <!--finish Step -->
    <?php
    }
}

if ($_SESSION['stepfinish'] == true && $_SESSION['step3'] == false) {


    var_dump($_FILES);

    $sj = $data->searchAll('sj_tamdid_sahami_khas', 'rel_user', isset($_SESSION['phone']) ? $_SESSION['phone'] : $_COOKIE['phone']);

    $sj_id = $sj[0]['sj_id'];

    foreach ($sj as $id) {
        if ($id['sj_id'] > $sj_id) {
            $sj_id = $id['sj_id'];
        }
    }

    $members = $data->searchAll('sahamdaran', 'id_sj_tamdid_sahami_khas', $sj_id);


    if (isset($_POST['vekalat']) and isset($_POST['emza1']) and isset($_POST['vaYa']) and isset($_POST['vaYa']) and isset($_FILES['img'])) {

        $chek = true;


        if (count($_FILES['img']['name']) >= (5 + count($members) * 2)) {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>تعداد فایل های آپلود بیشتر از حد مجاز فرم شماست</strong>
          </div>';
            $chek = false;
        }

        foreach ($_FILES['img']['size'] as $img) {
            if ($img / 1024 > 350) {
                echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>حجم تصاویر ارسال بیشتر از 350kb است</strong>
              </div>';
                $chek = false;
                break;
            }
        }

        foreach ($_FILES['img']['type'] as $img) {
            if (strcmp($img, 'image/jpeg') !== 0 and strcmp($img, 'image/png') !== 0) {
                echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
                <strong>فرمت تصاویر باید jpeg/jpg یا png باشد</strong>
              </div>';
                $chek = false;
            }
        }
    }




    //انتخاب منشی از بین بازرسین اگر انتخاب نشده بود

    $bazrasMonshi = $data->searchAll('masolan_sj_tamdid_sahami_khas', 'id_sj', $sj_id);

    $monshi = true;
    foreach ($members as $member) {
        if (strcmp($member['vazife_jalase'], 'منشی جلسه') == 0) {
            $monshi = false;
        }
    }

    foreach ($bazrasMonshi as $exportmasol) {
        if (strcmp($exportmasol['masoliat'], 'وکیل') == 0) {
            $vakil = $exportmasol;
        }
    }

    ?>
    <form class="my-5 needs-validation container" action="tamdid_sherkat.php" method="POST" enctype="multipart/form-data" novalidate>

        <?php
        if ($monshi == true) {

            //var_dump($bazrasMonshi);
        ?>
            <label for="bazrasMonshi" class="form-label d-inline"> لطفا منشی جلسه را از بین بازرسین انتخاب کنید: <span class="t-red">*</span></label>
            <select name="bazrasMonshi" class="btn-outline-success rounded p-1 mb-3 d-inline" aria-required="true" aria-invalid="false">
            <?php
            foreach ($bazrasMonshi as $exportmasol) {
                if (strcmp($exportmasol['masoliat'], 'بازرس اصلی') == 0 or strcmp($exportmasol['masoliat'], 'بازرس علی البدل') == 0) {
                    echo '<option value="' . $exportmasol['phone'] . '">' . $exportmasol['fname'] . ' - ' . $exportmasol['lname'] . ' - ' . $exportmasol['phone'] . '</option>';
                }

                if (strcmp($exportmasol['masoliat'], 'وکیل') == 0) {
                    $vakil = $exportmasol;
                }
            }
        }
            ?>
            </select>


            <br><br>

            <label for="bazrasMonshi" class="form-label d-inline"> لطفا مشخص کنید : <?php echo $vakil['fname'] . ' - ' . $vakil['lname'] . ' - به شماره تماس ' . $vakil['phone']; ?> کدام است : <span class="t-red">*</span></label>

            <label class="form-check-label ms-3" for="flexRadioDefault1">
                نماینده قانونی
            </label>
            <input class="form-check-input " value="نماینده قانونی" type="radio" name="vekalat" id="flexRadioDefault1">

            <label class="form-check-label ms-3" for="flexRadioDefault2">
                وکیل
            </label>
            <input class="form-check-input" type="radio" value="وکالت داده میشود" name="vekalat" id="flexRadioDefault2" checked>

            <br><br><br>

            <label for="emza1" class="form-label d-inline"> لطفا کسانی که حق امضا دارند را مشخص کنید: <span class="t-red">*</span></label>

            <select name="emza1" class="btn-outline-success rounded p-1 mb-3 d-inline" aria-required="true" aria-invalid="false">
                <?php
                foreach ($members as $member) {
                    echo '<option value="' . $member['phone'] . '">' . $member['fname'] . ' - ' . $member['lname'] . ' - ' . $member['phone'] . '</option>';
                }
                ?>
            </select>


            <select name="vaYa" class="btn-outline-success rounded p-1 mb-3 d-inline mx-3" aria-required="true" aria-invalid="false">
                <option value="یک نفر">به تنهایی حق امضا دارد</option>
                <option value="">و (هر دو با هم باید امضا کنند) </option>
                <option value="">یا (هر کدام حق امضا دارد)</option>
            </select>


            <select name="emza2" class="btn-outline-success rounded p-1 mb-3 d-inline" aria-required="true" aria-invalid="false">
                <option value="">----------------------</option>
                <?php
                foreach ($members as $member) {
                    echo '<option value="' . $member['phone'] . '">' . $member['fname'] . ' - ' . $member['lname'] . ' - ' . $member['phone'] . '</option>';
                }
                ?>
            </select>

            <hr>
            <div class="alert alert-info mt-5" role="alert">
                <span class="bolder t-red">لطفا فایل روزنامه را حتما آپلود کنید.</span>
                <br>
                <span class="bolder t-red">حجم تصاویر ارسالی باید حداکثر 350kb باشد</span>
                <br>
                لطفا اسکن کارت ملی و صفحه اول شناسنامه سهامداران و بازرسین و نماینده یا وکیل قانونی را آپلود کنید.
                <br>
                تعداد سهامداران: <?php echo count($members) ?>
                <br>
                تعداد بازرسین با مدیر عامل و وکیل(نماینده قانونی): <?php echo count($bazrasMonshi) ?>

            </div>


            <!--
            <div class="form-group">
                <label for="file-3">Batch Preupload Error Check</label>
                <div class="file-loading">
                    <input id="file-3" type="file" multiple>
                </div>
            </div>

            <div class="form-group">
                <label for="inputfname" class="form-label col-12">کپی شناسنامه و کارت ملی اعضا:<span class="t-red">*</span></label>
                <div class="file-loading">
                    <input id="form-group" name="img[]" class="file" type="file" multiple>
                </div>
                <hr>
            </div>


            <div class="form-group">
                <label for="inputfname" class="form-label col-12">اسکن روزنامه شناسنامه و کارت ملی اعضا:<span class="t-red">*</span></label>
                <div class="file-loading">
                    <input name="img[]" id="file-1" type="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
                </div>
            </div>
            -->


            <div class="col-12 my-5 d-block ">
                <button type="submit" class="btn w-100 btn-primary">ادامه</button>
            </div>


    </form>


<?php
}
?>

<?php include_once('./footer.php'); ?>