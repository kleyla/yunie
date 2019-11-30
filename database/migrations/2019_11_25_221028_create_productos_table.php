<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->float('precio')->nullable();
            $table->integer('stock')->nullable();
            $table->string('mainFoto')->nullable();
            $table->boolean('estado')->default(true);
            $table->bigInteger('id_categoria')->unsigned()->nullable();
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->bigInteger('id_tienda')->unsigned()->nullable();
            $table->foreign('id_tienda')->references('id')->on('tiendas');
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
        Schema::dropIfExists('productos');
    }
}
