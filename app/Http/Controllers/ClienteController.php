<?php

namespace App\Http\Controllers;

class ClienteController{

    function index()
    {
        echo' estoy en el indice del cliente';
        return new \App\Http\Response('cliente');
    }

    function addCliente()
    {
        echo' aqui añadire un cliente';
    }
    function editCliente()
    {
        echo' aqui editare un cliente';
    }
    function deleteCliente()
    {
        echo' aqui editare un cliente';
    }



}
