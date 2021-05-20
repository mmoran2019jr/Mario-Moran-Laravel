<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poliza extends Model
{
    public $timestamp = false;
    protected $fillable = ['producto', 'numero', 'fecha_inicio', 'fecha_fin', 'estado'];
}
