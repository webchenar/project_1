<?php 
require_once ('./TCPDF-main/tcpdf.php');

$pdf = new TCPDF('P', 'px', $defaultSize, true, 'UTF-8', false);
$pdf->SetCreator('abcd.com');
$pdf->SetAuthor('Viraj');
$pdf->SetTitle('HTML Pages');
$pdf->SetMargins(0,0,0);
$pdf->SetHeaderMargin(0);
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->setPrintFooter(false);
$pdf->setPrintHeader(false);
$pdf->SetAutoPageBreak(false, 0);
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$pdf->SetAutoPageBreak(true, 0);
$pdf->AddPage(null);
$pdf->setPageMark();
$pdf->SetFontSize(12);

//Load font front file path url
$fontname = TCPDF_FONTS::addTTFfont('/Users/Work/storage/app/public/Arial regular.ttf', '', '', 32);
echo $fontname;//"arial" use this font in html code
$pdf->AddFont($fontname, '', 14, '', false);

//Load font front file path url
$fontname_ = TCPDF_FONTS::addTTFfont('/Users/Work/storage/app/public/BebasNeue-Regular.ttf', '', '', 32);
echo $fontname;//"bebasneue" use this font in html code
$pdf->AddFont($fontname_, '', 14, '', false);

//HTML code start
$html = '<table border="0" cellpadding="10" style="width: 100%;"  >';
$html .= '<tr nobr="true" >';
$html .= '<td>';

//use loaded font here
$html .= '<font face="arial"  >The formatting rules are not configurable but are already optimized for the best possible output.</font>';
//use loaded font here
$html .= '<font face="bebasneue"  >The formatting rules are not configurable but are already optimized for the best possible output.</font>';

$html .= '</td>';
$html .=   "</tr>";
$html .=   "</table>";

//write html into pdf
$pdf->writeHTML($html);

//save file in output path
/*$filePath = storage_path("app/public/samplePDF.pdf");  
echo "PDF File - ".$filePath;
$pdf->Output($filePath, 'F');*/