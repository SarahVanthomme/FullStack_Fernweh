<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('discounts')->insert(['name' => 'discount A', 'percentage' => 20]);
        DB::table('discounts')->insert(['name' => 'discount B', 'percentage' => 25]);
        DB::table('discounts')->insert(['name' => 'discount C', 'percentage' => 45]);
    }
}
