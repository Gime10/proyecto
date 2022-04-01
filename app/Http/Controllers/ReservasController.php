<?php

namespace App\Http\Controllers;

class ReservasController{

    function index()
    {
        echo' lista de reservas';
        return view('reserva');
    }

    function addReserva()
    {
        echo' aqui añadire un producto';
        return view('añadir reserva');
    }
    function editReserva()
    {
        echo' aqui editare un Producto';
        return view('editar reserva');
    }
    function cancelarReserva()
    {
        echo' aqui cancelare una reserva';
        return view('cancelar reserva');
    }

}