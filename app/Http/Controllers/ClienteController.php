<?php

namespace App\Http\Controllers;

class ClienteController{

    function index()
    {
       
        return view('ListarCliente');
    }

    function addCliente()
    {
        
        return view('NuevoCliente');
    }
    function editCliente()
    {
       
        return view('EditarCliente');
    }


}
