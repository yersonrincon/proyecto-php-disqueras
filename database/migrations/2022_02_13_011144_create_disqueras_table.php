<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisquerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disqueras', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('identificacion','15')->unique();
            $table->string('nombreDisquera','50');
            $table->string('telefonoDisquera','15');
            $table->string('direccion','100');
            $table->string('estadoDisquera','10');
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
        Schema::dropIfExists('disqueras');
    }
}

