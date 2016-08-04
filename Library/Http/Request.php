<?php
namespace Hello\World\Http;

class Request {
	
     private $serverInfo;
     
     private $postData;
     
     private $getData;

     private $cookieData;

     private $method;

     private $url;

     private $httpVersion;

     public function __construct($get='',$post='',$server='',$cookie=''){

	     $this->serverInfo = empty($server) ? $_SERVER : $server;

	     $this->getData    = empty($get)    ? $_GET    : $get;

	     $this->postData   = empty($post)   ? $_POST   : $post;

	     $this->cookieData = empty($cookie) ? $_COOKIE : $cookie;

     }
     
     public function getHost(){

           return  isset($this->serverInfo['SERVER_NAME']) ? $this->serverInfo['SERVER_NAME'] : false;

     }

     public function getScheme(){

	  return  isset($this->serverInfo['REQUEST_SCHEME']) ? $this->serverInfo['REQUEST_SCHEME'] : false;

     }

     public function getProtocol(){

	  return  isset($this->serverInfo['SERVER_PROTOCOL']) ? $this->serverInfo['SERVER_PROTOCOL'] : false;

     }

     public function getClientIp(){

	  return  isset($this->serverInfo['REMOTE_ADDR']) ? $this->serverInfo['REMOTE_ADDR'] : false;
     }

     public function getServerIp(){

	 return isset($this->serverInfo['SERVER_ADDR']) ? $this->serverInfo['SERVER_ADDR'] : false;
     }
     public function getServerPort(){

	 return isset($this->serverInfo['SERVER_PORT']) ? $this->serverInfo['SERVER_PORT'] : false;

     }

     public function getRequestCode(){

	 return isset($this->serverInfo['REDIRECT_STATUS']) ? $this->serverInfo['REDIRECT_STATUS'] : false;

     }

     public function getRequestUri(){

	 return isset($this->serverInfo['REQUEST_URI']) ? $this->serverInfo['REQUEST_URI'] : false;

     }

      public function getGetParams(){

	return $this->getData;

    }

    public function getPostParams(){

	return $this->postData;
    }

    public function getMethod(){

	return isset($this->serverInfo['REQUEST_METHOD']) ? $this->serverInfo['REQUEST_METHOD'] : false;

   }

    public function getUrl(){

	$this->url = $this->getScheme().'//'.$this->getHost().$this->getRequestUri();

        return $this->url;
   }

}
	


      

