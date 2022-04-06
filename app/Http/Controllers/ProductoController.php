<?php

namespace App\Http\Controllers;

class ProductoController
{

    function index()
    {

        $producto = new \App\Models\Producto;
        $result = $producto->getProductos();
        //var_dump($result);

        $tableBody = '';

        foreach ($result as $value) {
            $tableBody .= '<tr>';
            $tableBody .= '<td>';
            $tableBody .= $value->id;
            $tableBody .= '</td>';
            $tableBody .= '<td>';
            $tableBody .= $value->nombre;
            $tableBody .= '</td>';
            $tableBody .= '<td>';
            $tableBody .= $value->empresa;
            $tableBody .= '</td>';
            $tableBody .= '<td>';
            $tableBody .= $value->precio;
            $tableBody .= '</td>';
            $tableBody .= '<td>';
            $tableBody .= $value->categoria;
            $tableBody .= '</td>';
            $tableBody .= '<td>';
            $tableBody .= $value->descripcion;
            $tableBody .= '</td>';
            $tableBody .= '<td>';
            $tableBody .= '<button type="button" class="btn btn-danger">Eliminar</button>';
            $tableBody .= '</td>';
            $tableBody .= '</tr>';
        }

        return view('ListarProducto', ['title' => 'Lista de productos', 'tableBody' => $tableBody]  );
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
