<?php

namespace Hello\World\Inface;

interface Cach {

 public function set($key,$value,$expire);

 public function get($key);

 public function del($key);

 public function flush($key);

 }
