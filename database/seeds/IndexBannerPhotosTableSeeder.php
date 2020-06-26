<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndexBannerPhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('index_banner_photos')->insert(['id'=>'1', 'file'=>'man.png']);

    }
}
