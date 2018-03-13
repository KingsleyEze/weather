<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('state_id');
            $table->string('country');
            $table->string('city');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('elevation');
            $table->string('observation_time');
            $table->string('weather');
            $table->string('temperature_string');
            $table->string('temp_f');
            $table->string('temp_c');
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
        Schema::dropIfExists('locations');
    }
}
