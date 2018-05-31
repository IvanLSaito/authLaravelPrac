<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTascasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tascas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('propietari');
            $table->string('nom');
            $table->date('data');
            $table->string('assignat');
            $table->string('estat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('tascas');
    }
}
