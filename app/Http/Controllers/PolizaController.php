<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poliza;
use App\Cliente;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class PolizaController extends Controller
{
    public function getPolizas(){
        //dd(Poliza::with('cliente')->get());
        return response()->json(Poliza::with('cliente', 'producto')->get(), 200);
    }

    public function getPolizaById($id_poliza){
        $poliza = Poliza::find($id_poliza);
        if(is_null($poliza)){
            return response()->json(['message' => 'Poliza no encontrada'], 404);
        }
        return response()->json($poliza::find($id_poliza), 200);
    }

    public function agregarPoliza(Request $request){
        $poliza = Poliza::create($request->all());
        return response($poliza, 201);
    }

    public function actualizarPoliza(Request $request, $id_poliza){
        $poliza = Poliza::find($id_poliza);
        if(is_null($poliza)){
            return response()->json(['message' => 'Poliza no encontrada'], 404);
        }
        $poliza->update($request->all());
        return response($poliza, 200);
    }

    public function eliminarPoliza(Request $request, $id_poliza){
        $poliza = Poliza::find($id_poliza);
        if(is_null($poliza)){
            return response()->json(['message' => 'Poliza no encontrada'], 404);
        }
        $poliza->delete();
        return response()->json(null, 204);

    }
}
