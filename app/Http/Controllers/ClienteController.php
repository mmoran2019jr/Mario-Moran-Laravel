<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function getClientes(){
        return response()->json(Cliente::all(), 200);
    }
}
