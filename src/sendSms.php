<?php
var_dump($_GET);
if (isset($_GET['number']) and isset($_GET['txt'])) {

ini_set("soap.wsdl_cache_enabled",0);
$sms = new SoapClient("http://api.payamak-panel.com/post/Send.asmx?wsdl",array("encoding"=>"UTF-8"));
$data = array("username"=>"09179335012" ,
"password"=>"5ZMH0",
"to"=>array($_GET['number'], $_GET['number2'] ),
"from"=>"50004001335012",
"text"=>$_GET['txt'],
"isflash"=>false);
$result = $sms->SendSimpleSMS($data)->SendSimpleSMSResult;

var_dump($data);
var_dump($result);
echo 'send:' . $_GET['txt'] . '|width=>' . $_GET['number'] . $_GET['number2'];
}


?>

