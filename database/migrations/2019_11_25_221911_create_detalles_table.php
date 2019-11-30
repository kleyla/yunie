<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('subtotal')->nullable();
            $table->integer('cantidad')->nullable();
            $table->boolean('estado')->default(true);

            $table->bigInteger('id_publicacion')->unsigned()->nullable();
            $table->foreign('id_publicacion')->references('id')->on('publicacions');
            $table->bigInteger('id_carrito_prod')->unsigned()->nullable();
            $table->foreign('id_carrito_prod')->references('id')->on('carritoproductos');
            $table->bigInteger('id_nota')->unsigned()->nullable();
            $table->foreign('id_nota')->references('id')->on('notas');
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
        Schema::dropIfExists('detalles');
    }
}
