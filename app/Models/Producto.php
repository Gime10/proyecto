<?php

namespace App\Models;

class BaseProducto
{

    function getProductos()
    {

        $conection = \App\Database\ConectionPDO::createConection();
        $statement = $conection->prepare('Select * from producto');
        $statement-> execute();
        $arrayResult= $statement->fetchAll();
        $arrayProducto=array();
        foreach( $arrayResult as $row)
        {
            $producto= new Producto();
            $producto->id =$row["id"];
            $producto->nombre =$row["nombre"];
            $producto->empresa =$row["empresa"];
            $producto->precio =$row["precio"];
            $producto->categoria =$row["categoria"];
            $producto->descripcion =$row["descripcion"];
            array_push($arrayProducto,$producto);
        }
          return $arrayProducto;
    }
}

class Producto extends BaseProducto
{

    public $id;
    public $nombre;
    public $empresa;
    public $precio;
    public $categoria;
    public $descripcion;
}
