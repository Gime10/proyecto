<?php

namespace App\Http\Controllers;

class ServicioController{

    function index()
    {
        echo' lista de servicios';
        return view('servicio');
    }

    function addServicio()
    {
        echo' aqui añadire un servicio';
        return view('añadir servicio');
    }
    function editReserva()
    {
        echo' aqui editare un servicio';
        return view('editar servicio ');
    }
    function cancelarReserva()
    {
        echo' aqui cancelare una reserva';
        return view('cancelar servicio');
    }

}