<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombreCancion','50');
            $table->date('anioPublicacion','15');
            $table->unsignedInteger('idArtistaFK');
            $table->foreign('idArtistaFK')->references('id')->on('artistas');
            $table->unsignedInteger('idGeneroFK');
            $table->foreign('idGeneroFK')->references('id')->on('generos');
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
        Schema::dropIfExists('albums');
    }
}
