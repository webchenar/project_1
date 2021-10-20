<?php

     session_start();

// for php 7.4
function LoadPNG($imgname)
{
    /* Attempt to open */
    $im = @imagecreatefrompng($imgname);

    
    $string = '123456789987654321asdfghjkqwertyuipzxcvbnmQWERTYUPASDFGHJKLZXCVBNM';

    $_SESSION['captcha'] = '';
   
    for ($i=0; $i < 5  ; $i++) { 
        $_SESSION['captcha'] .= $string[rand(0, strlen($string) - 1)] . ' ';
    }
    
    /* See if it failed */
    if (!$im) {
        /* Create a blank image */
        $im = imagecreatetruecolor(150, 70);
        $bgc = imagecolorallocate($im, 255, 255, 255);
        $tc = imagecolorallocate($im,rand(200, 250), rand(0,70), rand(0, 100));

        
        imagefilledrectangle($im, 0, 0, 150, 70, $bgc);

        /* Output an error message */
        imagestring($im, 10, rand(0,50), rand(0,50), '--------------' . $imgname, colorLine($im));

        
        imagestring($im, 10, rand(0,50), rand(0,50), '--------------' . $imgname, colorLine($im));

        imagestring($im, 10, rand(0,50), rand(0,50), '--------------' . $imgname, colorLine($im));

        
        imagestring($im, 20 , 30, 30, $_SESSION['captcha'], $tc);

        imagestring($im, 10, 5, 5, '--------------' . $imgname, imagecolorallocate($im,rand(200, 250), rand(0,70), rand(0, 100)));
    }

    

    return $im;
}

header('Content-Type: image/png');

$img = LoadPNG('');

imagepng($img);
imagedestroy($img);

$_SESSION['captcha'] = str_replace(" ", "", $_SESSION['captcha']);

//Color Line --------
function colorLine($image){
    return imagecolorallocate($image, rand(50, 255), rand(50,255), rand(50, 255));

    return imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));

}

//php 7.0
//     header('content:text:image/png');

//     $image = imagecreate(150,50);

//     imagecolorallocate($image, 255, 255, 255);

//     $colorText = imagecolorallocate($image, rand(200, 250), rand(0,70), rand(0, 100));


//     $font = 'Anton-Regular.ttf';


//     imagefttext($image, 20, rand(-10, 30), rand(0,50), rand(0,50), colorLine($image), $font, '__________');

//     imagefttext($image, 20, rand(-10, 30), rand(0,50), rand(0,50), colorLine($image), $font, '__________');

//     imagefttext($image, 20, rand(-10, 30), rand(0,50), rand(0,50), colorLine($image), $font, '__________');

//     imagefttext($image, 20, rand(-10, 10), rand(5, 40), rand(31, 35), $colorText, $font, $_SESSION['captcha']);

//     imagefttext($image, 20, rand(-10, 30), rand(0,50), rand(0,50), colorLine($image), $font, '__________');

    
//     imagepng($image);

//     $_SESSION['captcha'] = str_replace(" ", "", $_SESSION['captcha']);


// function colorLine($image){
//     return imagecolorallocate($image, rand(50, 255), rand(50,255), rand(50, 255));

//     return imagecolorallocate($image, rand(0, 255), rand(0, 255), rand(0, 255));
// }