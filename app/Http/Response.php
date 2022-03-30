<?php

namespace App\Http;

class Response
{
    private $view;

    function __construct($view)
    {
        $this->view = $view;
    }

    function send()
    {
        echo 'enviar como respuesta la vista ' . $this->view;
    }
}