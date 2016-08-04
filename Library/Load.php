<?php

require_once('Autoload.php');

class Load {
static  private $load;
static  public function Put($namespace){
 
    self::$load = new Autoload();

    self::$load->register();

     foreach($namespace as $key => $value){

     self::$load->addNamespace($key,$value);
}
     }
 }
