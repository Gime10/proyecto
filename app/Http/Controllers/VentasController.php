<?php

namespace App\Http\Controllers;

class VentasController{

    function index()
    {
        echo' lista de ventas realizadas';
        return new \App\Http\Response('ventas');
    }

    function addVenta()
    {
        echo' aqui añadire una venta';
        return view('añadir venta');
    }
    function editVenta()
    {
        echo' aqui editare una venta';
        return view('editar venta ');
    }
    function cancelarVenta()
    {
        echo' aqui cancelare una venta';
        return view('cancelar venta');
    }

}