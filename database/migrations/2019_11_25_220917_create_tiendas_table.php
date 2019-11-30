<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable();
            $table->integer('nit')->nullable();
            $table->string('telefono')->nullable();
            $table->string('direccion')->nullable();
            // $table->string('latitud')->nullable();
            // $table->string('longitud')->nullable();
            $table->boolean('estado')->default(true);
            $table->string('foto')->nullable();
            $table->bigInteger('id_vendedor')->unsigned()->nullable();
            $table->foreign('id_vendedor')->references('id')->on('vendedors');
            $table->bigInteger('id_ubicacion')->unsigned()->nullable();
            $table->foreign('id_ubicacion')->references('id')->on('ubicacions');
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
        Schema::dropIfExists('tiendas');
    }
}
