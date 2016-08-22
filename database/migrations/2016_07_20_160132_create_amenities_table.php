<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->timestamp('date_apply');
            $table->integer('tower_no');
            $table->integer('unit_no');

            $table->string('name_occupants');
            $table->string('name_guest');

            $table->string('conforme');
            $table->timestamp('conforme_date');

            $table->string('approved_by');
            $table->timestamp('date_approved');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->timestamps();

        });


        Schema::create('amenity_owner', function (Blueprint $table) {
            $table->integer('amenity_id')->unsigned()->index();
            $table->foreign('amenity_id')->references('id')->on('amenities')->onDelete('cascade');

            $table->integer('owner_id')->unsigned()->index();
            $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');

            $table->timestamps();

        });


        Schema::create('amenity_tenant', function(Blueprint $table){
            $table->integer('amenity_id')->unsigned()->index();
            $table->foreign('amenity_id')->references('id')->on('amenities')->onDelete('cascade');

            $table->integer('tenant_id')->unsigned()->index();
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');

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
        Schema::drop('amenity_owner');
        Schema::drop('amenity_tenant');
        Schema::drop('amenities');
    }
}
