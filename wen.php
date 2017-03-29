<?php

 include_once 'lib/Template/AnalyticObject.php';
 include_once 'lib/Template/ExecuteHtmlTrObject.php';
 include_once 'lib/Template/ExtractHtml.php';
 include_once 'lib/Template/file_option.php';

 $tarpath="G:\\t\\r\\htdoc\\jj\\lib\\Template\\mubiao.html";
 $tempath="G:\\t\\r\\htdoc\\jj\\lib\\Template\\indexs.html";
 $doc = new ExecuteHtmlTrObject($tarpath, $tempath);
 $doc->setType(2);
 $doc->init();
 $doc->run();
// $doc = new DOMDocument();
// $doc->loadHTMLFile($tempath);