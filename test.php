<?php 

include_once('header.php');

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

?>

<form action="#test.php" method="POST">
    <input type="text" name="fname">
    <input type="text" name="lname">
    <button type="sybmit">salam</button>
    </form>
<?php include_once('footer.php'); ?>