<?php
//命令接口
interface Command{
     public function execute();
}
//具体命令
class ConcreteCommand implements Command{
     private $_receiver;
     public function __construct($receiver){
          $this->_receiver = $receiver;
     }
     public function execute(){
          $this->_receiver->action();
     }
}

//接受者
class Receiver{
     private $_name;
     public function __construct($name){
          $this->_name = $name;
     }
     //行动方法
     public function action(){
          echo $this->_name.'do action .<br/>';
     }
}
//请求者
class Invoker{
     private $_command;
     public function __construct($command){
          $this->_command = $command;
     }
     public function action(){
          $this->_command->execute();
     }
}

//客户端
class  Client{
     public static function main(){
          $receiver = new Receiver('jaky');
          $command = new ConcreteCommand($receiver);
          $invoker = new Invoker($command);
          $invoker->action();
     }
}
Client::main();
?>
