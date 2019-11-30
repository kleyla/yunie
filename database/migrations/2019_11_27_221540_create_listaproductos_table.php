<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaproductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listaproductos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('estado')->default(true);
            $table->bigInteger('id_producto')->unsigned()->nullable();
            $table->foreign('id_producto')->references('id')->on('productos');
            $table->bigInteger('id_listadeseo')->unsigned()->nullable();
            $table->foreign('id_listadeseo')->references('id')->on('listadeseos');
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
        Schema::dropIfExists('listaproductos');
    }
}
