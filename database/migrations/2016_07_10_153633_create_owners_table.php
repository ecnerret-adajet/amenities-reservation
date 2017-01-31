<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->timestamp('birthday');
            $table->string('phone_num');
            $table->string('telephone_num');
            $table->string('avatar')->default('avatar.png');
            $table->boolean('availability')->default(1);
           
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });


        Schema::create('owner_room', function(Blueprint $table) {
            $table->integer('owner_id')->unsigned()->index();
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');

            $table->integer('room_id')->unsigned()->index();
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');

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
        Schema::drop('owner_room');
        Schema::drop('owners');
    }
}
