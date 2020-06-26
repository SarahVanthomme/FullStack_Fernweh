<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryPhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('category_photos')->insert(['id'=>'1', 'file'=>'cat-adventure.png']);
        DB::table('category_photos')->insert(['id'=>'2', 'file'=>'cat-beach.png']);
        DB::table('category_photos')->insert(['id'=>'3', 'file'=>'cat-city-break.png']);

    }
}
