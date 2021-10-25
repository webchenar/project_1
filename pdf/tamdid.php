<?php
require_once ('./TCPDF-main/tcpdf.php');

require_once('../config/Data.Class.php');

require_once('../src/function.php');

//_function::logIn();


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
 $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '5', PDF_FONT_SIZE_MAIN));

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
 $lg = Array();
 $lg['a_meta_charset'] = 'UTF-8';
 $lg['a_meta_dir'] = 'rtl';
 $lg['a_meta_language'] = 'fa';
 $lg['w_page'] = 'page';

// // set some language-dependent strings (optional)
 $pdf->setLanguageArray($lg);

// // ---------------------------------------------------------

// // set font
 $pdf->SetFont('parastoo', 'B', 9);

// // add a page
 $pdf->AddPage();

// $fasele = '';

// //مشخصات شرکت
 $c_name = $sj['c_name'];

 $c_shenase_meli = $sj['c_shenase_meli'];

 $c_shomare_sabt = $sj['c_shomare_sabt'];

 $c_sarmaye = $sj['c_sarmaye'];

 $time_j = $sj['t_shorooe_jalase'];

 $date_j = $sj['d_shorooe_jalase'];

 $hozor = $sj['hozor'];

 $rozname = $sj['rooz_name'];

 $c_adress = $sj['c_adress'];

// //مشخصات سهامداران
//var_dump($sahamdaran);
$sahamdarExport = '<table>';
$sahamdaranEmza = '<table>';
$i = 0;
foreach($sahamdaran as $sahamdar){
  $tableRowS = NULL;
  $tableRowE = NULL;
  if ($i % 2 == 0) {
    $tableRowS = '<tr>';
    $tableRowE = NUll;
  }else{
    $tableRowS = NULL;
    $tableRowE = '</tr>';
  }
  $i++;
  $sahamdarExport .= $tableRowS .'<td>'. $i . '-' . 'آقای / خانم ' . $sahamdar['fname'].' ' . $sahamdar['lname']. ' دارنده '. $sahamdar['tedad_saham'] . ' سهم' .'</td>' . $tableRowE;
  
  $sahamdaranEmza  .= $tableRowS .'<td>' . $i . '-' . 'آقای / خانم ' . $sahamdar['fname'].' ' . $sahamdar['lname'].'</td>' . $tableRowE;

}


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
foreach($sahamdaran 
as $sahamdar){

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
  foreach($masolan as $masol){
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
foreach($sahamdaran as $sahamdar){

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
  foreach($masolan as $masol){
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
foreach($masolan as $masol){
  if (strcmp($masol['masoliat'], 'بازرس اصلی')  == 0) {
    $bazres1 = $masol;
  }
  if (strcmp($masol['masoliat'], 'بازرس علی البدل')  == 0) {
    $bazres2 = $masol;
  }
}

//پیدا کردن نماینده/وکیل قانونی
$vakil;
foreach($masolan as $masol){
  if (strcmp($masol['masoliat'], 'نماینده قانونی')  == 0) {
    $vakil = $masol;
  }
  if (strcmp($masol['masoliat'], 'وکالت داده')  == 0) {
    $vakil = $masol;
  }
}


//Persian and English content
$htmlpersian = '
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tamdid Sherkat</title>
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
<h4 style="text-align: right">سرمابه ثبت شده: ' . $c_sarmaye . '</h4>
<h4 style="text-align: right">شناسه ملی: ' . $c_shenase_meli . '</h4>

<p>
  جلسه مجمع عمومی عادی شرکت فوق در ساعت ' . $time_j . ' و در تاریخ ' . $date_j . ' با حضور ' .$hozor. '
  به شرح زیر در محل قانونی شرکت واقع در ' . $c_adress . ' تشکیل گردید.
</p>

<h4>الف: سهامداران حاضر در جلسه عبارتند از:</h4>
'. $sahamdarExport .'
<h4>
طبق ماده 101 لایحه اصلاحی قانون تجارت اعضای هیئت رئیسه به شرح زیر انتخاب
شدند: 
</h4>

  <table>
    <tr>
      <td>
        1.آقای / خانم ' .$raeisJalase . ' به سمت رئیس جلسه
      </td>
      <td>
        2.آقای / خانم ' .  $nazer1. ' به سمت ناظر جلسه
      </td>
    </tr>
    <tr>
      <td>
        3.آقای / خانم ' .$nazer2 . ' به سمت ناظر جلسه
      </td>
      <td> 
      4.آقای / خانم ' . $monshi.' به سمت منشی جلسه انتخاب شدند.</td>
    </tr>
  </table>
<p>
  ب: در خصوص دستور جلسه، 1-انتخاب مدیران 2-انتخاب بازرسان 3-انتخاب روزنامه
  کثیرالانتشار به شرح زیر اتخاذ تصمیم شد
</p>

<p >
  ب1: مقرر شد بین سهامداران یک نفر به عنوان اعضای هیئت مدیره انتخاب شوند
  که در نتیجه آقای / خانم ' .$raeisHiatModire['fname']. ' ' . $raeisHiatModire['lname'] . ' ' . '  به شماره ملی '. ' '  . $raeisHiatModire['meli_code'] . ' ' . ' به سمت رئیس
  هیئت مدیره و آقای / خانم ' .$naebRaeis['fname']. ' ' . $naebRaeis['lname'] . ' ' . ' به شماره ملی  '. ' '  . $naebRaeis['meli_code'] . ' ' . ' به عنوان نائب رئیس هیئت
  مدیره، آقای / خانم ' .$ozvAsli['fname']. ' ' . $ozvAsli['lname'] . ' ' . '  به شماره ملی  '. ' '  . $ozvAsli['meli_code'] . ' ' . 'به سمت عضو اصلی هیئت مدیره
  برای مدت دو سال انتخاب شدند که با امضا ذیل صورتجلسه قبولی خود را اعلام می
  دارند. مجمع تصویب نمود در اجرای ماده 124 لایحه اصلاحی قانون تجارت میتواند
  رئیس هیئت مدیره ' .  $cheModiAlel .' یک نفر باشد.
</p>

<p>
     ب 2:انتخاب بازرس: با رعایت ماده 147 بایحه اصلاحی قانون تجارت آقای / خانم  ' .$bazres1['fname']. ' ' . $bazres1['lname'] . ' ' . 'به شماره ملی '. ' '  . $bazres1['code_meli'] . ' ' . ' 
     به سمت بازرس اصلی و آقای / خانم ' .$bazres2['fname']. ' ' . $bazres2['lname'] . ' ' . '
     به شماره ملی '  . $bazres2['code_meli'] . ' ' . ' به سمت بازرس علی البدل برای مدت یک
  سال مالی انتخاب شدند.
</p>

<h4>ب 3:روزنامه   کثیرالانتشار '. $rozname . ' جهت نشر آگهی های شرکت انتخاب شدند.</h4>

<p>
  ج: اینجانبان اعضای هیئت مدیره ضمن قبولی سمت خود اقرار مینماییم که هیچ گونه
  سوء پیشینه کیفری نداشته و ممنوعیت اصل 141 قانون اساسی و مواد 111 و 147
  لایحه اصلاحی قانون تجارت را ندارم.
</p>

<p>
   به آقای / خانم   ' .$vakil['fname']. ' ' . $vakil['lname'] . ' ' . 'احدی از سهامداران شرکت ' .$vakil['masoliat']. '  میشود که ضمن مراجعه
  به اداره ثبت شرکت ها نسبت به ثبت صورت جلسه و پرداخت حق الثبت و امضاء ذیل
  دفاتر ثبت اقدام نماید.
</p>

<h3>امضاء هیئت رئیسه:</h3>
<table>
<tr>
  <td>
    1.آقای / خانم ' .$raeisJalase . '  رئیس جلسه
  </td>
  <td>
    2.آقای / خانم ' .  $nazer1. '  ناظر جلسه
  </td>
</tr>

<tr>
  <td>
    3.آقای / خانم ' .$nazer2 . '  ناظر جلسه
  </td>
  <td> 
  4.آقای / خانم ' . $monshi.' منشی .</td>
</tr>
</table>



<h3>امضاء اعضای هیئت مدیره و سهامداران: </h3>

'.$sahamdaranEmza. $modirAmelExport . '


<h3>امضای بازرسان:</h3>

<table>
  <tr>
    <td>1.  بازرس اصلی' . ' ' . $bazres1['fname']. ' ' . $bazres1['lname'] . ' ' . ' </td>
    <td>2.  بازرس علی البدل' . ' ' .$bazres2['fname']. ' ' . $bazres2['lname'] . ' ' . '</td>
  </tr>
</table>

</div>

</body>
</html>
';
$pdf->WriteHTML($htmlpersian, true, 0, true, 0);

// set LTR direction for english translation

// set LTR direction for english translatio

//Close and output PDF document
$pdf->Output('example_018.pdf', 'I');

// ============================================================+
// END OF FILE
// ============================================================+

  # code...
