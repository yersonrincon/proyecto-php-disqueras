<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancions', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCancion','50');
            $table->date('fechaCancion');
            $table->string('durancionCancion','5');
            $table->unsignedInteger('idAlbumFK');
            $table->foreign('idAlbumFK')->references('id')->on('albums');
            $table->string('estadoCancion','10');
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
        Schema::dropIfExists('cancions');
    }
}
