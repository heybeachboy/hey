<?php
date_default_timezone_set('Asia/Chongqing');

if(DEBUG==='On'){

error_reporting(E_ALL ^ E_NOTICE);

 }else{

 ini_set('display_errors','Off');

 ini_set('log_errors_max_len','1024');

 ini_set('log_errors','On');

 ini_set('error_log',HOME_PATH.'Logs/php_error.log');

 }


