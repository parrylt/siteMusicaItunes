<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function showFormularioReserva(Request $request){
        return view('fazerReserva');
    }

    public function cadReserva(Request $request){
        $dadosValidos = $request->validate([
            'idcliente' => 'integer|required',
            'idfuncionario' => 'integer|required',
            'idquarto' => 'integer|required',
            'situacao'=> 'string|required',
            'valortotal' => 'numeric|required',
            'dataEntrada'=> 'date|required',
            'dataSaida'=> 'date|required'
        ]);

        Reserva::create($dadosValidos);

        return Redirect::route('home');
    }

    public function gerenciarReserva(Request $request){
        return view('gerenciarReserva');
    }
}

