<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndexBannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('index_banners')->insert(['name'=>'To travel is to live', 'body'=>'You don\'t need magic to disappear. All you need is a destination.', 'photo_id'=>'1']);

    }
}
