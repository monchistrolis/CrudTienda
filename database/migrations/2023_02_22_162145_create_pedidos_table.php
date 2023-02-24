<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('producto_id')->unsigned()->nullable();
            $table->unsignedBigInteger('cliente_id')->unsigned()->nullable();

            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('producto');
            $table->string('cantidad');
            $table->string('proveedor');
            $table->date('fecha');
            $table->string('firma');
            $table->string('observaciones');

            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');


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
        Schema::dropIfExists('pedidos');
    }
}
