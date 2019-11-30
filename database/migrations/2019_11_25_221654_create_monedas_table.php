<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monedas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('valor')->nullable();
            $table->bigInteger('id_megusta')->unsigned()->nullable();
            $table->foreign('id_megusta')->references('id')->on('megusta_pubs');
            $table->bigInteger('id_comentario')->unsigned()->nullable();
            $table->foreign('id_comentario')->references('id')->on('comentar_pubs');
            $table->bigInteger('id_compartir')->unsigned()->nullable();
            $table->foreign('id_compartir')->references('id')->on('compartir_pubs');
            $table->bigInteger('id_seguir')->unsigned()->nullable();
            $table->foreign('id_seguir')->references('id')->on('seguir_tiendas');
            // $table->bigInteger('id_cliente')->unsigned()->nullable();
            // $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->boolean('estado')->default(true);
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
        Schema::dropIfExists('monedas');
    }
}
