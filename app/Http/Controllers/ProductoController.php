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
            $tableBody .= '<a type="button" class="btn btn-danger btn-sm">Eliminar</a>';
            $tableBody .= '</td>';
            $tableBody .= '<td>';
            $tableBody .= '<a type="button" class="btn btn-success btn-sm" href="/Producto/edit/'.$value->id.'" role="button">Editar</a>';
            $tableBody .= '</td>';
            $tableBody .= '</tr>';
        }

        return view('ListarProducto', ['title' => 'Lista de productos', 'tableBody' => $tableBody]  );
    }

    function add()
    {

        return view('ListarProducto');
    }
    function edit($id)
    {
       echo $id;
        return view('ListarProducto');
    }

    function save()
    {
        $producto=new \App\Models\Producto;
        $producto->id=$_POST['id'];
        $producto->nombre=$_POST['nombre'];
        $producto->empresa=$_POST['empresa'];
        $producto->precio=$_POST['precio'];
        $producto->categoria=$_POST['categoria'];
        $producto->descripcion=$_POST['descripcion'];
    
        $producto->save();
 
        return redirect('/Producto');
    }
}
