<?php
namespace Hello\World\Service;

use Hello\World\Inface\Cache;

use Hello\World\Config;

use Hello\World\Service\ServiceException;

class Redis implements Cache {

private $config;

public function __construct(){

 
 $this->config = new Config('Redis');

}

public function set(){


}
