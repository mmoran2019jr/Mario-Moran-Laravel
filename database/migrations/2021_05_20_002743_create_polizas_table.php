<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolizasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('POLIZAS', function (Blueprint $table) {
            $table->id();
            $table->string('producto');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('CLIENTES');
            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('PRODUCTOS');
            $table->string('numero');
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->string('estado');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('POLIZAS');
    }
}
