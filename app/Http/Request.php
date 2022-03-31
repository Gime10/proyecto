<?php

namespace App\Http;

class Request{

    private $controller;
    private $method;
  

    public function setController($valor){

        if(empty( $valor[1]))
        {
            $this->controller='home';
        }else
        $this->controller=$valor[1];
    }
    public function getController(){
        $aux= strtolower($this->controller);// pasa a minuscula
        $aux= ucfirst($aux); // pone la primera letra en mayuscula
        $aux='App\Http\Controllers\\'.$aux.'Controller';

       return $aux;
    }

    public function setMethod($valor)
    {
        if(empty($valor[2]))
        {
            $this->method='index';
        }else
        $this->method=$valor[2];
    }
    public function getMethod()
    {
      return $this->method;
    }

    public function __construct()
    {
        $segment = explode('/',$_SERVER['REQUEST_URI']);
        $this->setController($segment);
        $this->setMethod($segment);

  
    }
    public function send()
    {
        $myController=$this->getController();
        $mymethod=$this->getMethod();
        $myResponse = call_user_func([new $myController, $mymethod]);  
       
        $myResponse->send();
    }

}

