<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangaAuteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manga_auteurs', function (Blueprint $table) {
            $table->integer('idManga')->unsigned();
            $table->integer('idAuteur')->unsigned();
            $table->foreign('idManga')->references('id')->on('mangas')->onDelete('cascade');
            $table->foreign('idAuteur')->references('id')->on('auteurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manga_auteurs');
    }
}
