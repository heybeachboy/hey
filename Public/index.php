<?php
//是否开启或关闭DEBUG模式:On开启|Off关闭
define('DEBUG','On');

//网站的根路径
define('HOME_PATH',realpath('..').'/');

//引入第三方库
require_once(HOME_PATH.'vendor/autoload.php');

//初始化设置引入
require_once(HOME_PATH.'setup.php');

//命名空间的引入
require_once(HOME_PATH.'Library/Load.php');

//注册命名空间路径
try{
Load::Put(array(
      'Hello\World' => HOME_PATH.'Library',
      'Hello\Controller' => HOME_PATH.'App/Controller',
      'Hello\Model' => HOME_PATH.'App/Model',
));
//引入依服务
$box = Hello\World\Container\Box::initLoad();


//注册器依赖注入
//Register::Service;

//路由引入
//Route::Load;

//Route->Run
/*
$mail = new Hello\World\Service\Mail('563390109@qq.com');

$mail->from('15086846070@163.com');

$mail->title("this is test mail");

$mail->content("Welcome to Homepage");

$mail->send();
*/
$log = new Hello\World\Container\Box();
$log::initLoad();
$request = new Hello\World\Http\Request();
$code = new Hello\World\Http\httpException();
//var_dump($code::getHttpStatusInfo(404));
var_dump($request->getUrl());
//header($request->getProtocol().' 200 '.$code::getHttpStatusInfo(200));
echo '404';
//echo '<pre>Hey Boy!!!!</pre>';

 } catch (Exception $e){

 echo $e->getMessage();

 }
 ?>
