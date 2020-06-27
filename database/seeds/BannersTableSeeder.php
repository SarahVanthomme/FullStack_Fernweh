<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('banners')->insert(['name'=>'Asia', 'body'=>'is enduring traditions', 'continent_id'=>'1', 'photo_id'=>'1']);
        DB::table('banners')->insert(['name'=>'Africa', 'body'=>'is enduring traditions', 'continent_id'=>'2', 'photo_id'=>'2']);
        DB::table('banners')->insert(['name'=>'South America', 'body'=>'is enduring traditions', 'continent_id'=>'3', 'photo_id'=>'3']);

    }
}
