<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('continents')->insert(['name'=>'Asia', 'photo_id'=>'1']);
        DB::table('continents')->insert(['name'=>'Africa', 'photo_id'=>'2']);
        DB::table('continents')->insert(['name'=>'South America', 'photo_id'=>'3']);


        /*  DB::table('continents')->insert(['name'=>'Africa']);
          DB::table('continents')->insert(['name'=>'Antarctica']);
          DB::table('continents')->insert(['name'=>'Asia']);
          DB::table('continents')->insert(['name'=>'Europa']);
          DB::table('continents')->insert(['name'=>'North America']);
          DB::table('continents')->insert(['name'=>'Oceania']);
          DB::table('continents')->insert(['name'=>'South America']);*/

    }
}
