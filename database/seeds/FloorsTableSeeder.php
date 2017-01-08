<?php

use Illuminate\Database\Seeder;

class FloorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('floors')->insert([

          for($i = 1; $i <= 17; $i++ ){
          	array('id' => $i, 'name'=> $i),
          }
        ]);
    }
}
