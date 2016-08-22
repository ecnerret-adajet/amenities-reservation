<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->integer('charges');
            $table->integer('no_guest');
            $table->integer('amount_due');
            $table->string('remarks');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });

         Schema::create('amenity_reservation', function (Blueprint $table) {
            $table->integer('amenity_id')->unsigned()->index();
            $table->foreign('amenity_id')->references('id')->on('amenities')->onDelte('cascade');

            $table->integer('reservation_id')->unsigned()->index();
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelte('cascade');

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
        Schema::drop('amenity_reservation');
        Schema::drop('reservations');
    }
}
