<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function getProductos(){
        return response()->json(Producto::all(), 200);
    }

    public function getProductoById($id_producto){
        $producto = Producto::find($id_producto);
        if(is_null($producto)){
            return response()->json(['message' => 'Poliza no encontrada'], 404);
        }
        return response()->json($producto::find($id_producto), 200);
    }
}
