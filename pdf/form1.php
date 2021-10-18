<?php
require_once ('./TCPDF-main/tcpdf.php');

TCPDF_FONTS::addTTFfont('./Nazanin.ttf', '', '', 32);

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
$pdf->SetFont('parastoo', 'B', 12);

// add a page
$pdf->AddPage();

// Persian and English content
$htmlpersian = '<h2 style="text-align: center;">بسمه تعالی</h3>
<h3 style="text-align: center;">صورت جلسه هیئت مدیره موسسات</h2>
<h4 style="text-align: right;">نام موسسه غیر تجاری: </h4>
<h4 style="text-align: right;">شماره ثبت موسسه: </h4>
<h4 style="text-align: right;">شماره ملی: </h4>
<h4 style="text-align: justify;">جلسه هیات مدیره موسسه غیر تجاری $ شماره ثبت $ و شناسه ملی $ در تاریخ $ ساعت $ با حضور کلیه اعضا به آدرس $ تشکیل گردید.</h4>
<h4>دستور جلسه: $</h4>
<h4>اعضای هیئت مدیره: </h4>
<h4 style="text-align: justify;">$ به سمت رئیس هیئت مدیره $ به سمت نایب رئیس هیئت مدیره $ به سمت خزانه دار. $ و $ به سمت اعضای اصلی هیئت مدیره. $ به سمت عضو علی البدل اول هیات مدیره. $ به سمت عضو علی البدل دوم هیئت مدیره برای مدت $ سال انتخاب گردید.</h4>

<h4 style="text-align: justify;">
تمامی اسناد و اوراق بهادار و تعهد آور به امضا رئیس هیئت مدیره $ و مدیر عامل $ با مهر موسسه معتبر خواهد بود.
</h4>

<h4>
    کلیه اعضا به $ بدون حق توکیل به غیر وکالت میدهند جهت ثبت صورتجلسه و امضا دفاتر ثبت شرکتها اقدام نمایند.
</h4>

<h4 style="margin: 100px;">امضاء اعضا: </h4>



<div>
&nbsp;&nbsp;&nbsp;   $  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  $ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   $ 
</div>


<div>
&nbsp;&nbsp;&nbsp; $ &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;   $  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $
</div>
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