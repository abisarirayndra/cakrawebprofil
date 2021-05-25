<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wp_alumnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('foto');
            $table->string('akademi');
            $table->string('fb');
            $table->string('twitter');
            $table->string('ig');
            $table->text('testi');
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
        Schema::dropIfExists('wp_alumnis');
    }
}
