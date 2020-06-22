<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('zips')->insert(['zip_code'=>'1000']);

    }
}
