<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->integer('age');
            $table->timestamp('birthday');
            $table->string('phone_num');
            $table->string('telephone_num');
           
             $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    

        Schema::create('owner_tenant', function(Blueprint $table) {
        $table->integer('owner_id')->unsigned()->index();
        $table->foreign('owner_id')->references('id')->on('owners')->onDelete('cascade');

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
        Schema::drop('owner_tenant');
        Schema::drop('tenants');
    }
}
