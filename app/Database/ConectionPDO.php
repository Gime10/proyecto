<?php

namespace App\Database;

class ConectionPDO
{
    static function createConection()
    {
        try {
            $dsn='mysql:dbname=dbproyectox;host=localhost';
            $username='root';
            $password='';
            $conection=new \PDO($dsn, $username,$password);
            return $conection;
        }catch( \PDOException $e)
        {
            echo ' Error de creacion de base de datos'.$e->getMessage();
            exit;
        }
    }
}