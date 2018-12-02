<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPublicVisé')->unsigned();
            $table->integer('idCodePrix')->unsigned();
            $table->integer('idCollectionEdition')->unsigned();
            $table->string('name');
            $table->integer('numTome');
            $table->string('description')->nullable();
            $table->foreign('idPublicVisé')->references('id')->on('public_visés')->onDelete('cascade');
            $table->foreign('idCodePrix')->references('id')->on('code_prixes')->onDelete('cascade');
            $table->foreign('idCollectionEdition')->references('id')->on('collection_editions')->onDelete('cascade');
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
        Schema::dropIfExists('mangas');
    }
}
