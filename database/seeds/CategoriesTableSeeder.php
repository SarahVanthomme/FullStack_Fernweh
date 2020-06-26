<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name'=>'Adventure', 'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aliquid animi beatae consectetur facilis maxime mollitia optio praesentium.', 'photo_id'=>'1']);
        DB::table('categories')->insert(['name'=>'Beach', 'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aliquid animi beatae consectetur facilis maxime mollitia optio praesentium.', 'photo_id'=>'2']);
        DB::table('categories')->insert(['name'=>'City Break', 'body'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, adipisci aliquid animi beatae consectetur facilis maxime mollitia optio praesentium.', 'photo_id'=>'3']);
    /*  DB::table('categories')->insert(['name'=>'Adventure', 'body'=>'nlamlkdqfmqlskdjfmqlks']);
        DB::table('categories')->insert(['name'=>'Beach', 'body'=>'nlamlkdqfmqlskdjfmqlks']);
        DB::table('categories')->insert(['name'=>'City Break', 'body'=>'nlamlkdqfmqlskdjfmqlks']);
        DB::table('categories')->insert(['name'=>'Safari', 'body'=>'nlamlkdqfmqlskdjfmqlks']);*/
    }
}

