<?php

    session_start();

    $string = '123456789987654321asdfghjkqwertyuipzxcvbnmQWERTYUPASDFGHJKLZXCVBNM';

    $_SESSION['captcha'] = '';
    
    for ($i=0; $i < 5  ; $i++) { 
        $_SESSION['captcha'] .= $string[rand(0, strlen($string) - 1)] . ' ';
    }

    header('content:text:image/png');

    $image = imagecreate(150,50);

    imagecolorallocate($image, 255, 255, 255);

    $colorText = imagecolorallocate($image, rand(200, 250), rand(0,70), rand(0, 100));


    $font = 'Anton-Regular.ttf';


    imagefttext($image, 20, rand(-10, 30), rand(0,50), rand(0,50), colorLine($image), $font, '__________');

    imagefttext($image, 20, rand(-10, 30), rand(0,50), rand(0,50), colorLine($image), $font, '__________');

    imagefttext($image, 20, rand(-10, 30), rand(0,50), rand(0,50), colorLine($image), $font, '__________');

    imagefttext($image, 20, rand(-10, 10), rand(5, 40), rand(31, 35), $colorText, $font, $_SESSION['captcha']);

    imagefttext($image, 20, rand(-10, 30), rand(0,50), rand(0,50), colorLine($image), $font, '__________');

    
    imagepng($image);

    $_SESSION['captcha'] = str_replace(" ", "", $_SESSION['captcha']);

    function colorLine($image){
        return imagecolorallocate($image, rand(50, 255), rand(50,255), rand(50, 255));

        return imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));

    }
    
?>

