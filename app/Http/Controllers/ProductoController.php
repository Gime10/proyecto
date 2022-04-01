<?php

namespace App\Http\Controllers;

class ProductoController{

    function index()
    {
        
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
    function deleteProducto()
    {
        
        return view('borrare Producto');
    }

}