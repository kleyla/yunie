<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritoproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritoproductos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('subtotal')->nullable();
            $table->integer('cantidad')->nullable();
            $table->boolean('estado')->default(true);
            $table->bigInteger('id_producto')->unsigned()->nullable();
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->bigInteger('id_carrito')->unsigned()->nullable();
            $table->foreign('id_carrito')->references('id')->on('carritos');
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
        Schema::dropIfExists('carritoproductos');
    }
}
