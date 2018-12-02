<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodePrixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_prixes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCollectionEdition')->unsigned();
            $table->string('libellePrix')->unique();
            $table->string('slug')->unique();
            $table->float('prix');
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
        Schema::dropIfExists('code_prixes');
    }
}
