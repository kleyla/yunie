<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMegustaPubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('megusta_pubs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('estado')->default(true);
            $table->bigInteger('id_cliente')->unsigned()->nullable();
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->bigInteger('id_publicacion')->unsigned()->nullable();
            $table->foreign('id_publicacion')->references('id')->on('publicacions');
            $table->bigInteger('id_megusta')->unsigned()->nullable();
            $table->foreign('id_megusta')->references('id')->on('megustas');
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
        Schema::dropIfExists('megusta_pubs');
    }
}
