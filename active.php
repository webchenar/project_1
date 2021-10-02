<?php include_once('header.php'); 
$data = new DataBase();
echo $_SESSION['phone'] . '<br>' . $_SESSION['rand']; 

if (empty($_SESSION['rand'])) {
    header('location: register.php');
}

if (isset($_POST['activeCode'])) {
    
    if (isset($_SESSION['phone']) and isset($_SESSION['rand']) and $_SESSION['rand'] == $_POST['activeCode']) {
        setcookie("newUser", "true", time()+10);
        $data->verifiedUser($_SESSION['phone']);
        header('location:index.php');
    }else{

        echo '<div class="alert alert-warning container" role="alert">
        کد وارد شده صحیح نیست. در صورت مشکل با ما تماس بگیرید
      </div>';
    }

}


?>

<div class="container border text-center mt-5  pb-3">
    <h3 class="sahel fs-3 fw-bold my-t-color m-3 ">
        لطفا کد پیامک شده به شماره همراه  یا ایمیل خود را برای تایید حساب کاربری وارد کنید
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