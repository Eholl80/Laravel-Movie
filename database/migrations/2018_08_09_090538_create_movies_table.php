<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imdb_id');
            $table->string('title');
            $table->integer('year')->nullable();
            $table->string('rating')->nullable();
            $table->string('runtime')->nullable();
            $table->string('genre')->nullable();
            $table->string('director')->nullable();
            $table->string('writers')->nullable();
            $table->string('actors')->nullable();
            $table->text('plot')->nullable();
            $table->string('poster')->nullable();
            $table->string('language')->nullable();
            $table->string('metascore')->nullable();
            $table->string('votes')->nullable();
            $table->string('country')->nullable();
            $table->string('budget')->nullable();
            $table->string('production')->nullable();
            $table->string('type')->nullable();

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
        Schema::dropIfExists('movies');
    }
}
