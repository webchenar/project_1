<?php

class _function
{

    //تابع تولید اعداد فارسی
    static function fa_number($number)
    {
        if (!is_numeric($number) || empty($number))
            return '۰';
        $en = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
        $fa = array("۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹");
        return str_replace($en, $fa, $number);
    }


    static function logIn()
    {

        if (empty($_COOKIE['logIn'])) {
            header('location:logout.php');
        }

        if ((empty($_SESSION['phone']) and empty($_SESSION['fname'])) and (empty($_COOKIE['phone']) and empty($_COOKIE['fname']))) {
            header('location:login.php');
        }
    }

    static function restart()
    {
        session_destroy();
    }

    static function sendSms($number, $text)
    {
        ini_set("soap.wsdl_cache_enabled", 0);
        $sms = new SoapClient("http://api.payamak-panel.com/post/Send.asmx?wsdl", array("encoding" => "UTF-8"));
        $data = array(
            "username" => "09179335012",
            "password" => "5ZMH0",
            "to" => array($number),
            "from" => "50004001335012",
            "text" => $text,
            "isflash" => false
        );
        $result = $sms->SendSimpleSMS($data)->SendSimpleSMSResult;
    }

    static function senMail($mailAdress, $rand)
    {
        // Multiple recipients
        $to = $mailAdress; // note the comma

        // Subject
        $subject = 'nikoosabt.ir';
        $msg = rand(0000, 9999);
        // Message
        $message = "
        <html>
            <head>
                 <title>سلام و عرض خدا قوت خدمت شما</title>
            </head>
            <body>
                <p>سلام</p>
                <h1>کد تایید شما عبارت است از: $rand</h1>
            </body>
        </html>
";

        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

        // Additional headers
        $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
        $headers[] = 'From: nikoosabt.ir';
        $headers[] = 'Cc: info@nikoosabt.ir';
        $headers[] = 'Bcc: info@nikoosabt.ir';

        // Mail it
        mail($to, $subject, $message, implode("\r\n", $headers));
    }

    static function validation_img($name, $size, $type, $msg = '')
    {

        if (empty($name) and strcmp($name, "") == 0) {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>لطفا فایل ' . $msg . ' را بارگذاری کنید</strong>
          </div>';
            return false;
        } else if ($size > (300 * 1024)) {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>حجم فایل ارسالی ' . $name . ' باید کمتر از 300kb باشد</strong>
          </div>';
            return false;
        } else if ($type !== 'image/jpeg' and $type !== 'image/png') {
            echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
            <strong>فرمت تصویر ارسالی ' . $name . ' باید jpeg/jpg یا png باشد</strong>
          </div>';
            return false;
        } else {
            return true;
        }
    }
}
