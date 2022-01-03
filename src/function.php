<?php

class _function
{

    //تابع تولید اعداد فارسی
    static function fa_number($number)
    {
        /*if (!is_numeric($number) || empty($number))
            return '۰';*/
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

    static function sendSms($number, $member, $text, $bodyId = 63079)
    {
        $data = array(
            'username' => "09179335012",
            'password' => "5ZMH0",
            'text' => "$member;$text",
            'to' => $number,
            "bodyId" => $bodyId
        );
        $post_data = http_build_query($data);
        $handle = curl_init('https://rest.payamak-panel.com/api/SendSMS/BaseServiceNumber');
        curl_setopt($handle, CURLOPT_HTTPHEADER, array(
            'content-type' => 'application/x-www-form-urlencoded'
        ));
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        $response = curl_exec($handle);
        //var_dump($response);

        //ارسال تبلیغاتی
        /*ini_set("soap.wsdl_cache_enabled", 0);
        $sms = new SoapClient("http://api.payamak-panel.com/post/Send.asmx?wsdl", array("encoding" => "UTF-8"));
        $data = array(
            "username" => "09179335012",
            "password" => "5ZMH0",
            "to" => array($number),
            "from" => "50004001335012",
            "text" => $text,
            "isflash" => false
        );
        $result = $sms->SendSimpleSMS($data)->SendSimpleSMSResult;*/
    }

    static function senMail($mailAdress, $rand)
    {
        // Multiple recipients
        $to = $mailAdress; // note the comma

        // Subject
        $subject = 'nikoosabt.ir';
        // Message
        $message = "
        <!DOCTYPE html>
        <html lang='fa'>
        <head>
            <meta charset='UTF-8'>
            <title>کد فعالسازی</title>
        </head>
            <body>
                <p>سلام</p>
                <h1>کد تایید شما عبارت است از: $rand</h1>
            </body>
        </html>
";

        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=utf-8';

        // Additional headers
        $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
        $headers[] = 'From: nikoosabt.ir';
        $headers[] = 'Cc: info@nikoosabt.ir';
        $headers[] = 'Bcc: info@nikoosabt.ir';

        /*$headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'X-Mailer: PHP' . "\r\n";
        $headers .= 'From: yourname <youraccount@example.com>' . "\r\n";
        $headers .= 'Reply-To: yourname <youraccount@example.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'Cc: admin@example.com' . "\r\n";
        $headers .= 'Bcc: other@example.com' . "\r\n";*/

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


    static function sendSmsMoshavere($number, $name, $phone, $mozoe, $zaman, $bodyId = 70305)
    {
        $data = array(
            'username' => "09179335012",
            'password' => "5ZMH0",
            'text' => "$name;$phone;$mozoe;$zaman",
            'to' => $number,
            "bodyId" => $bodyId
        );
        $post_data = http_build_query($data);
        $handle = curl_init('https://rest.payamak-panel.com/api/SendSMS/BaseServiceNumber');
        curl_setopt($handle, CURLOPT_HTTPHEADER, array(
            'content-type' => 'application/x-www-form-urlencoded'
        ));
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        $response = curl_exec($handle);
        //var_dump($response);

        //ارسال تبلیغاتی
        /*ini_set("soap.wsdl_cache_enabled", 0);
        $sms = new SoapClient("http://api.payamak-panel.com/post/Send.asmx?wsdl", array("encoding" => "UTF-8"));
        $data = array(
            "username" => "09179335012",
            "password" => "5ZMH0",
            "to" => array($number),
            "from" => "50004001335012",
            "text" => $text,
            "isflash" => false
        );
        $result = $sms->SendSimpleSMS($data)->SendSimpleSMSResult;*/
    }

    static function sendSmsnamaiandegi($number, $name, $phone, $bodyId = 71273)
    {
        $data = array(
            'username' => "09179335012",
            'password' => "5ZMH0",
            'text' => "$phone;$name",
            'to' => $number,
            "bodyId" => $bodyId
        );
        $post_data = http_build_query($data);
        $handle = curl_init('https://rest.payamak-panel.com/api/SendSMS/BaseServiceNumber');
        curl_setopt($handle, CURLOPT_HTTPHEADER, array(
            'content-type' => 'application/x-www-form-urlencoded'
        ));
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($handle, CURLOPT_POST, true);
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        $response = curl_exec($handle);
        //var_dump($response);

        //ارسال تبلیغاتی
        /*ini_set("soap.wsdl_cache_enabled", 0);
        $sms = new SoapClient("http://api.payamak-panel.com/post/Send.asmx?wsdl", array("encoding" => "UTF-8"));
        $data = array(
            "username" => "09179335012",
            "password" => "5ZMH0",
            "to" => array($number),
            "from" => "50004001335012",
            "text" => $text,
            "isflash" => false
        );
        $result = $sms->SendSimpleSMS($data)->SendSimpleSMSResult;*/
    }


    // static function validation_img($name, $size, $type, $msg = '')
    // {

    //     if (empty($name) and strcmp($name, "") == 0) {
    //         echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
    //         <strong>لطفا فایل ' . $msg . ' را بارگذاری کنید</strong>
    //       </div>';
    //         return false;
    //     } else if ($size > (300 * 1024)) {
    //         echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
    //         <strong>حجم فایل ارسالی ' . $name . ' باید کمتر از 300kb باشد</strong>
    //       </div>';
    //         return false;
    //     } else if ($type !== 'image/jpeg' and $type !== 'image/png') {
    //         echo '<div class="container my-2 alert alert-danger alert-dismissible fade show" role="alert">
    //         <strong>فرمت تصویر ارسالی ' . $name . ' باید jpeg/jpg یا png باشد</strong>
    //       </div>';
    //         return false;
    //     } else {
    //         return true;
    //     }
    // }

    static function senMailMoshavere($mailAdress, $phone, $name, $mozoe, $zaman, $txt)
    {
        // Multiple recipients
        $to = $mailAdress; // note the comma

        // Subject
        $subject = 'nikoosabt.ir';
        // Message
        $message = "
        <!DOCTYPE html>
        <html lang='fa'>
        <head>
            <meta charset='UTF-8'>
            <title>کد فعالسازی</title>
        </head>
            <body>
                <p>سلام</p>
                <h1>مدیر محترم نیکو ثبت، کاریری با نام $name به شماره $phone با موضوع $mozoe در زمان $zaman در خواست مشاوره داده است. لطفا در اولین زمان ممکن رسیدگی کنید. http://nikoosabt.ir/</h1>
                <h4>پیام ارسالی کاربر: $txt</h4>
            </body>
        </html>";

        // To send HTML mail, the Content-type header must be set
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=utf-8';

        // Additional headers
        $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
        $headers[] = 'From: nikoosabt.ir';
        $headers[] = 'Cc: info@nikoosabt.ir';
        $headers[] = 'Bcc: info@nikoosabt.ir';

        /*$headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'X-Mailer: PHP' . "\r\n";
        $headers .= 'From: yourname <youraccount@example.com>' . "\r\n";
        $headers .= 'Reply-To: yourname <youraccount@example.com>' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $headers .= 'Cc: admin@example.com' . "\r\n";
        $headers .= 'Bcc: other@example.com' . "\r\n";*/

        // Mail it
        mail($to, $subject, $message, implode("\r\n", $headers));
    }


    static function sendMailNamaiandegi($mailAdress, $phone, $name){
                // Multiple recipients
                $to = $mailAdress; // note the comma

                // Subject
                $subject = 'nikoosabt.ir';
                // Message
                $message = "
                <!DOCTYPE html>
                <html lang='fa'>
                <head>
                    <meta charset='UTF-8'>
                    <title>کد فعالسازی</title>
                </head>
                    <body>
                        <p>سلام</p>
                        <h1>مدیر عزیز نیکوثبت کاربری با شماره تماس $phone و نام کاربری $name درخواست نمایندگی نیکوثبت را داشته. لطفا در اولین زمان ممکن با ایشان تماس حاصل فرمایید.
                        http://nikoosabt.ir/</h1>
                    </body>
                </html>";
        
                // To send HTML mail, the Content-type header must be set
                $headers[] = 'MIME-Version: 1.0';
                $headers[] = 'Content-type: text/html; charset=utf-8';
        
                // Additional headers
                $headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
                $headers[] = 'From: nikoosabt.ir';
                $headers[] = 'Cc: info@nikoosabt.ir';
                $headers[] = 'Bcc: info@nikoosabt.ir';
        
                /*$headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'X-Mailer: PHP' . "\r\n";
                $headers .= 'From: yourname <youraccount@example.com>' . "\r\n";
                $headers .= 'Reply-To: yourname <youraccount@example.com>' . "\r\n";
                $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $headers .= 'Cc: admin@example.com' . "\r\n";
                $headers .= 'Bcc: other@example.com' . "\r\n";*/
        
                // Mail it
                mail($to, $subject, $message, implode("\r\n", $headers));
    }



}
