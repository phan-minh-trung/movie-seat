<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('movie_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('price');
            $table->string('x_tier');
            $table->string('y_tier');
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
        Schema::drop('seat_reservations');
    }
}
