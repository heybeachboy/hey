<?php

namespace Hello\World\Container;

use Hello\World\Inface\Register;

class Box implements Register {

  private static  $objGroup = array();

  public static function set($alias,$object){

   if(!isset($objGroup[$alias]))

     $objGroup[$alias] = new $object;


   }

   public static function get($alias){

   if(isset($objGroup[$alias])){
    
     return $objGroup[$alias];

     }else{

     return false;

     }

     }

    public static function del($alias){

    if(isset($obj[$alias])){
 
     unset($obj[$alias]) ;

     }
 
     } 

    public static function initLoad(){

     
    //self::set('Mail','Hello\World\Service\Mail');

    self::set('Log','Hello\World\Service\Log');

    }
     
    } 
