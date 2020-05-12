<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('photos')->insert(['file'=>'bestseller1.jpg']);
        DB::table('photos')->insert(['file'=>'bestseller4.jpg']);
        DB::table('photos')->insert(['file'=>'bestseller2.jpg']);
    }
}
