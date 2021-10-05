<?php

    session_start();

    $string = '123456789asdfghjklqwertyuiopzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';

    $_SESSION['captcha'] = '';
    
    for ($i=0; $i < 5  ; $i++) { 
        $_SESSION['captcha'] .= $string[rand(0, strlen($string) - 1)];
    }

    header('content:text:image/png');

    $image = imagecreate(150,50);

    imagecolorallocate($image, 255, 255, 255);

    $colorText = imagecolorallocate($image, rand(200, 250), rand(0,70), rand(0, 100));

    $font = 'Ding-DongDaddyO.ttf';

    imagefttext($image, 20, rand(-10, 30), rand(0,50), rand(0,50), colorLine($image), $font, '_________');


    imagefttext($image, 20, rand(-10, 10), rand(0, 60), rand(30, 35), $colorText, $font, $_SESSION['captcha']);

    imagefttext($image, 20, rand(-10, 30), rand(0,50), rand(0,50), colorLine($image), $font, '__________');

    imagefttext($image, 20, rand(-10, 30), rand(0,50), rand(0,50), colorLine($image), $font, '__________');


    imagepng($image);

    function colorLine($image){
        return imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
    }
    
?>

