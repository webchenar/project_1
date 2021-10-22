<?php
include_once('header.php');


move_uploaded_file($_FILES['img']['tmp_name'], './upload/src/' . 'gholi.jpg');

echo mkdir('upload/src');
if (isset($_FILES['img'])) {
    var_dump($_FILES['img']);
    move_uploaded_file($_FILES['img']['tmp_name'], './upload/src/' . 'gholi.jpg');
}

?>


<img src="./upload/gholi.jpg" alt="">
<form action="test.php" enctype="multipart/form-data" method="POST">

    <input type="file" name="img">

    <button type="submit">submit</button>
</form>

<?php include_once('footer.php'); ?>