<?php
require_once ('./TCPDF-main/tcpdf.php');

TCPDF_FONTS::addTTFfont('Parastoo.ttf', 'TrueTypeUnicode', '', 96);
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
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
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
$pdf->SetFont('sahel', 'B', 10);

// add a page
$pdf->AddPage();

// Persian and English content
$htmlpersian = '<h2 style="text-align: center">بسمه تعالی</h2>
<h2 style="text-align: center">
  صورت جلسه مجمع عمومی عادی برای انتخاب مدیران و بازرسان و روزنامه کثیر
  الانتشار
</h2>
<h4 style="text-align: right">نام شرکت:</h4>
<h4 style="text-align: right">شماره ثبت شرکت:</h4>
<h4 style="text-align: right">شناسه ملی:</h4>

<h4>
  جلسه مجمع عمومی عادی شرکت فوق در ساعت $ : $ و در تاریخ $ / $ / با حضور $$$
  به شرح زیر در محل قانونی شرکت واقع در $$$$ تشکیل گردید.
</h4>

<h4>الف: سهامداران حاضر در جلسه عبارتند از:</h4>

<h4>1:آقای/خانم $$$$$$$$$$ دارنده $$$ سهم</h4>

<h4>
  طبق ماده 101 لایحه اصلاحی قانون تجارت اعضای هیئت رئیسه به شرح زیر انتخاب
  شدند:
</h4>

  <h4 style="display: inline">1.آقای/خانم $$$$$$ به سمت رئیس جلسه</h4>


  <h4 style="display: inline">2.آقای/خانم $$$$$$ به سمت ناظر جلسه</h4>

  <h4 style="display: inline">3.آقای/خانم $$$$$$ به سمت ناظر جلسه</h4>

  <h4 style="display: inline">
    4.آقای/خانم $$$$$$ به سمت منشی جلسه انتخاب شدند.
  </h4>

<h4>
  ب: در خصوص دستور جلسه، 1-انتخاب مدیران 2-انتخاب بازرسان 3-انتخاب روزنامه
  کثیرالانتشار به شرح زیر اتخاذ تصمیم شد
</h4>

<h4>
  ب1: مقرر شد بین سهامداران ..... نفر به عنوان اعضای هیئت مدیره انتخاب شوند
  که در نتیجه آقای/خانم ...... به شماره ملی ....... به سمت مدیر عامل و رئیس
  هیئت مدیره و آقای/خانم .......به شماره ملی .......به عنوان نائب رئیس هیئت
  مدیره، آقای/خانم .........به شماره ملی .....به سمت عضو اصلی هیئت مدیره
  برای مدت دو سال انتخاب شدند که با امضا ذیل صورتجلسه قبولی خود را اعلام می
  دارند. مجمع تصویب نمود در اجرای ماده 124 لایحه اصلاحی قانون تجارت میتواند
  رئیس هیئت مدیره و مدیر عامل یک نفر باشد.
</h4>

<h4>
  ب2:انتخاب بازرس: با رعایت ماده 147 بایحه اصلاحی قانون تجارت آقای/خانم
  .......... به شماره ملی .........به سمت بازرس اصلی و آقای/خانم
  ............ به شماره ملی ........... به سمت بازرس علی البدل برای مدت یک
  سال مالی انتخاب شدند.
</h4>

<h4>ب3:روزنامه کثیرالانتشار ... جهت نشر آگهی های شرکت انتخاب شدند.</h4>

<h4>
  ج: اینجانبان اعضای هیئت مدیره ضمن قبولی سمت خود اقرار مینماییم که هیچ گونه
  سوء پیشینه کیفری نداشته و ممنوعیت اصل 141 قانون اساسی و مواد 111 و 147
  لایحه اصلاحی قانون تجارت را ندارم.
</h4>

<h4>
  به آقای/خانم ......احدی از سهامداران شرکت ....... داده میشود که ضمن مراجعه
  به اداره ثبت شرکت ها نسبت به ثبت صورت جلسه و پرداخت حق الثبت و امضاء ذیل
  دفاتر ثبت اقدام نماید.
</h4>

<h4>امضاء هیئت رئیسه:</h4>


  <h4>رئیس جلسه:............</h4>



  <h>ناظر جلسه:............</h4>



  <h4 style="display: inline">ناظر جلسه:............</h4>

  <h4 style="display: inline">منشی جلسه:............</h4>


<h4>:امضاء اعضای هیئت مدیره و سهامداران</h4>

<h4>امضای بازرسان:</h4>
';
$pdf->WriteHTML($htmlpersian, true, 0, true, 0);

// set LTR direction for english translation

// set LTR direction for english translatio

//Close and output PDF document
$pdf->Output('example_018.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+


?>