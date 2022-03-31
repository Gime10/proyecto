<?php
namespace App\Http\Controllers;

class HomeController{

    function index()
    {
     echo'hola estoy funcionando';
     return new \App\Http\Response('home');
    }


}