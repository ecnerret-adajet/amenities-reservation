<?php

use Illuminate\Database\Seeder;

class BuildingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('buildings')->insert([
          array('name'=>'Morning Star'),
          array('name'=>'Central Star'),
          array('name'=>'New Star Building')
        ]);
    }
}
