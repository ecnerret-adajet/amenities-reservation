<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('units')->insert([
          for($i = 1; $i <= 170; $i++ ){
          	array('id' => $i, 'name'=> $i),
          }
        ]);
    }
}
