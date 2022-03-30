<?php

namespace App\Http;

class Request{

    private $controller;
    private $method;
  

    public function setController($valor){

        if(empty( $valor[3]))
        {
            $this->controller='home';
        }else
        $this->controller=$valor[3];
    }
    public function getController(){
        $aux= strtolower($this->controller);// pasa a minuscula
        $aux= ucfirst($aux); // pone la primera letra en mayuscula
        $aux='App\Http\Controllers\\'.$aux.'Controller';

       return $aux;
    }

    public function setMethod($valor)
    {
        if(empty($valor[4]))
        {
            $this->method='index';
        }else
        $this->method=$valor[4];
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
        call_user_func([new $myController, $mymethod]);  
  
    }

}

