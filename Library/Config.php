<?php

namespace Hello\World;

class Config implements \ArrayAccess{
      
  private $config=array();

  private $path=NULL;

 public function __construct($config){

      $this->path= HOME_PATH.'App/Config/'.$config.'.php';
//      echo $this->path;
     if(file_exists($this->path)){

     $this->config=require("$this->path");

     }else{

  throw new \Exception("WARING:Configure is not exists",'404');die();

   }
 }

 public function offsetSet($offset,$value){

    if(is_null($offset)){
     
       $this->config[ ] = $value;

    }else{


      $this->config[$offset] = $value;

  }

 }

  public function offsetExists($offset){

   return isset($this->config[$offset]);

 }

  public function offsetGet($offset){

  return (isset($this->config["$offset"])) ? $this->config["$offset"] : null;

 }

 public function offsetUnset($offset){

  unset($this->config[$offset]);

}
 }
