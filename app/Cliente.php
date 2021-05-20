<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamp = false;
    protected $fillable = ['nombre', 'apellido', 'telefono', 'cui', 'nit', 'direccion', 'sexo', 'fecha_nacimiento', 'fecha_ingreso'];    
}
