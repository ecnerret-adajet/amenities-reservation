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
         for($i = 1; $i <= 17; $i++ ){
            DB::table('floors')->insert([
              'name' => $i
            ]);
         }         
    }
}
