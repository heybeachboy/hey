<?php
namespace Hello\World\Inface;

interface Register {

public static function set($alias,$object);

public static function get($alias);

public static function del($alias);


}
