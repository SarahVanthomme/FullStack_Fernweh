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
        DB::table('categories')->insert(['name'=>'Adventure']);
        DB::table('categories')->insert(['name'=>'Beach']);
        DB::table('categories')->insert(['name'=>'City Break']);
        DB::table('categories')->insert(['name'=>'Safari']);
    }
}
