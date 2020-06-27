<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cities')->insert(['name'=>'Marrakesh', 'description'=>'description for this city']);
        DB::table('cities')->insert(['name'=>'Shanghai', 'description'=>'description for this city']);
        DB::table('cities')->insert(['name'=>'Beijing', 'description'=>'description for this city']);
        DB::table('cities')->insert(['name'=>'Madrid', 'description'=>'description for this city']);
        DB::table('cities')->insert(['name'=>'Barcelona', 'description'=>'description for this city']);

        factory('App\City', 5)->create();

    }
}
