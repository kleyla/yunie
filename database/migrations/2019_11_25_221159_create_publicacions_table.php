<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->date('fecha')->nullable();
            $table->string('descripcion')->nullable();
            // $table->string('titulo')->nullable();
            $table->float('precio_oferta')->nullable();
            $table->integer('cant_monedas')->nullable();
            $table->date('fecha_ini')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->boolean('estado')->default(true);
            // $table->integer('cantidad_ofertada')->nullable();
            $table->bigInteger('id_producto')->unsigned()->nullable();
            $table->foreign('id_producto')->references('id')->on('productos');
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
        Schema::dropIfExists('publicacions');
    }
}
