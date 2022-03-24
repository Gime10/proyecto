<?php

namespace App\Http;

class Request{

    private $controller;
    private $method;
  

    public function setController($valor){

        if(empty( $valor[4]))
        {
            $this->controller='home';
        }else
        $this->controller=$valor;
    }
    public function getController(){

       return $this->controller;
    }

    public function setMethod($valor)
    {
        if(empty( $valor[5]))
        {
            $this->method='index';
        }else
        $this->method=$valor;
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
        echo '<p> en el controlador [ '.$this->getController().'] llamar al metodo ['.$this->getMethod() .' ]';

  
    }

}

