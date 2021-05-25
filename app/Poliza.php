<?php

namespace App;

use App\Http\Controllers\ProductoController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Poliza extends Model
{
    public $timestamp = false;
    protected $fillable = ['producto', 'cliente_id', 'producto_id', 'numero', 'fecha_inicio', 'fecha_fin', 'estado'];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function producto(){
        return $this->belongsTo(Producto::class);
    }
}
