<?php
include_once("include.php");

if ( !headers_sent() )
    header("Content-Type: text/html; charset=UTF-8\r\n");

date_default_timezone_set('America/Monterrey');

error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING );

require('include/header.inc.php');
require('include/index.inc.php');
require('include/footer.inc.php');
?>