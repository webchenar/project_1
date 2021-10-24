<?php
$title = 'فعال سازی حساب';

include_once('header.php');

$data = new DataBase();


//محل اتصال apn پیامک و ایمیل
if (strcmp($_SESSION['page'], 'register') == 0 or strcmp($_SESSION['page'], 'forget') == 0 and $_SESSION['chekSms']) {
    echo $_SESSION['phone'] . '<br>' . $_SESSION['rand'] . '<br>' . $_SESSION['page'] . $_SESSION['email'];
    //_function::sendSms($_SESSION['phone'], $_SESSION['rand']);
    //_function::senMail($_SESSION['email'], $_SESSION['rand']);
    $_SESSION['chekSms'] = false;
    
} elseif(isset($_SESSION['newPhone']) and $_SESSION['chekSms']) {

    echo $_SESSION['oldPhone'] . '<br>' . $_SESSION['rand'] . $_SESSION['oldEmail'];
    _function::sendSms($_SESSION['oldPhone'], $_SESSION['rand']);
    //_function::senMail($_SESSION['oldEmail'], $_SESSION['rand']);
    $_SESSION['chekSms'] = false;
}

if (empty($_SESSION['rand']) and strcmp($_SESSION['page'], 'forget') != 0) {
    header('location: register.php');
}

if (isset($_POST['activeCode'])) {


    if (isset($_SESSION['phone']) and isset($_SESSION['rand']) and $_SESSION['rand'] == $_POST['activeCode']) {


        setcookie("logIn", "true", time() + 10800);

        if (strcmp($_SESSION['page'], 'register') == 0) {

            echo 'register';

            $data->insertUser($_SESSION['fname'], $_SESSION['lname'], $_SESSION['phone'], $_SESSION['email'], $_SESSION['cellPhone'], $_SESSION['password'], '1');

            setcookie("newUser", "true", time() + 10);

            $_SESSION['page'] == '';
        } elseif (strcmp($_SESSION['page'], 'change') == 0) {

            $data->updateUser($_SESSION['fname'], $_SESSION['lname'], $_SESSION['newPhone'], $_SESSION['email'], $_SESSION['cellPhone'], $_SESSION['password'], $_SESSION['oldPhone']);
            $_POST = null;


            if (isset($_COOKIE['fname']) and isset($_COOKIE['phone'])) {
                setcookie("fname", $_POST['fname'], time() + 10800);
                setcookie('phone', $_SESSION['newPhone'], time() + 10800);
            }

            if (isset($_SESSION['fname']) and $_SESSION['phone']) {
                $fname = $_SESSION['fname'];
                $phone = $_SESSION['phone'];
    
                session_unset();
    
                $_SESSION['fname'] = $fname;
    
                $_SESSION['phone'] = $phone;
            }

            
        } elseif (strcmp($_SESSION['page'], 'forget') == 0) {
            $_SESSION['page'] = '';
        }

        /*$fname = $_SESSION['fname'];
        $phone = $_SESSION['phone'];

        session_unset();

        $_SESSION['fname'] = $fname;

        $_SESSION['phone'] = $phone;*/

        header('location:index.php');
    } else {

        echo '<div class="alert alert-warning container" role="alert">
        کد وارد شده صحیح نیست. در صورت مشکل با ما تماس بگیرید
      </div>';
    }
}


?>

<div class="container border text-center mt-5  pb-3">
    <h3 class="sahel fs-3 fw-bold my-t-color m-3 ">
        <?php echo $_SESSION['titr'] ?>
    </h3>
    <div class="row d-flex justify-content-center">
        <form class="col-12  col-lg-4 row " action="active.php" method="POST">
            <input type="text" name="activeCode" class="form-control d-inline" placeholder="وارد کردن کد دریافتی" aria-describedby="button-addon2" />
            <button class="btn  btn-info mt-3" type="submit" id="button-addon2">
                تایید شماره تماس
            </button>
        </form>
    </div>
</div>
<br><br><br><br><br><br>

<?php include_once('footer.php'); ?>