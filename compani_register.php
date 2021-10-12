<?php include_once('./header.php');

var_dump($_FILES['img']);



$i = 0;

foreach($_FILES['img']['name'] as $img){
   
    var_dump($_FILES['img']['tmp_name'][$i]) ;
    var_dump($_FILES['img']['name'][$i]) ;

    move_uploaded_file($_FILES['img']['tmp_name'][$i], 'img' . $_FILES['img']['name'][$i]);
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

<form enctype="multipart/form-data" action="compani_register.php" method="POST">
<input type="text" name="fname">
    <div class="file-loading">
        <input id="file-0c" name="img[]" class="file" type="file" multiple>
    </div>
    <hr>
    <button type="submit">submit</button>
   
</form>



<?php include_once('./footer.php') ?>