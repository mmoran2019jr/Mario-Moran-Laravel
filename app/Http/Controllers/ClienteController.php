<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function getClientes(){
        return response()->json(Cliente::all(), 200);
    }

    public function getClienteById($id_cliente){
        $cliente = Cliente::find($id_cliente);
        if(is_null($cliente)){
            return response()->json(['message' => 'Poliza no encontrada'], 404);
        }
        return response()->json($cliente::find($id_cliente), 200);
    }
}
