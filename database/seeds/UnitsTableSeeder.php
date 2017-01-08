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
         for($i = 1; $i <= 170; $i++ ){
            DB::table('units')->insert([
              'unit_no' => $i
            ]);
         }
    }
}
