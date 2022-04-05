<?php

namespace App\Http\Controllers;

class ProductoController{

    function index()
    {
        
        $producto= new \App\Models\Producto;
        $result=$producto->getProductos();
        var_dump($result);
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