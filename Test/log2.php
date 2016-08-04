<?php

require_once('../vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

// 创建Logger实例
$logger = new Logger('my_logger');
// 添加handler
$logger->pushHandler(new StreamHandler('../Logs/my_app.log', Logger::INFO));
$logger->pushHandler(new FirePHPHandler());

$logger->addError('error');

// 开始使用
$logger->addInfo('My logger is now ready');
