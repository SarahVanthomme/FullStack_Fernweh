<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerPhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('banner_photos')->insert(['id'=>'1', 'file'=>'con-asia.png']);
        DB::table('banner_photos')->insert(['id'=>'2', 'file'=>'con-africa.png']);
        DB::table('banner_photos')->insert(['id'=>'3', 'file'=>'con-southam.png']);

    }
}
