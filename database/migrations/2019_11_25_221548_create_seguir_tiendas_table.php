<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguirTiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguir_tiendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_cliente')->unsigned()->nullable();
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->bigInteger('id_tienda')->unsigned()->nullable();
            $table->foreign('id_tienda')->references('id')->on('tiendas');
            $table->bigInteger('id_seguir')->unsigned()->nullable();
            $table->foreign('id_seguir')->references('id')->on('seguirs');
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
        Schema::dropIfExists('seguir_tiendas');
    }
}
