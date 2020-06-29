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
        DB::table('photos')->insert(['file'=>'product1.png']);
        DB::table('photos')->insert(['file'=>'product2.png']);
        DB::table('photos')->insert(['file'=>'product3.png']);
        DB::table('photos')->insert(['file'=>'product4.png']);

    }
}
