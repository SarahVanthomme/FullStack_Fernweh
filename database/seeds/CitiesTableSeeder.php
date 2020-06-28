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
        DB::table('cities')->insert(['name'=>'Marrakesh']);
        DB::table('cities')->insert(['name'=>'Shanghai']);
        DB::table('cities')->insert(['name'=>'Beijing']);
        DB::table('cities')->insert(['name'=>'Madrid']);
        DB::table('cities')->insert(['name'=>'Barcelona']);

//        factory('App\City', 5)->create();

    }
}
