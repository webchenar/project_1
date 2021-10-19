<?php
require_once ('./TCPDF-main/tcpdf.php');

require_once('../config/Data.Class.php');

require_once('../src/function.php');

//_function::logIn();

$data = new DataBase();

$data_sj = $data->search('sj_tamdid_sahami_khas', 'rel_user', isset($_SESSION['phone']) ? $_SESSION['phone'] : $_COOKIE['phone']);

// var_dump($data_sj);

$sj_id = $data_sj['sj_id'];

$sahamdaran = $data->searchAll('sahamdaran', 'id_sj_tamdid_sahami_khas', $sj_id);

// var_dump($sahamdaran);

$masolan = $data->searchAll('masolan_sj_tamdid_sahami_khas', 'id_sj', $sj_id);

//مشخصات شرکت


// var_dump($masolan);



/*
if ($chek) {


//TCPDF_FONTS::addTTFfont('Parastoo.ttf', 'TrueTypeUnicode', '', 96);
//============================================================+
// File name   : example_018.php
// Begin       : 2008-03-06
// Last Update : 2013-05-14
//
// Description : Example 018 for TCPDF class
//               RTL document with Persian language
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: RTL document with Persian language
 * @author Nicola Asuni
 * @since 2008-03-06
 */


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '5', PDF_FONT_SIZE_MAIN));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 10, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language dependent data:
$lg = Array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'rtl';
$lg['a_meta_language'] = 'fa';
$lg['w_page'] = 'page';

// set some language-dependent strings (optional)
$pdf->setLanguageArray($lg);

// ---------------------------------------------------------

// set font
$pdf->SetFont('parastoo', 'B', 9);

// add a page
$pdf->AddPage();

$fasele = '';

//مشخصات شرکت
$c_name = $data_sj['c_name'];

$c_shenase_meli = $data_sj['c_shenase_meli'];

$c_shomare_sabt = $data_sj['c_shomare_sabt'];

$c_sarmaye = $data_sj['c_sarmaye'];

$time_j = $data_sj['t_shorooe_jalase'];

$date_j = $data_sj['d_shorooe_jalase'];

$hozor = $data_sj['hozor'];

$rozname = $data_sj['rooz_name'];

//مشخصات سهامداران

$raeisHiatModire = null;
$naebraeisHiatModire = null;
$ozveAsliHiatModire = null;
$i = 0;

$iNazer = 0;
$sahamdaranexport = null;

$raeisJalase = null;

$nazerJalase = null;

$modiramel = null;

$monshiJalase = null;

$sahamdarEmza = null;

foreach($sahamdaran as $sahamdar){
  if ($i%2 == 0) {
    $space = '<br><br>';
  }else{$space = null;}
  $i++;
  $sahamdaranexport .=  $space . $i . ': آقای / خانم ' .  $sahamdar['lname']  . ' ' . $sahamdar['fname'] . ' دارنده ' . $sahamdar['tedad_saham'] . ' سهم ' . '&nbsp;&nbsp;&nbsp;';

  $sahamdarEmza .= $space . $i . '' .  $sahamdar['lname']  . ' ' . $sahamdar['fname'] .' ' . $sahamdar['semat_nahaei'] . $fasele;


  if (strcmp($sahamdar['vazife_jalase'], 'رئیس جلسه') == 0) {
    $raeisJalase = $sahamdar;
  }

  elseif (strcmp($sahamdar['vazife_jalase'], 'ناظر جلسه') == 0) {
    $nazerJalase[$iNazer] = $sahamdar;
    $iNazer++;
  }

  elseif (strcmp($sahamdar['vazife_jalase'], 'منشی جلسه') == 0) {
    $monshiJalase = $sahamdar;
  }

  if (strcmp($sahamdar['semat_nahaei'], 'رئیس هیئت مدیره') == 0) {
    $raeisHiatModire = $sahamdar;
  }
  if (strcmp($sahamdar['semat_nahaei'], 'نائب رئیس هیئت مدیره') == 0) {
    $naebraeisHiatModire = $sahamdar;
  }
  if (strcmp($sahamdar['semat_nahaei'], 'عضو اصلی هیئت مدیره') == 0) {
    $ozveAsliHiatModire = $sahamdar;
  }
}

//مشخصات مسئولین


$bazres = null;
$bazresbadal = null;
$vakil = null;
$namaiande = null;

foreach($masolan as $masol){
  if (strcmp($masol['masoliat'], 'مدیر عامل') == 0) {
    $modiramel = $masol;
  }
  elseif (strcmp($masol['masoliat'], 'بازرس اصلی') == 0) {
    $bazres = $masol;
  }
  elseif (strcmp($masol['masoliat'], 'بازرس علی البدل') == 0) {
    $bazresbadal = $masol;
  }
  elseif (strcmp($masol['masoliat'], 'وکالت داده') == 0 or strcmp($masol['masoliat'], 'نماینده قانونی') == 0) {
    $vakil = $masol;
  }

}


//اضافه کردن مدیر عاملی برای امضا در کنار سهاندار
$sahamdarEmza .= '<br><br>' . $i . ' ' .  $modiramel['fname']  . ' ' . $modiramel['lname'] .' ' . $modiramel['masoliat'] . $fasele;
//var_dump($raeisJalase);

//Persian and English content
$htmlpersian = '<div style="text-align: justify;">
<h2 style="text-align: center">بسمه تعالی</h2>
<h2 style="text-align: center">
  صورت جلسه مجمع عمومی عادی برای انتخاب مدیران و بازرسان و روزنامه کثیر
  الانتشار
</h2>
<h4 style="text-align: right">نام شرکت: ' . $c_name . '</h4>
<h4 style="text-align: right">شماره ثبت شرکت: ' . $c_shomare_sabt . '</h4>
<h4 style="text-align: right">سرمابه ثبت شده: ' . $c_sarmaye . '</h4>
<h4 style="text-align: right">شناسه ملی: ' . $c_shenase_meli . '</h4>

<h4>
  جلسه مجمع عمومی عادی شرکت فوق در ساعت ' . $time_j . ' و در تاریخ ' . $date_j . ' با حضور ' .$hozor. '
  به شرح زیر در محل قانونی شرکت واقع در  تشکیل گردید.
</h4>

<h4>الف: سهامداران حاضر در جلسه عبارتند از:</h4>

<h4>
' . $sahamdaranexport . '
</h4>
<h4>
  طبق ماده 101 لایحه اصلاحی قانون تجارت اعضای هیئت رئیسه به شرح زیر انتخاب
  شدند:
</h4>

  <h4>
  
  1.آقای / خانم ' . $raeisJalase['fname'] . ' ' . $raeisJalase['lname'] . ' به سمت رئیس جلسه
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  2.آقای / خانم ' . $nazerJalase[0]['lname'] . ' ' . $nazerJalase[0]['fname'] . ' به سمت ناظر جلسه

  <br><br>

  3.آقای / خانم ' . $nazerJalase[1]['lname'] . ' ' . $nazerJalase[1]['fname'] . ' به سمت ناظر جلسه

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  4.آقای / خانم ' . $monshiJalase['lname'] . ' ' . $monshiJalase['fname'] . ' به سمت منشی جلسه انتخاب شدند.
  </h4>

<h4>
  ب: در خصوص دستور جلسه، 1-انتخاب مدیران 2-انتخاب بازرسان 3-انتخاب روزنامه
  کثیرالانتشار به شرح زیر اتخاذ تصمیم شد
</h4>

<h4>
  ب1: مقرر شد بین سهامداران یک نفر به عنوان اعضای هیئت مدیره انتخاب شوند
  که در نتیجه آقای / خانم  ' . $raeisHiatModire['lname'] . ' ' . $raeisHiatModire['fname'] . ' به شماره ملی ' . $raeisHiatModire['meli_code'] . ' به سمت رئیس
  هیئت مدیره و آقای / خانم ' .$naebraeisHiatModire['lname'] . '   ' . $naebraeisHiatModire['fname']. '  به شماره ملی  ' . $naebraeisHiatModire['meli_code'] . '   به عنوان نائب رئیس هیئت
  مدیره، آقای / خانم ' .$ozveAsliHiatModire['fname'] . '   ' . $ozveAsliHiatModire['lname']. ' به شماره ملی ' . $ozveAsliHiatModire['meli_code'] . 'به سمت عضو اصلی هیئت مدیره
  برای مدت دو سال انتخاب شدند که با امضا ذیل صورتجلسه قبولی خود را اعلام می
  دارند. مجمع تصویب نمود در اجرای ماده 124 لایحه اصلاحی قانون تجارت میتواند
  رئیس هیئت مدیره و مدیر عامل یک نفر باشد.
</h4>

<h4>
   ب 2:انتخاب بازرس: با رعایت ماده 147 بایحه اصلاحی قانون تجارت آقای / خانم 
   ' .$bazres['fname'] . '   ' . $bazres['lname']. ' به شماره ملی  ' . $bazres['code_meli'] . 'به سمت بازرس اصلی و آقای / خانم
   ' .$bazresbadal['fname'] . '   ' . $bazresbadal['lname']. '  به شماره ملی  ' . $bazresbadal['code_meli'] . ' به سمت بازرس علی البدل برای مدت یک
  سال مالی انتخاب شدند.
</h4>

<h4>ب 3:روزنامه کثیرالانتشار ' . $rozname . ' جهت نشر آگهی های شرکت انتخاب شدند.</h4>

<h4>
  ج: اینجانبان اعضای هیئت مدیره ضمن قبولی سمت خود اقرار مینماییم که هیچ گونه
  سوء پیشینه کیفری نداشته و ممنوعیت اصل 141 قانون اساسی و مواد 111 و 147
  لایحه اصلاحی قانون تجارت را ندارم.
</h4>

<h4>
   به آقای / خانم ' .$vakil['fname'] . ' ' . $vakil['lname'] . ' احدی از سهامداران شرکت ' . $vakil['masoliat']. '  میشود که ضمن مراجعه
  به اداره ثبت شرکت ها نسبت به ثبت صورت جلسه و پرداخت حق الثبت و امضاء ذیل
  دفاتر ثبت اقدام نماید.
</h4>

<h3>امضاء هیئت رئیسه:</h3>

<h4>1.' . $raeisJalase['fname'] . ' ' . $raeisJalase['lname'] . '  رئیس جلسه

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


2.' . $nazerJalase[0]['lname'] . ' ' . $nazerJalase[0]['fname'] . '  ناظر جلسه

<br><br>

3.' . $nazerJalase[1]['lname'] . ' ' . $nazerJalase[1]['fname'] . '  ناظر جلسه

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



4.' . $monshiJalase['lname'] . ' ' . $monshiJalase['fname'] . '  منشی جلسه 
</h4>
<br><br><br><br>

<h3>امضاء اعضای هیئت مدیره و سهامداران: </h3>

' . $sahamdarEmza . '


<h3>امضای بازرسان:</h3>
<h4>1.' . $bazres['fname'] . ' ' . $bazres['lname'] . '  بازرس اصلی

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


2.' . $bazresbadal['lname'] . ' ' . $bazresbadal['fname'] . '  بازرس علی البدل

</div>';
$pdf->WriteHTML($htmlpersian, true, 0, true, 0);

// set LTR direction for english translation

// set LTR direction for english translatio

//Close and output PDF document
$pdf->Output('example_018.pdf', 'I');

// ============================================================+
// END OF FILE
// ============================================================+

  # code...

?>