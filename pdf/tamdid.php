<?php
require_once('./TCPDF-main/tcpdf.php');

require_once('../config/Data.Class.php');

require_once('../src/function.php');

//_function::logIn();

//var_dump($_COOKIE);

//var_dump($_GET);
$data = new DataBase();

//گرفتن همه صورتجلسه های این کاربر
$sj = $data->searchAll('sj_tamdid_sahami_khas', 'rel_user', isset($_SESSION['phone']) ? $_SESSION['phone'] : $_COOKIE['phone']);

//پیدا کردن آخرین صورتجلسه کاربر

$sj_id = $sj[0]['sj_id'];

foreach ($sj as $id) {
  if ($id['sj_id'] > $sj_id) {
    $sj_id = $id['sj_id'];
  }
}

$sj = $data->search('sj_tamdid_sahami_khas', 'sj_id', $sj_id);

//var_dump($sj);


$sahamdaran = $data->searchAll('sahamdaran', 'id_sj_tamdid_sahami_khas', $sj_id);

//var_dump($sahamdaran);


$masolan = $data->searchAll('masolan_sj_tamdid_sahami_khas', 'id_sj', $sj_id);

// var_dump($masolan);

//مشخصات شرکت




// /*
// if ($chek) {


// //TCPDF_FONTS::addTTFfont('Parastoo.ttf', 'TrueTypeUnicode', '', 96);
// //============================================================+
// // File name   : example_018.php
// // Begin       : 2008-03-06
// // Last Update : 2013-05-14
// //
// // Description : Example 018 for TCPDF class
// //               RTL document with Persian language
// //
// // Author: Nicola Asuni
// //
// // (c) Copyright:
// //               Nicola Asuni
// //               Tecnick.com LTD
// //               www.tecnick.com
// //               info@tecnick.com
// //============================================================+

// /**
//  * Creates an example PDF TEST document using TCPDF
//  * @package com.tecnick.tcpdf
//  * @abstract TCPDF - Example: RTL document with Persian language
//  * @author Nicola Asuni
//  * @since 2008-03-06
//  */


// // create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// // set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '5', PDF_FONT_SIZE_MAIN));

// // set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// // set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 10, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

// // set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// // set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// // set some language dependent data:
$lg = array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'rtl';
$lg['a_meta_language'] = 'fa';
$lg['w_page'] = 'page';

// // set some language-dependent strings (optional)
$pdf->setLanguageArray($lg);

// // ---------------------------------------------------------

// // set font
$pdf->SetFont('parastoo', 'B', 8);

// // add a page
$pdf->AddPage();

// $fasele = '';

// //مشخصات شرکت
$c_name = $sj['c_name'];

$c_shenase_meli = _function::fa_number($sj['c_shenase_meli']);

$c_shomare_sabt = _function::fa_number($sj['c_shomare_sabt']);

$c_sarmaye = _function::fa_number($sj['c_sarmaye']);

$time_j = _function::fa_number($sj['t_shorooe_jalase']);

$date_j = _function::fa_number($sj['d_shorooe_jalase']);

$hozor = $sj['hozor'];

$rozname = $sj['rooz_name'];

$c_adress = $sj['c_adress'];

//مشخصات فرم دوم

if (empty($_GET['tamdid'])) {
  $sjtm = $data->search('sj_taein_modiran', 'rel_sj_id', $sj_id);
  //var_dump($sj_taein_modiran);
  $t_sjtm = _function::fa_number($sjtm['t_shorooe_jalase']);
  $d_sjtm = _function::fa_number($sjtm['d_shorooe_jalase']);
  $td_sjtm = _function::fa_number(substr($sjtm['d_shorooe_jalase'], 0, 4) + 2 . substr($sjtm['d_shorooe_jalase'], 4));
  $sahamdaransjtm = '';
  $sahamdaransjtmemza = '';
} else {
  //$year = 
  // //مشخصات سهامداران
  //var_dump($sahamdaran);
  $sahamdarExport = '<table>';
  $sahamdaranEmza = '<table>';
}

$i = 0;
foreach ($sahamdaran as $sahamdar) {
  $tableRowS = NULL;
  $tableRowE = NULL;
  if ($i % 2 == 0) {
    $tableRowS = '<tr>';
    $tableRowE = NUll;
  } else {
    $tableRowS = NULL;
    $tableRowE = '</tr>';
  }
  $i++;

  if (isset($_GET['tamdid'])) {
    $sahamdarExport .= $tableRowS . '<td>' . _function::fa_number($i) . '-' . 'آقای / خانم ' . $sahamdar['fname'] . ' ' . $sahamdar['lname'] . ' دارنده ' . _function::fa_number($sahamdar['tedad_saham']) . ' سهم' . '</td>' . $tableRowE;

    $sahamdaranEmza  .= $tableRowS . '<td>' . _function::fa_number($i) . '-' . 'آقای / خانم ' . $sahamdar['fname'] . ' ' . $sahamdar['lname'] . '</td>' . $tableRowE;
  } else {
    $sahamdaransjtm .= '<p>' . _function::fa_number($i) . '-' . 'آقای / خانم ' . $sahamdar['fname'] . ' ' . $sahamdar['lname'] . ' به شماره ملی ' . _function::fa_number($sahamdar['meli_code']) . ' به سمت ' . $sahamdar['semat_nahaei'] .   '</p>';
    $sahamdaransjtmemza .= '<p>' . _function::fa_number($i) . '-' . 'آقای / خانم ' . $sahamdar['fname'] . ' ' . $sahamdar['lname'] . ' به شماره ملی ' . _function::fa_number($sahamdar['meli_code']) . ' تا تاریخ ' . $td_sjtm . '</p>';
  }
}

if (isset($_GET['tamdid'])) {
  if ($i % 2 != 0) {
    $sahamdarExport .= '</tr>';
    $sahamdaranEmza .= '</tr>';
  }
  $sahamdarExport .= '</table>';
  $sahamdaranEmza .= '</table>';

  //مشخصات اعضای هیئت رئیسه

  $raeisJalase = '';
  $nazer1 = '';
  $nazer2 = '';
  $monshi = NULL;

  $chekNazer = true;
  foreach ($sahamdaran
    as $sahamdar) {

    if (strcmp($sahamdar['vazife_jalase'], 'رئیس جلسه') == 0) {
      $raeisJalase = $sahamdar['fname'] . ' ' . $sahamdar['lname'];
    }

    if (strcmp($sahamdar['vazife_jalase'], 'ناظر جلسه') == 0 and $chekNazer == false) {
      $nazer2 = $sahamdar['fname'] . ' ' . $sahamdar['lname'];
    }

    if (strcmp($sahamdar['vazife_jalase'], 'ناظر جلسه') == 0 and $chekNazer == true) {
      $nazer1 = $sahamdar['fname'] . ' ' . $sahamdar['lname'];
      $chekNazer = false;
    }

    if (strcmp($sahamdar['vazife_jalase'], 'منشی جلسه') == 0) {
      $monshi = $sahamdar['fname'] . ' ' . $sahamdar['lname'];
    }
  }

  //پیدا کردن  منشی از بین بازرسین

  if (empty($monshi)) {
    foreach ($masolan as $masol) {
      if (strcmp($masol['monshi'], 'منشی جلسه')  == 0) {
        $monshi = $masol['fname'] . ' ' . $masol['lname'];
      }
    }
  }

  //پیدا کردن اعضای هیئت مدیره از بین سهامداران
  $raeisHiatModire = '';
  $naebRaeis = '';
  $ozvAsli = '';
  $modirAmel = null;
  $modirAmelExport = NULL;
  foreach ($sahamdaran as $sahamdar) {

    if (strcmp($sahamdar['semat_nahaei'], 'مدیر عامل و رئیس هیئت مدیره') == 0) {
      $raeisHiatModire = $sahamdar;
    }

    if (strcmp($sahamdar['semat_nahaei'], 'رئیس هیئت میره') == 0) {
      $raeisHiatModire = $sahamdar;
    }

    if (strcmp($sahamdar['semat_nahaei'], 'نائب رئیس هیئت مدیره') == 0) {
      $naebRaeis = $sahamdar;
    }

    if (strcmp($sahamdar['semat_nahaei'], 'عضو اصلی هیئت مدیره') == 0) {
      $ozvAsli = $sahamdar;
    }
  }

  $cheModiAlel = isset($modirAmel) ? '' : 'و مدیر عامل';
  //var_dump($ozvAsli['fname']);

  //پیدا کردن مدیر عامل اگر از سهامداران نبود
  if (strcmp($raeisHiatModire['semat_nahaei'], 'رئیس هیئت میره') == 0) {
    foreach ($masolan as $masol) {
      if (strcmp($masol['masoliat'], 'مدیر عامل')  == 0) {
        $modirAmel = $masol;
      }
    }
  }

  if (isset($modirAmel)) {
    $modirAmelExport = '<h3>امضای مدیر عامل:</h3>' . '1.آقای / خانم ' . $modirAmel['fname'] . ' ' . $modirAmel['lname'];
  }

  //پیدا کردن بازرسین از بین مسئولین
  $bazres1;
  $bazres2;
  foreach ($masolan as $masol) {
    if (strcmp($masol['masoliat'], 'بازرس اصلی')  == 0) {
      $bazres1 = $masol;
    }
    if (strcmp($masol['masoliat'], 'بازرس علی البدل')  == 0) {
      $bazres2 = $masol;
    }
  }
}

//پیدا کردن نماینده/وکیل قانونی
$vakil;
foreach ($masolan as $masol) {
  if (strcmp($masol['masoliat'], 'نماینده قانونی')  == 0) {
    $vakil = $masol;
  }
  if (strcmp($masol['masoliat'], 'وکالت داده')  == 0) {
    $vakil = $masol;
  }
}


//Persian and English content
if (isset($_GET['tamdid'])) {
  $htmlpersian = '
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tamdid Sherkat</title>
    <style>
    p{
      line-height: 15px;
    }
    table{
      padding: 5px;
    }
    </style>
  </head>

  <body>
<div style="text-align: justify;">
<h2 style="text-align: center">بسمه تعالی</h2>
<h2 style="text-align: center">
  صورت جلسه مجمع عمومی عادی برای انتخاب مدیران و بازرسان و روزنامه کثیر
  الانتشار
</h2>
<h4 style="text-align: right">نام شرکت: ' . $c_name . '</h4>
<h4 style="text-align: right">شماره ثبت شرکت: ' . $c_shomare_sabt . '</h4>
<h4 style="text-align: right">سرمابه ثبت شده: ' . $c_sarmaye . 'ریال</h4>
<h4 style="text-align: right">شناسه ملی: ' . $c_shenase_meli . '</h4>

<p>
  جلسه مجمع عمومی عادی شرکت فوق در ساعت ' . $time_j . ' و در تاریخ ' . $date_j . ' با حضور ' . $hozor . '
  به شرح زیر در محل قانونی شرکت واقع در ' . $c_adress . ' تشکیل گردید.
</p>

<p>الف: سهامداران حاضر در جلسه عبارتند از:</p>
' . $sahamdarExport . '
<p>
طبق ماده ۱۰۱ لایحه اصلاحی قانون تجارت اعضای هیئت رئیسه به شرح زیر انتخاب
شدند: 
</p>

  <table>
    <tr>
      <td>
      ۱.آقای / خانم ' . $raeisJalase . ' به سمت رئیس جلسه
      </td>
      <td>
      ۲.آقای / خانم ' .  $nazer1 . ' به سمت ناظر جلسه
      </td>
    </tr>
    <tr>
      <td>
      ۳.آقای / خانم ' . $nazer2 . ' به سمت ناظر جلسه
      </td>
      <td> 
      ۴.آقای / خانم ' . $monshi . ' به سمت منشی جلسه انتخاب شدند.</td>
    </tr>
  </table>

<p>
  ب: در خصوص دستور جلسه، ۱-انتخاب مدیران ۲-انتخاب بازرسان ۳-انتخاب روزنامه
  کثیرالانتشار به شرح زیر اتخاذ تصمیم شد
</p>

<p >
  ب ۱: مقرر شد بین سهامداران یک نفر به عنوان اعضای هیئت مدیره انتخاب شوند
  که در نتیجه آقای / خانم ' . $raeisHiatModire['fname'] . ' ' . $raeisHiatModire['lname'] . ' ' . '  به شماره ملی ' . ' '  . _function::fa_number($raeisHiatModire['meli_code']) . ' ' . ' به سمت رئیس
  هیئت مدیره و آقای / خانم ' . $naebRaeis['fname'] . ' ' . $naebRaeis['lname'] . ' ' . ' به شماره ملی  ' . ' '  . _function::fa_number($naebRaeis['meli_code']) . ' ' . ' به عنوان نائب رئیس هیئت
  مدیره، آقای / خانم ' . $ozvAsli['fname'] . ' ' . $ozvAsli['lname'] . ' ' . '  به شماره ملی  ' . ' '  . _function::fa_number($ozvAsli['meli_code']) . ' ' . 'به سمت عضو اصلی هیئت مدیره
  برای مدت دو سال انتخاب شدند که با امضا ذیل صورتجلسه قبولی خود را اعلام می
  دارند. مجمع تصویب نمود در اجرای ماده۱۲۴ لایحه اصلاحی قانون تجارت میتواند
  رئیس هیئت مدیره ' .  $cheModiAlel . ' یک نفر باشد.
</p>

<p>
     ب ۲:انتخاب بازرس: با رعایت ماده ۱۴۷ بایحه اصلاحی قانون تجارت آقای / خانم  ' . $bazres1['fname'] . ' ' . $bazres1['lname'] . ' ' . 'به شماره ملی ' . ' '  . _function::fa_number($bazres1['code_meli']) . ' ' . ' 
     به سمت بازرس اصلی و آقای / خانم ' . $bazres2['fname'] . ' ' . $bazres2['lname'] . ' ' . '
     به شماره ملی '  . _function::fa_number($bazres2['code_meli']) . ' ' . ' به سمت بازرس علی البدل برای مدت یک
  سال مالی انتخاب شدند.
</p>

<h4>ب ۳:روزنامه   کثیرالانتشار ' . $rozname . ' جهت نشر آگهی های شرکت انتخاب شدند.</h4>

<p>
  ج: اینجانبان اعضای هیئت مدیره ضمن قبولی سمت خود اقرار مینماییم که هیچ گونه
  سوء پیشینه کیفری نداشته و ممنوعیت اصل ۱۴۱ قانون اساسی و مواد ۱۱۱ و ۱۴۷
  لایحه اصلاحی قانون تجارت را ندارم.
</p>

<p>
   به آقای / خانم   ' . $vakil['fname'] . ' ' . $vakil['lname'] . ' ' . 'احدی از سهامداران شرکت ' . _function::fa_number($vakil['masoliat']) . '  میشود که ضمن مراجعه
  به اداره ثبت شرکت ها نسبت به ثبت صورت جلسه و پرداخت حق الثبت و امضاء ذیل
  دفاتر ثبت اقدام نماید.
</p>

<h3>امضاء هیئت رئیسه:</h3>
<table>
<tr>
  <td>
  ۱.آقای / خانم ' . $raeisJalase . '  رئیس جلسه
  </td>
  <td>
  ۲.آقای / خانم ' .  $nazer1 . '  ناظر جلسه
  </td>
</tr>

<tr>
  <td>
  ۳.آقای / خانم ' . $nazer2 . '  ناظر جلسه
  </td>
  <td> 
  ۴.آقای / خانم ' . $monshi . ' منشی .</td>
</tr>
</table>



<h3>امضاء اعضای هیئت مدیره و سهامداران: </h3>

' . $sahamdaranEmza . $modirAmelExport . '


<h3>امضای بازرسان:</h3>

<table>
  <tr>
    <td>1.  بازرس اصلی' . ' ' . $bazres1['fname'] . ' ' . $bazres1['lname'] . ' ' . ' </td>
    <td>2.  بازرس علی البدل' . ' ' . $bazres2['fname'] . ' ' . $bazres2['lname'] . ' ' . '</td>
  </tr>
</table>

</div>

</body>
</html>
';
} else {
  $htmlpersian = '<!DOCTYPE html>
  <html lang="fa" dir="rtl">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Tamdid Sherkat</title>
      <style>
      p{
        line-height: 15px;
      }
      table{
        padding: 5px;
      }
      </style>
    </head>
  
    <body>
  <div style="text-align: justify;">
  <h2 style="text-align: center">بسمه تعالی</h2>
  <h2 style="text-align: center">
  صورت جلسه هیئت مدیره در خصوص تعین سمت مدیران و تعیین دارندگان امضاء مجاز
  </h2>
  <h4 style="text-align: right">نام شرکت: ' . $c_name . '</h4>
  <h4 style="text-align: right">شماره ثبت شرکت: ' . $c_shomare_sabt . '</h4>
  <h4 style="text-align: right">سرمابه ثبت شده: ' . $c_sarmaye . 'ریال</h4>
  <h4 style="text-align: right">شناسه ملی: ' . $c_shenase_meli . '</h4>
  
  <p>
   جلسه هیئت مدیره فوق در تاریخ  ' . $d_sjtm . '  و ساعت ' . $t_sjtm . ' با حضور کلیه سهامداران در محل قانونی شرکت تشکیل شد و تصمیمات زیر اتخاذ گردید.
  </p>
  
  <p>الف: در ابتدا در اجرای ماده ۱۰۱ لایحه اصلاحی قانون تجارت انتخاب گردیدن.</p>
  ' . $sahamdaransjtm . '
  <p>
   به عنوان اعضا هیئت مدیره برای مدت دو سال انتخاب شدند که همگی با امضا این صورتجلسه قبولی خود را اعلام نمودند.
  </p>
  
  <p>
    ب: کلیه اسناد و مدارک و اوراق بهاءدار و تعهد آور و بانکی اوراق عادی و اداری با امضاء $$$$$$$$$$$ یا $$$$$$$$ همراه مهر شرکت معتبر میباشد
  </p>
  
  <p>
  ج: اینجانبان اعضاء هیئت مدیره و مدیر عامل ضمن قبولی سمت خود اقرار می نمائیم که هیچگونه سوء پیشینه کیفری نداشته و ممنوعیت اصل ۱۴۱ قانون اساسی  و موتد ۱۱۱ و ۱۲۶ لایحه اصلاحی قانون تجارت را نداریم و با امضاء ذیل صورتجلسه ضمن تایید مفاد فوق بدینوسیله قبولی سمت خود را اعلام می داریم.
  </p>
  
  <p>
     به آقای / خانم   ' . $vakil['fname'] . ' ' . $vakil['lname'] . ' ' . 'احدی از سهامداران شرکت ' . _function::fa_number($vakil['masoliat']) . '  میشود که ضمن مراجعه
    به اداره ثبت شرکت ها نسبت به ثبت صورت جلسه و پرداخت حق الثبت و امضاء ذیل
    دفاتر ثبت اقدام نماید.
  </p>
  
  <h4>محل امضاء اعضاء هیئت مدیره: </h4>
  <p>' .
    $sahamdaransjtmemza
    . '
  </p>
  
  </div>
  
  </body>
  </html>';
}

//"۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"

$pdf->WriteHTML($htmlpersian, true, 0, true, 0);

// set LTR direction for english translation

// set LTR direction for english translatio

//Close and output PDF document
$pdf->Output('example_018.pdf', 'I');

// ============================================================+
// END OF FILE
// ============================================================+

  # code...
