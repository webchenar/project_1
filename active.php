<?php
$title = 'فعال سازی حساب';
include_once('header.php');
$data = new DataBase();


if (isset($_SESSION['register'])) {
    echo $_SESSION['phone'] . '<br>' . $_SESSION['rand'];
}else{
    $user = $data->search('tbl_user', 'phone', $_SESSION['oldPhone']);
    echo $user['phone'] . '<br>' . $_SESSION['rand'];
}


if (empty($_SESSION['rand'])) {
    header('location: register.php');
}

if (isset($_POST['activeCode'])) {

    if (isset($_SESSION['phone']) and isset($_SESSION['rand']) and $_SESSION['rand'] == $_POST['activeCode']) {

        if (isset($_SESSION['register'])) {

            $data->insertUser($_SESSION['fname'], $_SESSION['lname'], $_SESSION['phone'], $_SESSION['email'], $_SESSION['cellPhone'], $_SESSION['password'], '1');

        }else{

            $data->update($_SESSION['fname'], $_SESSION['lname'], $_SESSION['phone'], $_SESSION['email'], $_SESSION['cellPhone'], md5($_SESSION['password']), $user['phone']);

            echo 'update';
        }
        
        $fname = $_SESSION['fname'];
        $phone = $_SESSION['phone'];

        session_unset();

        $_SESSION['fname'] = $fname;

        $_SESSION['phone'] = $phone;

        setcookie("newUser", "true", time() + 10);

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