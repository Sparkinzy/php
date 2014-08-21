<?php


require (dirname (__FILE__) . "/class-excel-xml.inc.php");
$a = iconv("utf-8","gbk","张存超");
// create a dummy array
$doc = array (

    1 => array ("$a", "$a", "$a"),
         array ("$a", "$a", "21")
    );

// generate excel file
$xls = new Excel_XML;
$xls->addArray ( $doc );
$xls->generateXML ("mytest");

?>