<?php

namespace App\Models;

class BaseProducto
{

    function getProductos()
    {
        
        $conection = \App\Database\ConectionPDO::createConection();
        
        return 'prometo dar productos';

    }
}

class Cliente{

    public $id;
    public $nombre;
    public $empresa;
    public $precio;
    public $categoria;
    public $descripcion;
}