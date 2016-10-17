<?php

use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('reservations')->insert([
          array('id' => '1', 'user_id' => '1', 'name'=>'Basketball','charges'=>'150'),
          array('id' => '2', 'user_id' => '1', 'name'=>'Swimming','charges'=>'150'),
          array('id' => '3', 'user_id' => '1', 'name'=>'Badminton','charges'=>'150'),
          array('id' => '4', 'user_id' => '1', 'name'=>'Gym','charges'=>'150'),


        ]);
    }
}
