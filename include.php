<?php
#Get real path for root dir ---linux and windows
$here = dirname(__FILE__);
$here = ($h = realpath($here)) ? $h : $here;
define('ROOT_DIR',str_replace('\\', '/', $here.'/'));
unset($here); unset($h);

define('INCLUDE_DIR',ROOT_DIR.'include/'); //Change this if include is moved outside the web path.
define('ROOT_PATH', 'http://localhost/portfolio/portfolio');
?>