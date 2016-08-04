<?php

require_once('../vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// 创建日志频道
$log = new Logger('api');
$log->pushHandler(new StreamHandler('../Logs/web.log', Logger::WARNING));

// 添加日志记录
$log->addWarning('Hello');
$log->addError('Boy');
$log->addInfo('System is dead');
