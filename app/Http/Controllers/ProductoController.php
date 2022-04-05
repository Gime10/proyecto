<?php

namespace App\Http\Controllers;

class ProductoController{

    function index()
    {
        $producto= new \App\Models\Producto;
        $result=$producto->getProductos();
        echo $result;

        return view('ListarProducto');
    }

    function addProducto()
    {
       
        return view('añadir producto');
    }
    function editProducto()
    {
       
        return view('editar Producto');
    }


}